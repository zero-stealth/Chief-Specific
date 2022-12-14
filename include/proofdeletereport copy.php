<?php
session_start();
include_once '../php/curlsession.php';




// getting alert id from session 
if (!empty($_SESSION["report_id"])) {
    $data = json_encode(['id' => $_SESSION["report_id"]]);}


    // initialize api session
    $session = new Api();

    // api config
    $port = "3000";
    $method = "DELETE";
    $api_url = "http://127.0.0.1:${port}/api/form/report/delete.php";

    // setting data to the api
    $session->data = $data;
    $session->port = $port;
    $session->url  = $api_url;
    $session->method = $method;
    $res = json_decode($session->get_response());

    $message = $res->message;
    // var_dump($res);

switch($message){
    case 'report deleted':
        header('location:/watcher/Chief/chiefpanel.php');
        break;
    default:
    echo "<h1>Failured to delete data</h1>";
    header('location:/watcher/Chief/chiefpanel.php');


}


