<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Snowcity Admin </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">

<div id="login">
<h2>Snow City</h2><br>
<form action="" method="post">
<div>
<input id="name" name="username" placeholder="username" type="text">

<input id="password" name="password" placeholder="********" type="password">
</div>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>