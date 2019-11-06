
				<?php
			include("connection.php");
			ini_set('error_reporting', E_STRICT);
				$checksum=$_GET['checksum'];
				$frnd_imei=$_GET['frnd_imei'];
				$imei=$_GET['imei'];
		
				
				$sql2="SELECT * FROM `chat` WHERE `checksum`='".$checksum."'";
				$rs2=mysqli_query($conn,$sql2);
				$check2=mysqli_num_rows($rs2);
				if($check2>$counter)
				{
					while($row2=mysqli_fetch_array($rs2))
					{
						if($row2['imei']==$imei)
						{
					?>
                       <div class="message sent">
                  <?php echo $row2['msgg']; ?>
                  <span class="metadata">
                      <span class="time"><?php echo $row2['time1']; ?></span>
                      <!-- send and unSeen  -->
                      <?php
                      if($row2['seen']=="seen")
                      {
					   ?>
                      <span class="tick"><img src="images/seen.png" /></span>
                      <?php
					  }
					  else
					  {						  
					  ?>
                      <span class="tick"><img src="images/unseen.png" /></span>
                      <?php
					  }
					  ?>
                  </span>
                </div>
                    <?php
						}
						// type admin
						else
						{
					?>
                 
                <div class="message received">
                  <?php echo $row2['msgg']; ?>
                  <span class="metadata"><span class="time"><?php echo $row2['time1']; ?></span></span>
                </div>
                    <?php
						}
					}
				}	
				?>

   				

