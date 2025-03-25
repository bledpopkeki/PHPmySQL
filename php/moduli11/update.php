<?php
include_once('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE users SET name=:name , surname=:surname , email=:email , age=:age WHERE id=:id";
    $prep = $conn->prepare($sql);

    $prep->bindParam(':id',$id);
    $prep->bindParam(':name',$name);
    $prep->bindParam(':surname',$surname);
    $prep->bindParam(':email',$email);
    $prep->bindParam(':age',$age);
    $prep->execute();
}
header ("Location: dashboard.php")
?>