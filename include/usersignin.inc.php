<?php

session_start();

include_once '../php/curlsession.php';

$login_attempt = 0;
$account_type = "user";

//getting data 
if (!empty($_POST)) { 
    $data = json_encode([
        "login_attempt" => $login_attempt,
        "account_type" => $account_type,
    ] + $_POST);
}

// initialize api session
$session = new Api();

// api config
$port = "3000";
$method = "POST";
$api_url = "http://127.0.0.1:${port}/api/account/signup.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
$res = json_decode( $session->get_response());

var_dump($res);

$message = $res->message;
$username = $res->username;
$type = $res->account_type;

$_SESSION["username"] = $username;
$_SESSION["user_acc"] = $type;



switch($message) {
    case 'account created':
        header('location:/watcher/User/forms/userform.php');
        break;
        default:
        header('location:/watcher/User/Authentication/usersignin.php');
        break;
}
