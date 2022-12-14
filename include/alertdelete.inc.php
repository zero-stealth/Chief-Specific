<?php
session_start();
include_once '../php/curlsession.php';


// getting alert id from session 
if (!empty($_SESSION["id"])) { 
    $data = json_encode(['id' => $_SESSION["id"]]);
}

var_dump($data);

// initialize api session
$session = new Api();

// api config
$port = "3000";
$method = "DELETE";
$api_url = "http://127.0.0.1:${port}/api/chief/alert/delete.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
$res = json_decode($session->get_response());

// var_dump($res);

//get message 
$message = $res->message;

print_r($message);

    switch($data) {
        case 'alert deleted':
            header('location:/watcher/Chief/chiefpanel.php');
            break;
            default:
            header('location:/watcher/Chief/chiefpanel.php');
            break;
    }



