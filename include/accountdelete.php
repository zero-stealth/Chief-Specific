<?php
session_start();
include_once '../php/curlsession.php';


// getting acc id from session 
if (!empty($_SESSION["chief_id"])) { 
    $id = $_SESSION["chief_id"];
} else {
    $id = $_SESSION["user_id"];
}

$data = json_encode(["id"=>$id]);
// initialize api session
$session = new Api();

// api config
$port = "3000";
$method = "DELETE";
$api_url = "http://127.0.0.1:${port}/api/account/delete.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
$res = json_decode($session->get_response());

var_dump($res);

//get message 
$message = $res->message;

// print_r($data);

    switch($message) {
        case 'Account deleted successfully':
            header('location:/index.php');
            break;
            default:
            header('location:/index.php');
            break;
    }



