<?php
session_start();
include_once '../php/curlsession.php';


//getting data 
if (!empty($_POST)) { 
    $data = json_encode([
        "user_name" => $_SESSION["username"],
    ] + $_POST);
}

// initialize api session
$session = new Api();
// api config
$port = "3000";
$method = "POST";
$api_url = "http://127.0.0.1:${port}/api/user/create.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;
$session->method = $method;
//decode json object
$res = json_decode($session->get_response());
var_dump($res);
//loop to get the response
$message = $res->message;

if($message == 'user created') {
    header('location:/watcher/User/userpanel.php');
} else {
    header('location:/watcher/User/forms/userform.php');
}


