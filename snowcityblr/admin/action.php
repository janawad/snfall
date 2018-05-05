<?php
	include('config.php');
	if(isset($_GET['visiting_status'])){
		
		$status1=$_GET['visiting_status'];
		$select=mysql_query("select * from transaction_details where id='$status1'");
		while($row=mysql_fetch_object($select)){
			$status_var=$row->visiting_status;
			if($status_var=='0'){
				$status_state=1;
			}
			else{
				$status_state=0;
			}
			$update=mysql_query("update transaction_details set visiting_status='$status_state' where id='$status1' ");
			if($update){
			header("Location:search.php");
			
			}
			else{
			echo mysql_error();
			}
		}
		?>
		<?php
	}
?>