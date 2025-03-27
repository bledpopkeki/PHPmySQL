<?php

$server = 'localhost';
$pass='';
$user = 'root';
$dbname = 'db';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$dbname;",$user,$pass);

    } catch(Exception $e){
        echo "error ".$e;
    }
?>