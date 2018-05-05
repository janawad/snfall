

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div>
		<h2>Transaction Failed. Redirecting...</h2>
	</div>

	<div>
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
	
			if(isset($_POST['status'])){
				if($_POST['status']=="failure"){
					$query = mysql_query("INSERT INTO `transaction_details` (`status`,`no_of_tickets`,`txnid`, `ticket_no`,`amount`,`bankcode`,`net_amount_debit`,`mode`,`PG_TYPE`,`card_no`,`name_on_card`,`addedon`,`unmappedstatus`,`firstname`,`email`,`phone`) VALUES ('".$_POST['status']."','".$no_of_tickets."','".$_POST['txnid']."','".$_POST['productinfo']."','".$_POST['amount']."','".$_POST['bankcode']."','".$_POST['net_amount_debit']."','".$_POST['mode']."','".$_POST['PG_TYPE']."','".$_POST['card_no']."','".$_POST['name_on_card']."','".$_POST['addedon']."','".$_POST['productinfo']."','".$_POST['firstname']."','".$_POST['email']."','".$_POST['phone']."')"). mysql_error();
				}
			}
			header('Refresh: 5;url=index.php');
			?>
	</div>
</body>
</html>