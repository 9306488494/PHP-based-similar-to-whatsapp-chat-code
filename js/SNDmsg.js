// JavaScript Document
function SNDmsg(frnd_imei,checksum,name,imei)
{
	var msgg=$('#msgg').val();
   var regexp;
   regexp = /^[A-Za-z&#402;&#352;&#338;&#381;&#353;&#339;&#382;&#376;ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ \t\r\n\f0-9-@#$%&*.,-_+]*$/;
   if (!regexp.test(msgg))
   {
      alert("अपना मैसेज डाले");
      msgg.focus();
      return false;
   }
   if (msgg == "")
   {
      alert("मैसेज को रिक्त न छोड़े");
      msgg.focus();
      return false;
   }
   if (msgg.length < 1)
   {
      alert("मैसेज को खली न छोड़े");
      msgg.focus();
      return false;
   }
   if (msgg.length > 200)
   {
      alert("आप 200 शब्दो से ज्यादा का मैसेज नहीं लिख सकते");
      msgg.focus();
      return false;
   }

	
	sendMEE(frnd_imei,checksum,name,imei,msgg);
	
}