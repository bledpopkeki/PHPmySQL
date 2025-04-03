<?php
if(empty($_session['username'])){
    header('Location: login.php')
}
$sql = "SELECT * FROM users";
$selectUsers = $conn->execute();

$users_data = $selectUsers->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 10</title>
</head>
<style>
    table,td,th{
        border:1px solid black;
        border-collapse: collapse;
    }
    td,th{
        padding:10px 20px;
    }
</style>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark fex-md-nowrap p-0 shadow">
    <a href="#" class="navbar-brand col-sm-3 col-md-2n mr-0">Welcome, <i><?php echo $_SESSION['username'];?></i></a>
        <ul class="navbar-nav px-3">
            <li class="nav-utem text-nowrap">
                <a href="logout.php" class="nav-link">Sign out</a>
            </li>
        </ul>
    </nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <ul>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>
        </nav>
    </div>
</div>
<?php
include_once('config.php');
$sql = 'SELECT * FROM users';
$getUsers = $conn->prepare($sql);
$getUsers->execute();
$users = $getUsers->fetchAll();
?>
<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>surname</th>
        <th>email</th>
        <th>age</th>
    </thead>
<tbody>
    <?php
    foreach($users as $user){
        ?>
        <tr>
            <td><?= $user['id']?></td>
            <td><?= $user['name']?></td>
            <td><?= $user['surname']?></td>
            <td><?= $user['email']?></td>
            <td><?= $user['age']?></td>
            <td><?="<a href='edit.php?id=$user[id]'>Update</a>"?></td>
            <td><?="<a href='delete.php?id=$user[id]'>Delete</a>"?></td>
    </tr>
    <?php
    }
    ?>
    <a href="edit.php?id=1">Edit</a>
</tbody>
</table>
<a href="index.php">Add User</a>
</table>
</body>
</html>