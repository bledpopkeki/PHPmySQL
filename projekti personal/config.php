<?php
$server = "localhost";
$password = '';
$user = 'root';
$dbname = 'f1';

try{
$conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$password);
}catch(PDOexception $e){
    echo "Error " . $e->getMessage();
}