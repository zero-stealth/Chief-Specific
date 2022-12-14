<?php
session_start();

$username = $_SESSION["chiefname"];
$query = $_SESSION["p-query"];

$search_query = $query != '' ? $query : 'murder';

$port = "3000";

//accounts
$search_url = "http://127.0.0.1:${port}/api/form/report/search.php?query=${search_query}";

$searchjson_data = file_get_contents($search_url);

$search_data = json_decode($searchjson_data);

// var_dump(($search_data));

$search = array_splice($search_data, 0, 50);

foreach ($search as $s) {
};


?>

<div class="search-section">
    <div class="s-title">
        <h1>search for a crime</h1>
    </div>
    <div class="search-container">
        <form action="/watcher/include/proof-search.inc.php" method="post" class="f-search">
            <div class="s-c">
                <input type="text" class="s-input" name="crime-des" placeholder="search crime">
            </div>
            <div class="s-c">
                <select class="crime-type" name="crime[]">
                    <option value="" disabled selected>type of crime</option>
                    <option value="Murder">Murder</option>
                    <option value="Assault">Assault</option>
                    <option value="kidnap">Kidnap</option>
                    <option value="Wanted">Wanted</option>
                    <option value="Missing">Missing</option>
                    <option value="Kidnapp">Kidnapp</option>
                    <option value="rape">rape</option>
                </select>
            </div>
            <!-- <div class="s-c">
                <input type="text" class="s-input" name="gender" placeholder="Gender">
            </div> -->
            <div class="s-c">
                <input type="text" class="s-input" name="location" placeholder="location">
            </div>
            <!-- <div class="s-c">
                <input type="text" class="s-input" name="age" placeholder="Age">
            </div> -->
            <div class="s-c-btn">
                <button type="submit" class="s-btn">Search</button>
            </div>
        </form>
    </div>
    <div class="report-container">
        <div class="report-display-container">
            <div class="report-display">
                <table>
                    <th>Date reported</th>
                    <th>Time reported</th>
                    <th>Crime type</th>
                    <th>Location</th>
                    <th>Station</th>
                    <th>Crime description</th>
                    <tr>
                        <?php foreach ($search as $s) { ?>
                            <td><?php echo $s->report_date; ?></td>
                            <td><?php echo $s->time_of_report; ?></td>
                            <td><?php echo $s->report_type; ?></td>
                            <td><?php echo $s->location; ?></td>
                            <td><?php echo $s->station; ?></td>
                            <td><?php echo $s->description; ?></td>
                            <td>
                            <?php } ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    @import '/watcher/Style/search.css';
</style>