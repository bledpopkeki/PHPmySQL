<?php
    session_start();
$localhost = 'localhost';
$password='';
$user ='root';
$db='db';

    try{
        $conn = new PDO("mysql:host=$localhost;dbname=$db;",$user,$password);
        echo "Connection succsesfull";
    } catch(PDOexception $e){
        echo "something wwent wrong.";
    }
?>