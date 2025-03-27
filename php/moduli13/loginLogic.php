<?php
include_once('config.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username ) || empty($password)){
        echo "Fill all the fields";
        header("refresh:2;url=login.php");
        }else{
            $sql = "SELECT * FROM users WHERE username=:username";
            $insertSql=$conn->prepare($sql);
            $insertSql->bindparam(':username',$username);
            $insertSql->execute();
        }
}else{

}