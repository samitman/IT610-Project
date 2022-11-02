<?php

function db_connect() {
    global $db;

    $host = 'db';
    $user = 'sam';
    $password = 'changeme';
    $db_name = 'db';

    if(!isset($db)){
        $db = new mysqli($host,$user,$password,$db_name);
        #echo "Connected to DB!";
    }

    if($db->connect_error){
        echo "Could not connect to DB!";
        exit;
    }

    return $db;
}
?> 
