<?php
$servername = "mysql1.000webhost.com";
$username = "a9169636_User";
$password = "Thailand2015";
$database = "a9169636_Login";

 
$con=mysqli_connect("localhost",$username,$password,$database);

$name = $_POST["name"];
$age = $_POST["age"];
$password = $_POST["password"];
$username = $_POST["username"]; 

$statement = mysqli_prepare($con,"INSERT INTO User(name,age,username,password) (?,?,?,?)");
mysqli_stmt_blind_param($statement,"siss",$name,$age,$username,$password);
mysqli_stmt_execute($statement);

mysqli_stmt_close($statement);

mysqli_close($con);
?>