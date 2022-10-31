<?php

function db_connect() {
    global $db;

    $host = 'db';
    $user = 'sam';
    $password = 'changeme';
    $db_name = 'db';

    if(!isset($db)){
        $db = new mysqli($host,$user,$password,$db_name);
        echo "<br><div style='margin-left:40%;color:#d54ab6;'>Connected to DB! :D</div>";
    }

    if($db->connect_error){
        echo "<br><div style='margin-left:40%;color:#d54ab6;'>Could not connect to DB! :(</div>";
        exit;
    }

    return $db;
}
?> 
