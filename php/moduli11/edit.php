<?php
include_once('config.php');
$id = $_GET['id'];

$sql = "select * from users where id =:id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id',$id);

$prep->execute();

$data = $prep->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        form>input{
            margin-bottom:10px;
            font-size:20px;
            padding: 5px
        }
        button{
            background: none;
            border: none;
            border:1px solid black;
            padding: 10px 40px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
    <form action="update" method="POST">
        <input type="hidden" name="id" value="<?= $data ['id']?>"><br>
        <input type="text" name="name" value="<?= $data ['name']?>"><br>
        <input type="text" name="surname" value="<?= $data ['surname']?>"><br>
        <input type="email" name="email" value="<?= $data ['email']?>"><br>
        <input type="number" name="age" value="<?= $data ['age']?>"><br>
        
        <br><br>
    </form>
    <a href="dashboard.php">Dashboard</a>
</body>
</html>