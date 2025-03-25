<?php
session_start();

$server = 'localhost';
$pass='';
$user = 'root';
$dbname = 'dita11';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$dbname;",$user,$pass);

    } catch(Exception $e){
        echo "error ".$e;
    }
?>