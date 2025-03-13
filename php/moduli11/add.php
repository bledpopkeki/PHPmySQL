<?php
include_once('config.php');
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "INSERT INTO `users`(`id`, `name`, `surname`, `email`, `age`) VALUES ('[:id]','[:name]','[:surname]','[:email]','[:age]')";
    $sqlQuery = $conn->prepare($sql);

    $sqlQuery->bindParam(':id', $id);
    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':surname', $surname);
    $sqlQuery->bindParam(':email', $email);
    $sqlQuery->bindParam(':age', $age);

    $sqlQuery->execute();

    echo "data saved succsesfully...";












}



?>