<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'scalevr');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$name = $_POST["uname"];
$email = $_POST["email"];
$password = $_POST["password"];

$name = mysqli_real_escape_string($db, $name);
$email = mysqli_real_escape_string($db, $email);
$password = mysqli_real_escape_string($db, $password);

$query = mysqli_query($db, "INSERT INTO users (email,uname,password)VALUES ('$email', '$name', '$password')");
 
if($query)
{
    header("Location: index.html");
                exit;
}

?>