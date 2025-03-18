<?php
include_once('config.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "insert into users(name, surname, email, age) values (:name, :surname, :email, :age)";
    $sqlQuery = $conn->prepare($sql);

    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':surname', $surname);
    $sqlQuery->bindParam(':email', $email);
    $sqlQuery->bindParam(':age', $age);

    $sqlQuery->execute();

    echo "Data saved succsesfully ...";



}
?>