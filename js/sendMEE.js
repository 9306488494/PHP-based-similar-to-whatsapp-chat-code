// JavaScript Document
function sendMEE(frnd_imei,checksum,name,imei,msgg)
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
		
			$('#msgg').val('');	
			setTimeout(function(){
			
			document.getElementById("userr").scrollBy(0,9000);
				}, 1000);								
		
		
		
		}
	};
	xmlhttp.open("GET","SNDmsg.php?name="+name+'&imei='+imei+'&checksum='+checksum+'&msgg='+msgg+'&frnd_imei='+frnd_imei,true);
	xmlhttp.send();
}