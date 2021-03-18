<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather Forecast Website </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="welcomestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p >
        <a id="l-link" href="today.php" >Check about today</a><br><br>

    </p>

	<center><br><br>
		<form method="GET" action="get.php">
		<h2>Enter city name and country name below </h2>
		<br><p>For Example Colombo,sri</p>
			<input type="text" name="q" required>
			<input class="sub"type="submit" name="submit">
		</form>
	</center><br><br><br><br>
  <p >

      <a id="r-link" href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
      <a id="s-link" href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
  </p>
</body>
</html>
