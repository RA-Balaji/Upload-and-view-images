<!DOCTYPE html>
<html>
<head>
	<title>Explore</title>
</head>
<body>
	<h2>Images Below</h2>





	<?php
$db = mysqli_connect("localhost","root","","scalevr"); //keep your db name
$sql = "SELECT * FROM images";
$sth = $db->query($sql);
if (!$sth) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
$result=mysqli_fetch_array($sth);
$rows = array();
while($row = mysqli_fetch_array($sth)) {
    $rows[] = $row;
}
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/><br>';

?>
<form action="down.php" method="post">
<input type="submit" value="down">
</form>
</body>
</html>

