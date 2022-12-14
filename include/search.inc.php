<?php

session_start();

//getting crime type
if (!empty(isset($_POST['crime']))) {
    foreach ($_POST['crime'] as $select) {
        // $crime = $select;
        $query = $select; 
    }
}

 $_SESSION['s-query']  = $query;

header('location:/watcher/User/userpanel.php');
