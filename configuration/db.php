<?php
    if(!defined('SERVER_NAME')){
    define("SERVER_NAME",'localhost');
    }
    if(!defined('SERVER_USER')){
    define("SERVER_USER",'root');
    }
    if(!defined('SERVER_PASSWORD')){
    define("SERVER_PASSWORD",'');
    }
    if(!defined('SERVER_DBNAME')){
    define("SERVER_DBNAME",'mydb');
    }
    $con = mysqli_connect(SERVER_NAME,SERVER_USER,SERVER_PASSWORD,SERVER_DBNAME);
    if(mysqli_connect_error()){
        echo('cannot connect to database');
        exit();
    }
    // else{
    //     echo("suceessful connection");
    // }

?>