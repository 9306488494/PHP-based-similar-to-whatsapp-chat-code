<?php
include("connection.php");
ini_set('error_reporting', E_STRICT);

$imei=$_GET['imei'];
$frnd_imei=$_GET['frnd_imei'];
$pic=$_GET['pic'];
$name=$_GET['name'];

//get checksum first tag sql
include("getChecksum.php");
include("getUsername.php");
// $checksum have checksum
// $myName have my name
// $frnd_name have frnd name


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- added external JS files  -->
<script src="js/SNDmsg.js"></script>
<script src="js/callMsg.js"></script>
<script src="js/sendMEE.js"></script>
<script src="js/makeSeen.js"></script>
<script src="js/popUp.js"></script>



<script>
setInterval(function(){	
	callMsg('<?php echo $imei; ?>','<?php echo $frnd_imei; ?>','<?php echo $checksum; ?>');
	makeSeen('<?php echo $frnd_imei; ?>');
},2000);
</script>

<script>
setInterval(function(){	

	makeSeen('<?php echo $frnd_imei; ?>');
},5000);
</script>


</head>
<title></title>

<!-- attach CSS files -->
<link href="css/androidChat.css" rel="stylesheet" />

<!-- attach JS files -->
<script src="js/androidChat.js"></script>

</head>
<body>

<div class="page">
  <div class="marvel-device nexus5">
    <div class="top-bar"></div>
    <div class="sleep"></div>
    <div class="volume"></div>
    <div class="camera"></div>
    <div class="screen">
      <div class="screen-container">
        <div class="status-bar">
          <div class="time"></div>
          <div class="battery">
            <i class="zmdi zmdi-battery"></i>
          </div>
          <div class="network">
            <i class="zmdi zmdi-network"></i>
          </div>
          <div class="wifi">
            <i class="zmdi zmdi-wifi-alt-2"></i>
          </div>
          <div class="star">
            <i class="zmdi zmdi-star"></i>
          </div>
        </div>
        <div class="chat">
          <div class="chat-container">
            <div class="user-bar" style="color:#FFF !important; background-color:#C00 !important;">
              <div class="back">
                <i class="zmdi zmdi-arrow-left"></i>
              </div>
              <div class="avatar">
                <img src="<?php echo $pic; ?>" style="height:40px; width:40px" alt="Avatar">
              </div>
              <div class="name" style="padding-left:10px; width:170px !important">
                <span><?php echo $name; ?></span>
                <!-- <span class="status">online</span>  -->
              <!--  <span class="status">11.00AM - 6.00PM</span> -->
              </div>
              <div class="actions more">
                <i class="zmdi zmdi-more-vert"></i>
              </div>
              <div class="actions attachment">
                <i class="zmdi zmdi-attachment-alt"></i>
              </div>
              <div class="actions">
                <i class="zmdi zmdi-phone"></i>
              </div>
            </div>
            
            
            
            
            <div class="conversation">
              <div class="conversation-container" id="userr" style="overflow:scroll !important">              
              <div id="android_id"></div>        
              </div>
              <div class="conversation-compose">
              
                <div class="emoji">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="smiley" x="3147" y="3209" onClick="popUp()"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z" fill="#7d8489"/></svg>
                </div>                
                 <input class="input-msg" name="msgg" id="msgg" placeholder="Type a message" autocomplete="on" autofocus></input>
                <input type="hidden" id="counter" name="counter" value="0" />
                <input type="hidden" id="counter2" name="counter2" value="0" />               
                
                <button class="send">                
                <div class="circle" style="background-color:#C00 !important" onClick="SNDmsg('<?php echo $frnd_imei; ?>','<?php echo $checksum; ?>','<?php echo $myName; ?>','<?php echo $imei; ?>')">
                      <i class="zmdi zmdi-mail-send"><i class="fa fa-location-arrow" style="padding-right:10px"></i></i>
                    </div>                   
                  </button>
              </div>
            </div>           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



</body>
</html>
