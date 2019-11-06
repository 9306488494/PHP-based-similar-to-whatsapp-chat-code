<?php
include("connection.php");
ini_set('error_reporting', E_STRICT);
//my name
$sql1="SELECT * FROM `reg_status` WHERE `sr`='".$imei."'";
$rs1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($rs1))
{
	$myName=$row1['name'];
}
// frnd name
$sql2="SELECT * FROM `reg_status` WHERE `sr`='".$frnd_imei."'";
$rs2=mysqli_query($conn,$sql2);
while($row2=mysqli_fetch_array($rs2))
{
	$frnd_name=$row2['name'];
}

?>