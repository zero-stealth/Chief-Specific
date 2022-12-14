<?php
session_start();
include_once '../php/curlsession.php';


// getting alert id from session 
if (!empty($_SESSION["user_id"])) { 
    $data = json_encode(['id' => $_SESSION["user_id"]]);
}

// var_dump($data);

// initialize api session
$session = new Api();

// api config
$port = "3000";
$method = "DELETE";
$api_url = "http://127.0.0.1:${port}/api/user/delete.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
$res = json_decode($session->get_response());

// var_dump($res);

//get message 
$message = $res->message;

// print_r($message);

    switch($message) {
        case 'user deleted':
            header('location:/watcher/User/Authentication/usersignin.php');
            break;
            default:
            header('location:/watcher/User/userpanel.php');
            break;
    }



