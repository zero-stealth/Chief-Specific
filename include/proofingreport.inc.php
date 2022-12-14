<?php

include_once '../php/curlsession.php';


//getting data 
if (!empty($_POST)) { 
    $data = json_encode($_POST);
} 

// initialize api session
$session = new Api();

// api config
$port = "3000";
$method = "POST";
$api_url = "http://127.0.0.1:${port}/api/form/report/create.php";

// setting data to the api
$session->data = $data;
$session->port = $port;
$session->url  = $api_url;

//decode json object
$res = json_decode($session->get_response());

//loop to get the response

$message = $res->message;


switch($message) {
    case 'report created':
        header('location:/watcher/Chief/chiefpanel.php');
        break;
        default:
        header('location:/watcher/User/forms/report.php');
        break;
}


