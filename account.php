<?php

session_start();

if(!isset($_SESSION['User'])){
	header("Location:login.php");
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Account</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
</head>

<body>
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
                    <a href="login.php" class="nav-link">Login</a>
                </li>
              </ul>
            </nav>   
        </div>
    </header>
	
	<?php
	
	echo "<h1> Hello " . $_SESSION['User'] . "</h1>";
	
	echo '<a href="logout.php">Logout</a><hr>';
	?>
</body>
</html>