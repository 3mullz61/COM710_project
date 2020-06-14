<?php

session_start();
	if(isset($_POST['login'])){
		
		require_once ('config.php');
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM Users where username = '$username' and password = '$password'";
		
		$result = $conn->query($sql);
		
		if(false == $result){
			die ("unable to find user!");
		}
		if( $result->rowCount() > 0){
			session_start();
			$_SESSION['User'] = $username;
			header("Location: account.php");
		}
	}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
</head>

<body class="body-color">
	<header style="background-color: #d7d4ed; height: 70px">
        <div class="container">
            <nav>
              <div class="nav-brand">
                  <a href="index.html">
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
                    <a href="index.html" class="nav-link">Home</a>
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
                <li class="nav-item">
                    <a href="login.php" class="nav-link current">Login</a>
                </li>
              </ul>
            </nav>   
        </div>
    </header>
	<main>
	<div class="main" style="margin-top: 100px">
    <h1 class="sign" align="center">Login</h1>
    <form class="form1" method="post">
      <input class="un " type="text" align="center" placeholder="Username" name="username">
      <input class="pass" type="password" align="center" placeholder="Password" name="password">
      <input class="submit" align="center" type="submit" name="login" value="Login">
		<p class="forgot" align="center">Don't have an account? <a href="register.php" style="text-decoration: underline"/>Register</p>
			<p class="forgot" align="center"><a href="index.html" style="text-decoration: underline"/>Back</p>
		</form>
		</div>
	</main>
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>
