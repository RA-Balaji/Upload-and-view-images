<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['password'])){
	echo "Username or Password is Invalid";
}
else
{
//Define $user and $pass
$user=$_POST['username'];
$pass=$_POST['password'];
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "");
//Selecting Database
$db = mysqli_select_db($conn, "scalevr");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND uname='$user'");
$rows = mysqli_num_rows($query);
echo ($rows);
if($rows >= 1){
header("Location: Menu.html"); // Redirecting to other page
exit;
}
else
{
echo "Username of Password is Invalid";
}
mysqli_close($conn); // Closing connection
}
}
else
echo "out";
?>