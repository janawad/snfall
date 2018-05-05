<?php
	require_once("config.php");
	$sql = "SELECT * FROM buyer_details WHERE txnid = ".$_POST['txnid']." ORDER BY `id` DESC LIMIT 1";
	$result = $conn->query($sql);
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$no_of_tickets=$row["no_of_tickets"];
		$session_date=$row["session_date"];
		$booking_date=$row['booking_date']; 
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SnowCityBlr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	  .jumbotron{
	  background-color : #139efe;
	  width:auto;
	  margin-left:-16px;
	  padding-bottom:0px;}
	  .text-center{
	  margin-right:-15px;}
	  img{ background: white; width: 175px; height: 63px;; }
	  a{color:#fff; font-size:15px;}
	  .footer .col-sm-12 {
	  margin-bottom:-10px;}
  </style>
</head>
<body>
	<div class="container" style="border:15px solid #139EFE; border-radius:35px; width:800px;">
		<div class="jumbotron text-center">
		    <div class="row">
				<div class="col-sm-1">
				  <img src="images/Snow City.png" alt="SnowCityblr_logo" style="margin-left: -59px;">
				</div>
				<div class="col-sm-10">
				  <p>contact:+91-80-23550000</p><p style="margin-bottom: -18px; margin-top: -9px;"> &nbsp;&nbsp;<a href="http://www.facebook.com">Facebook</a>&nbsp;&nbsp;<a href="http://www.youtube.com">Youtube</a>&nbsp;&nbsp;<a href="http://www.googleplus.com">Google+</a>&nbsp;&nbsp;<a href="http://www.twiter.com">Twiter</a><p>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-6">
				<h3>Ticket</h3>
				<?php 
					if(isset($_POST['status'])){
						if($_POST['status']=="success"){
							
							$query = mysql_query("INSERT INTO `transaction_details` (`status`,`no_of_tickets`,`txnid`, `ticket_no`,`amount`,`bankcode`,`net_amount_debit`,`mode`,`PG_TYPE`,`card_no`,`name_on_card`,`addedon`,`unmappedstatus`,`firstname`,`email`,`phone`) VALUES ('".$_POST['status']."','".$no_of_tickets."','".$_POST['txnid']."','".$_POST['productinfo']."','".$_POST['amount']."','".$_POST['bankcode']."','".$_POST['net_amount_debit']."','".$_POST['mode']."','".$_POST['PG_TYPE']."','".$_POST['card_no']."','".$_POST['name_on_card']."','".$_POST['addedon']."','".$_POST['productinfo']."','".$_POST['firstname']."','".$_POST['email']."','".$_POST['phone']."')"). mysql_error();
							
							echo "<p>Name: ".$_POST['firstname']."</p>";
							echo "<p>Email: ".$_POST['email']."</p>";
							echo "<p>Phone No: ".$_POST['phone']."</p>";
							echo "<p>Ticket No: ".$_POST['productinfo']."</p>";
							echo "<p>Transcation Id: ".$_POST['txnid']."</p>";
							echo "<p>No.of Tickets: ".$no_of_tickets."</p>";
							
							echo "<p>Convenieence Charge: Rs 20</p>";
							echo "<p>Total Amount: ".$_POST['amount']."</p>";
							echo "<p>Payment Mode: ".$_POST['mode']."</p>";
							echo "<p>Booking Date: ".$booking_date."</p>";
							echo "<p>Session Date: ".$session_date."</p>";
							
							/*echo "<p>bankcode: ".$_POST['bankcode']."</p>";
							echo "<p>net_amount_debit: ".$_POST['net_amount_debit']."</p>";
							echo "<p>PG_TYPE: ".$_POST['PG_TYPE']."</p>";
							echo "<p>card_no: ".$_POST['card_no']."</p>";
							echo "<p>name_on_card: ".$_POST['name_on_card']."</p>";
							echo "<p>addedon: ".$_POST['addedon']."</p>";
							echo "<p>unmappedstatus: ".$_POST['unmappedstatus']."</p>";*/
							
							//send mail to ticket booker
							$Email = $_POST["email"];
							$Username = $_POST["firstname"];
							$phone = $_POST["phone"];
							$productinfo = $_POST["productinfo"];
							$txnid = $_POST["txnid"];
							$amount = $_POST["amount"];
							$mode = $_POST["mode"];
							$subject = 'Welcome to Snow City Bangalore';
							$filename ="email_format.html";
							
							if($mailtemplate = fopen($filename, "r")) {
								$contents 		= fread($mailtemplate, filesize($filename));
								$contents 		= str_replace('@Username@',$Username,$contents);
								$contents 		= str_replace('@Email@',$Email,$contents);
								$contents 		= str_replace('@phone@',$phone,$contents);
								$contents 		= str_replace('@productinfo@',$productinfo,$contents);
								$contents 		= str_replace('@txnid@',$txnid,$contents);
								$contents 		= str_replace('@no_of_tickets@',$no_of_tickets,$contents);
								$contents 		= str_replace('@amount@',$amount,$contents);
								$contents 		= str_replace('@mode@',$mode,$contents);
								$contents 		= str_replace('@booking_date@',$booking_date,$contents);
								$contents 		= str_replace('@session_date@',$session_date,$contents);
								
								fclose($mailtemplate);
							}	
							
							$message = $contents;
							$headers = "From: Snowcityblr <info@snowcityblr.com>\r\n";
							$headers .= "Reply-To: info@snowcityblr.com\r\n";
							$headers .= "CC: info@snowcityblr.com\r\n";
							$headers .= "MIME-Version: 1.0\r\n";
							$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
							$headers .= "X-Mailer: PHP/". phpversion();
							mail($Email, $subject, $message, $headers);
							
							// Send SMS to ticket bookers
							
							$api_key = "A8e0ece773645899681baea33e7336b9b";
							$sender = "SIDEMO";
							$message_sms = "Dear Customer, your ticket for SnowCity on ".$session_date." with ticket number ".$_POST['productinfo']." has been booked successfully. Please carry a valid ID proof. Terms & Conditions Apply (https://goo.gl/UtuugJ). ";
							$vars = "method=sms&api_key=".$api_key."&to=".$phone."&sender=".$sender."&message=".$message_sms."";
							$curl = curl_init('http://api-alerts.solutionsinfini.com/v3/');
							curl_setopt($curl, CURLOPT_POST, true);
							curl_setopt($curl, CURLOPT_POSTFIELDS, $vars);
							curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
							$result = curl_exec($curl);
							curl_close($curl);
							die();
							
							unset($_POST);
						}
					}
				?>
			</div>
			<div class="col-sm-6" style="background-color: #139efe; color:#fff; text-align:center;
			border-radius: 25px;">
			  <h3>Session Timings</h3><hr>
				<p>Session 1 : 10:15hrs - 11:00hrs</p>
				<p>Session 2 : 11:15hrs - 12:00hrs</p>
				<p>Session 3 : 12:15hrs - 13:00hrs</p>
				<p>Session 4 : 13:15hrs - 14:00hrs</p>
				<p>Session 5 : 14:15hrs - 15:00hrs</p>
				<p>Session 6 : 15:15hrs - 16:00hrs</p>
				<p>Session 7 : 16:15hrs - 17:00hrs</p>
				<p>Session 8 : 17:15hrs - 18:00hrs</p>
				<p>Session 9 : 18:15hrs - 19:00hrs</p>
				<p>Session 10 : 19:15hrs - 20:00hrs</p>
			</div>
		</div>
		<div class="col-sm-12">
			<h3>Terms & Conditions:</h3>
			<div class="col-sm-12" style="border:1px solid #9ECBDD;">
			  <li> Mobiles/Cameras tend to get affected by the sub zero temperatures, and so they are not allowed. They can be deposited at the mobile counter free of charge, or taken into the snow area at a free of Rs. 50 per mobile/camera.</li>
			  <li> Handbags, eatables and beverages of any kind are not allowed into the snow area.</li>
			  <li> Safety lockers are available for Rent.</li>
			  <li> The locker key holder is responsible for the key. If lost/damaged, Rs. 100 will be charged as duplicate key charges.</li>
			  <li> Jackets, gloves and boots will be provided free of cost, on returnable basis.</li>
			  <li> All apparel/boot sizes are subject to avaliability.</li>
			  <li> Wearing socks is recommended due to subzero temperatures. Socks are available for a small fee, but you can also bring your own.</li>
			  <li> Admission fees include usage of snow tubes/rafts.</li>
			  <li> Admission fees include usage of snow tubes/rafts.</li>
			  <li> If session is fully booked, the next session ticket will be issued.</li>
			</div>
		</div>
		<div class="col-sm-12">
			<h4 style="color:#63AFE1;">Enjoy the Real Snow! Ticket is valid only for Session Date.</h4>
		</div>
		<div class="footer">
			<div class="row">
				<div class="col-sm-12" style="background-color: #139efe;"><br>
				  <p>In case you have any difficulty with your booking you can call us at +91-80-23550000, +91-78-29550000</p>
				  <p>email us on:<a href="mailto:info@snowcityblr.com">info@snowcityblr.com</a></p>
				</div>
			</div>
		</div>

	</div>
</body>
</html>
