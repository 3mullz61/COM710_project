<?php

session_start();
	if(isset($_POST['register'])){
		
		require_once ('config.php');
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "INSERT INTO Users (username, password) values ('$username', '$password')";
		
		$result = $conn->query($sql);
		$_SESSION['User'] = $username;
		header("Location: account.php");
		}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zolivagant | Register</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
</head>

<body class="body-color2">
	
	<header style="background-color: #d7d4ed; height: 70px">
        <div class="container">
            <nav>
              <div class="nav-brand">
                  <a href="index.php">
                      <img src="images/logoZ.jpg" alt="">
                  </a>
              </div> 
              <div class="menu-icons open">
                  <i class="icon ion-md-menu"></i>
              </div>
              <ul class="nav-list">
                <div class="menu-icons close">
                    <i class="icon ion-md-close"></i>
                </div>
                <li class="nav-item">
                    <a href="index.php" class="nav-link current">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#packages" class="nav-link">Packages</a>
                </li>
                <li class="nav-item">
                    <a href="booking.php" class="nav-link">Booking</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <?php
					  if(isset($_SESSION['User'])){
							echo '<li class="nav-item">
							<a href="account.php" class="nav-link">My Account</a>
							</li>
							<li class="nav-item">
							<a href="logout.php" class="nav-link">Logout</a>
							</li>';
					  	}else{
						  echo'<li class="nav-item">
                    			<a href="login.php" class="nav-link">Login</a>
                				</li>';}		
						?>
              </ul>
            </nav>   
        </div>
    </header>
	
	<main>
	<div class="main" style="margin-top: 100px">
    <h1 class="sign" align="center">Register</h1>
    <form class="form1" method="post">
      <input class="un" type="text" align="center" placeholder="Username" name="username" required>
      <input class="pass" type="password" align="center" placeholder="Password" name="password" required>
	<input class="pass" type="password" align="center" placeholder="Confirm password">
      <input class="submit" align="center" type="submit" name="register" value="Register">
		<p class="forgot" align="center">Already have an account? <a href="login.php" style="text-decoration:underline"/>Login</p>
			<p class="forgot" align="center"><a href="index.php" style="text-decoration: underline"/>Back To Home</p>
		</form>
		</div>
	</main>
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>

