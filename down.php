<?php

$con= mysqli_connect("localhost","root","","scalevr"); //keep your db name
$sql = "select * from images where id=13"; // 1
$res = $con->query($sql);
while($row = $res->fetch_assoc())
{ 
    $name = '13';
    $size =  144;
    $type = 'jpg';
    $image = $row['image'];
}

header("Content-type: ".$type);
header('Content-Disposition: attachment; filename="'.$name.'"');
header("Content-Transfer-Encoding: binary"); 
header('Expires: 0');
header('Pragma: no-cache');
header("Content-Length: ".$size);

echo $image;
exit();
?>