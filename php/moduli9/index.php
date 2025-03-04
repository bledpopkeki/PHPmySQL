<?php
$username = $_GET["username"];
$password = $_GET["password"];
echo $username;
echo "<br>";
echo $password;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    <label for="username">username:</label>
    <input type="text" name="username" id="username" placeholder="username">
    <label for="password">password:</label>
    <input type="password" name="password" id="password" placeholder="password">
    <input type="submit" value="submit">
</form>
</body>
</html>

