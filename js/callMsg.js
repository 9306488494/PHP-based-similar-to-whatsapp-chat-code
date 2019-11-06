// JavaScript Document
function callMsg(imei,frnd_imei,checksum)
{
	
	if(window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
		document.getElementById("android_id").innerHTML=this.responseText;	
	
		
		}
	};
	xmlhttp.open("GET","callMsg.php?checksum="+checksum+'&imei='+imei+'&frnd_imei='+frnd_imei,true);
	xmlhttp.send();
}