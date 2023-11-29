<?php
//Create connection credentials
$dbhost = 'localhost';
$dbname = 'quizzer';
$dbuser = 'root';
$dbpass = '';
//create MYSQLI object
//Note there is a mandatory order for db credentials: host, user, pass, name
$mysqli= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
//Error Handler
if($mysqli->connect_error){
    printf("connect failed:%s\n", $mysqli->connect_error);
    exit();
}


