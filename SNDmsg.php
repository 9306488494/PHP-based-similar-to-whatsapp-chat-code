<?php
include("connection.php");
ini_set('error_reporting', E_STRICT);

$name=$_GET['name'];
$imei=$_GET['imei'];
$checksum=$_GET['checksum'];
$msgg=$_GET['msgg'];
$frnd_imei=$_GET['frnd_imei'];

// set time zone
date_default_timezone_set("Asia/Calcutta");
$time=date('h:i a');

$sql1="INSERT INTO `chat`(`imei`, `msgg`, `checksum`, `date1`, `time1`, `name`, `seen`) VALUES ('".$imei."','".$msgg."','".$checksum."','".date('Y-m-d')."','".$time."','".$name."','unseen')";
$rs1=mysqli_query($conn,$sql1);



$sql2="UPDATE `chat` SET `seen`='seen' WHERE `imei`='".$frnd_imei."' && `seen`='unseen'";
$rs2=mysqli_query($conn,$sql2);

?>