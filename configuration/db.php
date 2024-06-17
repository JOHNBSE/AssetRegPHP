<?php
    define("SERVER_NAME",'localhost');
    define("SERVER_USER",'root');
    define("SERVER_PASSWORD",'');
    define("SERVER_DBNAME",'mydb');

    $con = mysqli_connect(SERVER_NAME,SERVER_USER,SERVER_PASSWORD,SERVER_DBNAME);
    if(mysqli_connect_error()){
        echo('cannot connect to database');
        exit();
    }
    // else{
    //     echo("suceessful connection");
    // }

?>