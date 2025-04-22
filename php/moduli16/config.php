<?php
$server = "localhost";
$password = '';
$user = 'root';
$dbname = 'mms';

try{
$conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$password);
}catch(PDOexception $e){
    echo "Error " . $e->getMessage();
}