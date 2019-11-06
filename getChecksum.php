<?php
include("connection.php");
ini_set('error_reporting', E_STRICT);
$sql="SELECT * FROM `chat_control` WHERE `imei`='".$imei."' && `frnd_imei`='".$frnd_imei."'";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{
	$checksum=$row['checksum'];
}

?>