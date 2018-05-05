<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
	
		 
		<title>Snowcity Admin Dashboard</title>
		<meta name="description" content="">
		<meta name="author" content="templatemo">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/templatemo-style.css" rel="stylesheet">

		<style>
		* {
		  box-sizing: border-box;
		}
		
		#myInput {
		  border-radius:50px;
		  background-position: 10px 10px;
		  background-repeat: no-repeat;
		  width: 100%;
		  font-size: 16px;
		  padding: 12px 20px 12px 40px;
		  border: 1px solid #ddd;
		  margin-bottom: 12px;
		}
		
		#myTable {
		  border-collapse: collapse;
		  width: 100%;
		  border: 1px solid #ddd;
		  font-size: 18px;
		}
		
		#myTable th, #myTable td {
		  text-align: left;
		  padding: 12px;
		}
		
		#myTable tr {
		  border-bottom: 1px solid #ddd;
		}
		
		#myTable tr.header, #myTable tr:hover {
		  background-color: #f1f1f1;
		}
		</style>
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
				   <!--<li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Charts</a></li>
					<li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Data Visualization</a></li>
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
							<h1>Visiting Details</h1></br>
							<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Ticket Number .." title="Type in a name">
							<div class="panel panel-default table-responsive">
							
				<!---------------------start users Details table---------------------->
								<?php
									require_once("config.php");
									$sql = "SELECT * FROM transaction_details";
									$counter = 0;
									if($result = mysqli_query($link, $sql)){

										if(mysqli_num_rows($result) > 0){ ?>
										
											<table id="myTable" class="table table-striped table-bordered templatemo-user-table">
												<thead>
													<tr>
														<th><a href="" class="white-text templatemo-sort-by">#<span class="caret"></span></a></th>
														
														<th><a href="" class="white-text templatemo-sort-by">Ticket Number <span class="caret"></span></a></th>
														
														<th><a href="" class="white-text templatemo-sort-by">username <span class="caret"></span></a></th>
														
														<th><a href="" class="white-text templatemo-sort-by">Number Of Tickets<span class="caret"></span></a></th>
														
														<th><a href="" class="white-text templatemo-sort-by">Status<span class="caret"></span></a></th>
														
														
													</tr>
												</thead>
												<tbody>
													<tr>
														
														<?php while($row = mysqli_fetch_array($result)){?>
														
														<?php echo "<td>" . ++$counter . "</td>"; ?>
														
														<?php echo "<td>" . $row['ticket_no'] . "</td>"; ?>
														
														<?php echo "<td>" . $row['firstname'] . "</td>"; ?>
														
														<?php echo "<td>" . $row['no_of_tickets'] . "</td>"; ?>
														
														<?php 
															if(($row['visiting_status'])=='0')
															{
															?>
															<td><a href="action.php?visiting_status=<?php echo $row['id'];?>" 
															 class="templatemo-edit-btn" onclick="return confirm('Visited <?php echo $data?>');" style="background-color:#FF5F49; border-radius:50px;"> Not Visited </a></td>
															<?php
															}
															if(($row['visiting_status'])=='1')
															{
															?>
															<td> <a href="action.php?visiting_status=<?php echo $row['id'];?>" 
															 class="templatemo-edit-btn" onclick="return confirm('Not-Visited <?php echo $data?>');" style="background-color:#39ADB4; border-radius:50px;"> Visited </a></td>
															<?php
															} 
															?> 
														
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
					 <footer class="text-right">
						<p>Copyright &copy; 2016 SnowCity Bangalore
						| Designed by <a href="http://www.macle.co.in" target="_parent">macle grafics pvt ltd.</a></p>
					  </footer>         
				</div>
		</div>

		<script>
		function myFunction() {
		  var input, filter, table, tr, td, i;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("myTable");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
		    td = tr[i].getElementsByTagName("td")[1];
		    if (td) {
		      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
		        tr[i].style.display = "";
		      } else {
		        tr[i].style.display = "none";
		      }
		    }       
		  }
		}
		</script>

	</body>
	</html>
