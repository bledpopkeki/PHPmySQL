<?php
$server = 'localhost';
$username = 'root';
$dbname = 'db';
$password ='':

    try{
        $connection = new PDO("mysql:host=$server;dbname=$dbname;",$surname,$password);
    } cartch(Exception $e){
        echo "error";
    }
?>