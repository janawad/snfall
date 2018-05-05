<?php
	require_once("config.php");
	$sql = "SELECT * FROM buyer_details ORDER BY `id` DESC LIMIT 1";
	$result = $conn->query($sql);
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$mobile=$row["mobile"];
		$username=$row["username"];
	}

	$conn->close();
?>
<?php
$api_key = "A8e0ece773645899681baea33e7336b9b";
$sender = "SIDEMO";

//get form data
$number = $_POST['number'];
$message = $_POST['message'];
$vars = "method=sms&api_key=".$api_key."&to=".$number."&sender=".$sender."&message=".$message."";

if($_POST['submitted']=="true"){
//echo "submitted !!!";
$curl = curl_init('http://api-alerts.solutionsinfini.com/v3/');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $vars);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
die("sms has sent");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>sms integration test</title>

</head>
<body>
<h1>This is sms integration sample code</h1>
<form action="sms.php" method="post">
Number:<br>
<input type="text" name="number" value="<?php echo $mobile; ?>">
<br>Message:<br>
	<textarea name="message"><?php echo $username; ?></textarea><br><br>
	
<?php 
if($mobile!="" && $username!=""){
	?>
<input type="hidden" name="submitted" value="true">

<input id="submitButton" class="button" name="submit" type="submit" value="Send"/>
	<script>
	   $('body').on('click', '#submitButton', function(){
		var textField = $('#submitButton');
		textField.val(textField.val()+' after clicking')       
	});
	</script>
	
<?php } ?>


</form>
</body>
</html>