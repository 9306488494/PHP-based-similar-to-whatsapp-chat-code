// JavaScript Document
function makeSeen(frnd_imei)
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
			
		
		}
	};
	xmlhttp.open("GET","makeSeen.php?frnd_imei="+frnd_imei,true);
	xmlhttp.send();
}