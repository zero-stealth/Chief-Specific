<?php

session_start();

//getting crime type
if (!empty(isset($_POST['crime']))) {
    foreach ($_POST['crime'] as $select) {
        // $crime = $select;
        $query = $select; 
    }
}

 $_SESSION['p-query']  = $query;

header('location:/watcher/Chief/chiefpanel.php');
