<?php
session_start();

$username = $_SESSION["chiefname"];
$type = $_SESSION["chief_acc"];

$port = "3000";
//chat api endpoint
$chat_url = "http://127.0.0.1:${port}/api/form/chat_reciever/read.php";

$json_data = file_get_contents($chat_url);

$chat_data = json_decode($json_data);

$chat_s = $chat_data->body;

$chat_s = array_splice($chat_s, 0, 10);

//report api endpoint
$report_url = "http://127.0.0.1:${port}/api/form/report/read.php";

$report_data = file_get_contents($report_url);

$user_report = json_decode($report_data);

$report = $user_report->body;

$report = array_splice($report, 0, 10);

?>

<body>
    <div class="dashboard-panel">
        <!-- dashboard nav info -->
        <div class="dashboard-nav">
            <div class="dashnav-info">
                <span>Hi <?php echo $username; ?></span>
                <h1>Dashboard</h1>
            </div>
            <div class="profile">
                <img src="/watcher/assets/mwala-05.jpg" alt="image" class="profile-img circle-img">
                <div class="profile-info">
                    <h3><?php echo $username; ?></h3>
                    <h4><?php 
                       if($type != '' ){
                        echo $type;
                    } else {
                        echo "admin";
                    }
                    ?></h4>
                </div>
            </div>
        </div>
        <!-- dashboard status info -->
        <div class="dash-status chief-dash-status">
            <div class="status-elem chief-status-elem">
                <h2>60%</h2>
                <h5>User management</h5>
            </div>
            <div class="status-elem">
                <h2>80%</h2>
                <h5>Proofing management</h5>
            </div>
            <div class="status-elem">
                <h2>72%</h2>
                <h5>Crime activities</h5>
            </div>
            <div class="status-elem">
                <h2>78%</h2>
                <h5>efficiency feedback</h5>
            </div>
        </div>
        <!-- small dash -->
        <div class="dash-contained">
            <div class="dash-info ">
                <div class="outer-dash">
                    <h1>Criminal cases</h1>
                    <div class="inner-dash chief-inner-dash">
                        <div class="inner-info chief-inner-info">
                            <?php
                            //admin
                            foreach ($report as $r) {
                                echo "<h4>$r->report_type <br></h4>";
                                echo "<span>$r->description<br></span>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chat system -->
            <div class="chat-system chief-chat">
                <div class="chat-title chief-chat-title">
                    <h1>User feedback</h1>
                    <div class="inner-chat">
                        <!-- chat will loop here -->
                        <?php foreach ($chat_s as $ch) {?>
                        <div class="chat-container chief-details">
                            <div class="chat-details chief-details">
                                   <?php echo "<p>$ch->message</p>";?>
                                    <?php echo "<h5>$ch->username</h5>";?>
                                    <?php echo "<h5>$ch->account_type</h5>";?>
                            </div>
                            <span><?php echo $ch->time_sent;?></span>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    @import '/watcher/Style/dashboard.css';
</style>