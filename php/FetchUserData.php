<?php
$servername = "mysql1.000webhost.com";
$username = "a9169636_User";
$password = "Thailand2015";
$database = "a9169636_Login";

 
$con=mysqli_connect("localhost",$username,$password,$database);

$password = $_POST["password"];
$username = $_POST["username"]; 

$statement = mysqli_prepare($con, "SELECT * FROM User WHERE username = ? , password = ?");
mysqli_stmt_bind_param($statement, "ss", $username, $password);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $user_id, $name, $age, $username, $password);

$user = array();

while(mysqli_stmt_fetch($statement)){
	$user[name] = $name;
	$user[age] = $age;
	$user[username] = $username;
	$user[password] = $password;
	
	
}
echo json_encode($user);

mysqli_stmt_close($statement);

mysqli_close($con);
?>
