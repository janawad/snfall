<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		 
		<title>Snowcity Admin Dashboard</title>
		<meta name="description" content="">
		<meta name="author" content="templatemo">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/templatemo-style.css" rel="stylesheet">
	</head>
	<body>  
		<!-- Left column -->
		<div class="templatemo-flex-row">
			<div class="templatemo-sidebar">
				<header class="templatemo-site-header">
				  <!--<div class="square"></div>
				  <h1>SnowCity Admin</h1>-->
				  <a href="home.php">
				  <img alt="Snow City" src="images/Untitled-1 copy.PNG">
				  </a>
				</header>
				<div class="mobile-menu-icon">
					<i class="fa fa-bars"></i>
				</div>
				<nav class="templatemo-left-nav">          
				  <ul>
					<li><a href="index.php"><i class="fa fa-home fa-fw"></i>Transaction Details</a></li>
				   	<li><a href="search.php"><i class="fa fa-database fa-fw"></i>Tickets</a></li>
					<!--<li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Data Visualization</a></li>
					<li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Maps</a></li>-->
					<!--<li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
					<li><a href="activities.php"><i class="fa fa-heart-o" aria-hidden="true"></i>
					Activities</a></li>
					<!--<li><a href="preferences.html"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>-->
					<li><b id="logout"><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></b></li>
				  </ul>  
				</nav>
			</div>
			  <!-- Main content --> 
				<div class="templatemo-content col-1 light-gray-bg">
					<!--<div class="templatemo-top-nav-container">
						<div class="row">
							<nav class="templatemo-top-nav col-lg-12 col-md-12">
								<ul class="text-uppercase">
									<li><a href="home.php" class="active">Admin panel</a></li>
									<li><a href="">Dashboard</a></li>
									<li><a href="">Overview</a></li>
									<!--<li><a href="login.html">Sign in form</a></li>-->
								<!--</ul>  
							</nav> 
						</div>
					</div>-->
					<div class="templatemo-content-container">
						<div class="templatemo-content-widget no-padding">
							<h1>Payment Transaction Details</h1></br>
							<div class="panel panel-default table-responsive">
							
				<!---------------------start users Details table---------------------->
								<?php
									require_once("config.php");
									$sql = "SELECT * FROM transaction_details";
									$counter = 0;
									if($result = mysqli_query($link, $sql)){

										if(mysqli_num_rows($result) > 0){ ?>
										
											<table class="table table-striped table-bordered templatemo-user-table">
												<thead>
													<tr>
														<td><a href="" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">username <span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Email<span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Mobile Number <span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Tickets<span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Ticket Number <span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Transaction Id<span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Transaction Date<span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Total Amount <span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Payment Mode<span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Status<span class="caret"></span></a></td>
														
														<td><a href="" class="white-text templatemo-sort-by">Attraction Type<span class="caret"></span></a></td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<?php while($row = mysqli_fetch_array($result)){?>
														
														<?php echo "<td>" . ++$counter . "</td>"; ?>
														
														<?php echo "<td>" . $row['firstname'] . "</td>"; ?>
														
														<?php echo "<td>" . $row['email'] . "</td>"; ?>

														<?php echo "<td>" . $row['phone'] . "</td>"; ?>
														
														<?php echo "<td>" . $row['no_of_tickets'] . "</td>"; ?>
														
														<?php echo "<td>" . $row['ticket_no'] . "</td>"; ?>
														
														<?php echo "<td>" . $row['txnid'] . "</td>"; ?>
														
														<?php echo "<td>" . $row['addedon'] . "</td>"; ?>

														<?php echo "<td>" . $row['amount'] . "</td>"; ?>
														
														<?php echo "<td>" . $row['mode'] . "</td>"; ?>

														<?php echo "<td>" . $row['status'] . "</td>"; ?>
														
														<?php echo "<td>" . $row['attraction'] . "</td>"; ?>
														
													</tr>
													<?php } ?>
												</tbody>
											</table> 
											
									<?php
										mysqli_free_result($result);

										} else{

											echo "No records matching your query were found.";

										}

										} else{

										echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

										}
										// Close connection

										mysqli_close($link);

									?>	
						<!---------------end users Details table--------------->
							
							</div>                          
						</div>          
					</div>
					  <!--<div class="pagination-wrap">
						<ul class="pagination">
						  <li><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li class="active"><a href="#">3 <span class="sr-only">(current)</span></a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
						  <li>
							<a href="#" aria-label="Next">
							  <span aria-hidden="true"><i class="fa fa-play"></i></span>
							</a>
						  </li>
						</ul>
					  </div>   -->  
					  
					  <footer class="text-right">
						<p>Copyright &copy; 2016 SnowCity Bangalore
						| Designed by <a href="http://www.macle.co.in" target="_parent">macle grafics pvt ltd.</a></p>
					  </footer>         
				</div>
		</div>
		
		<!-- JS -->
			<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
			<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
			<script>
				  $(document).ready(function(){
					// Content widget with background image
					var imageUrl = $('img.content-bg-img').attr('src');
					$('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
					$('img.content-bg-img').hide();        
				  });
			</script>
	</body>
</html>