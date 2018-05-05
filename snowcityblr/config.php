<?php 
$datab = "snwblr_db";
$user = "root";
$pass = "";
?>
<?php
//Mysql Connect  |   mysql_connect("host","username","password");
//Below example to connect in localhost
$a=mysql_connect("localhost",$user,$pass);

//select your database
$b=mysql_select_db($datab,$a);
if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
?>
<?php 
$connection = mysql_connect("localhost", $user,$pass);
$db = mysql_select_db($datab, $connection);
if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
?>
<?php
$conn = new mysqli("localhost", $user, $pass, $datab);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
?>
<?php 
$link = mysqli_connect("localhost", $user, $pass, $datab);

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
?>