<?php 
	if(!isset($_POST['username'])){header("location: index.php");}
	// Change the Merchant key here as provided by Payumoney
	$MERCHANT_KEY = "gtKFFx";

	// Change the Merchant Salt as provided by Payumoney
	$SALT = "eCwWELxi";


	$firstname =$_POST['username'];
	$email =$_POST['email'];
	$phone =$_POST['mobile'];
	$productinfo =$_POST['ticket_no'];
	$no_of_tickets =$_POST['no_of_tickets'];
	$amount =$_POST['total_amount'];
	$booking_date =$_POST['booking_date'];
	$session_date =$_POST['session_date'];
	$txnid =$_POST['txnid'];
	$surl =$_POST['surl'];
	$furl =$_POST['furl'];
	

	//$ =$_POST[''];

	$hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$SALT;
	$hash =strtolower(hash("sha512", $hashseq)); 
	

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Payment Processing</title>
		<script>
			function submitForm() {
			  var postForm = document.forms.postForm;
			  postForm.submit();
			}
		</script>
	</head>
	<body onload="submitForm();">

		<div>
			<h2>Payment Gateway Testing Sample</h2>
			<table>
				<tr>
					<td>Transaction Id</td><td><strong><?php echo $productinfo ; ?></strong></td>
					<td>Ticket No</td><td><strong><?php echo $txnid ; ?></strong></td>
					<td>Total Amount: </td><td><strong>Rs. <?php echo $amount ; ?></strong></td>
				</tr>
			</table>
			<div>
				<p>Please be patient. this process might take some time,<br />please do not hit refresh or browser back button or close this window</p>
			</div>
		</div>

		<div>
			<form name="postForm" action="https://test.payu.in/_payment" method="POST" >
				<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ; ?>" />
				<input type="hidden" name="hash" value="<?php echo $hash ;  ?>"/>
				<input type="hidden" name="firstname" value="<?php echo $firstname ;  ?>" />
				<input type="hidden" name="email" value="<?php echo $email ;  ?>" />
				<input type="hidden" name="phone" value="<?php echo $phone ;  ?>" />
				<input type="hidden" name="txnid" value="<?php echo $txnid ;  ?>" />
				<input type="hidden" name="no_of_tickets" value="<?php echo $no_of_tickets; ?>" />
				<input type="hidden" name="productinfo" value="<?php echo $productinfo ;?>"/>
				<input type="hidden" name="amount" value="<?php echo $amount ;  ?>" />
				<input type="hidden" name="booking_date" value="<?php echo $booking_date; ?>" />
				<input type="hidden" name="session_date" value="<?php echo $session_date; ?>" />
				<input type="hidden" name="surl" value="<?php echo $surl ;  ?>" />
				<input type="hidden" name="furl" value="<?php echo $furl ;  ?>" />
			</form>
		</div>
	</body>
</html>

