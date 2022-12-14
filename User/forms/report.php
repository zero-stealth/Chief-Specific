<?php

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'report':
        $title = 'Report crime';
        break;
    default;
        $title = 'page not found';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/watcher/assets/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/watcher/js/jquery-3.6.1.min.js"></script>
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="form-container">
        <form action="/watcher/include/report.inc.php" method="post" class="f-c-p">
        <div class="p-f-details">
            <div class="p-input">
            <label for="crime">Crime type</label>
            <input required type="text" class="f-input" placeholder="murder" name="report_type" id="crime">
            </div>
            <div class="p-input">
            <label for="location">Location</label>
            <input required type="text" class="f-input" placeholder="location" name="location" id="location">
            </div>
            <div class="p-input">
            <label for="station">Station</label>
            <input required type="text" class="f-input" placeholder="police station " name="station" id="station">
            </div>
            <div class="p-input">
            <label for="Description">Description</label>
            <input required type="text" class="a-input" placeholder="iam an admin and a commander " name="description" id="Description">
            </div>
        </div>
        <div class="p-btn">
        <a href="/watcher/User/userpanel.php"><button class="btn-p btn-cancel">Cancel</button></a>
            <button type="submit" class="btn-p btn-save">Save</button>
        </div>
        </form> 
        <div class="img-f">
            <img src="/watcher/assets/pic03.jpg" alt="f-image" class="img-f-p">
        </div>
    </div>
</body>
<style>
    @import '/watcher/Style/app.css';
    @import '/watcher/Style/form.css';
</style>
</html>