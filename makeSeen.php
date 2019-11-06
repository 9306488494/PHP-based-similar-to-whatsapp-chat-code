<?php
include("connection.php");
ini_set('error_reporting', E_STRICT);

$frnd_imei=$_GET['frnd_imei'];

$sql2="UPDATE `chat` SET `seen`='seen' WHERE `imei`='".$frnd_imei."' && `seen`='unseen'";
$rs2=mysqli_query($conn,$sql2);

?>