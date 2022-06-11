<?php
    //DB info
    $db_host = "localhost";
    $db_username = "root";
    $db_pwd = "";
    $db_name = "dddate";

    //Connect to the DB
    $db_link = @new mysqli($db_host, $db_username, $db_pwd, $db_name);

    //Connect error
    if($db_link -> connect_error != ""){
        echo "database connect error!";
    }
    else{
        $db_link -> query("SET NAMES 'utf8'");
    }
?>