<?php
session_start();
include_once '../php/curlsession.php';
// initialize api session

$session = new Api();

$login_attempt = 0;

//getting data 
if (!empty($_POST)) {
    $data = json_encode([
        'login_attempt' => $login_attempt,
    ] + $_POST);
}


// api config
$port = "3000";
$method = "POST";
$api_url = "http://127.0.0.1:${port}/api/account/login.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;

//decode json object
$res = json_decode($session->get_response());


$message = $res->message;
$account_id = $res->account_id;
$username = $res->account_name;
$type = $res->account_type;


//storing session username
$_SESSION["chief_acc"] = $type;
$_SESSION["chiefname"] = $username;
$_SESSION["chief_id"] = $account_id;

switch($message) {
    case 'login successfully':
        header('location:/watcher/Chief/chiefpanel.php');
        break;
        default:
        header('location:/watcher/Chief/Authentication/chieflogin.php');
        break;
}
