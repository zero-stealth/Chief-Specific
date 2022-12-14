<?php
session_start();
include_once '../php/curlsession.php';
// initialize api session

$session = new Api();

//getting data 
if (!empty($_POST)) {
    $data = json_encode([
        'id' => $_SESSION['user_id'],
    ] + $_POST);
}


// api config
$port = "3000";
$method = "POST";
$api_url = "http://127.0.0.1:${port}/api/account/update.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;

//decode json object
$res = json_decode($session->get_response());

echo $message = $res->message;

switch($message) {
    case 'Account updated successfully':
        header('location:/index.php');
        break;
        default:
        header('location:/index.php');
        break;
}
