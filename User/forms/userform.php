<?php


session_start();

$username = $_SESSION["username"];

$title = basename($_SERVER['SCRIPT_NAME']);
$title = str_ireplace('.php', '', $title);

ucfirst($title);

switch ($title) {
    case 'userform':
        $title = 'Sign in details | User ';
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
        <form action="/watcher/include/userform.inc.php" method="post" class="f-c-p">
        <div class="p-settings">
            <img src="/watcher/assets/pic03.jpg" alt="p-img" class="p-img circle-img">
            <h1><?php echo $username; ?></h1>
        </div>
        <div class="p-f-details">
            <div class="p-input">
            <label for="firstname">First name</label>
            <input required type="text" class="f-input" name="first_name" placeholder="Brian" id="firstname">
            </div>
            <div class="p-input">
            <label for="secondname">Last name</label>
            <input required type="text" class="f-input" name="last_name" placeholder="liam" id="secondname">
            </div>
            <div class="p-input">
            <label for="mail">Email</label>
            <input required type="email" class="f-input" placeholder="email" name="email" id="email">
            </div>
            <div class="p-input">
            <label for="gender">Gender</label>
            <input required type="text" class="f-input" placeholder="Male|female " name="gender" id="gender">
            </div>
            <div class="p-input">
            <label for="birth">Date of birth</label>
            <input required type="date" class="f-input" placeholder="yyyy//mmm/dd" name="date_of_birth" id="birth">
            </div>
            <div class="p-input">
            <label for="residence">Residence</label>
            <input required type="text" class="f-input" placeholder="limuru" name="residence" id="residence">
            </div>
            <div class="p-input">
            <label for="phone">Phone number</label>
            <input required type="number" class="f-input" placeholder="073245543" name="phone_no" id="phone">
            </div>
            <div class="p-input">
            <label for="id">ID number</label>
            <input required type="number" class="f-input" placeholder="3245543" name="id_number" id="id">
            </div>
            <div class="p-input">
            <label for="Marital">Marital status</label>
            <input required type="text" class="f-input" placeholder="complicated" name="marital_status" id="marital">
            </div>
        </div>
        <div class="p-btn">
        <a href="/watcher/User/Authentication/usersignin.php"><button class="btn-p btn-cancel">Cancel</button></a>
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