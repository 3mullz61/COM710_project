<?php

session_start();

if(!isset($_SESSION['User'])){
	$message = "You must be logged in";
	echo "<script type='text/javascript'>confirm('$message');</script>";
	header("Location:login.php");
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Zolivagant | Booking</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body class="body-bg">
	
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
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#packages" class="nav-link">Packages</a>
                </li>
                <li class="nav-item">
                    <a href="booking.php" class="nav-link current">Booking</a>
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
	<div class="main-book">
    <h1 class="sign" align="center">Booking</h1> 
	<?php echo '<p class="forgot" align="center"> Hello <strong>' . $_SESSION['User'] . '</strong><br> please fill out the following form and<br>select your package:</p>'?>
    <form class="form1" style="margin-top:-30px;">
		<p class="forgot" align="center">Personal Information</p>
      <input class="un" type="text" align="center" style="margin-bottom:5px;" placeholder="First Name">
      <input class="un" type="text" align="center" style="margin-bottom:5px;" placeholder="Last Name">
		<input class="un" type="email" align="center" style="margin-bottom:-5px;" placeholder="E-Mail">
		<p class="forgot" align="center">Destination</p>
		<select class="un" name="addressCountry" style="margin-bottom:5px;">
							<option value="GB">United Kingdom</option>
                            <option value="AL">Albania</option>
                            <option value="AD">Andorra</option>
                            <option value="AT">Austria</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BG">Bulgaria</option>
                            <option value="HR">Croatia</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="FR">France</option>
                            <option value="GI">Gibraltar</option>
                            <option value="DE">Germany</option>
                            <option value="GR">Greece</option>
                            <option value="HU">Hungary</option>
                            <option value="IT">Italy</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MK">Macedonia</option>
                            <option value="MT">Malta</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="ME">Montenegro</option>
                            <option value="NL">Netherlands</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="RO">Romania</option>
                            <option value="SM">San Marino</option>
                            <option value="RS">Serbia</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="ES">Spain</option>
                            <option value="UA">Ukraine</option>
                            <option value="DK">Denmark</option>
                            <option value="EE">Estonia</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FI">Finland</option>
                            <option value="GL">Greenland</option>
                            <option value="IS">Iceland</option>
                            <option value="IE">Ireland</option>
                            <option value="LV">Latvia</option>
                            <option value="LT">Lithuania</option>
                            <option value="NO">Norway</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="TR">Turkey</option>				
		</select>
		<input class="un" type="text" align="center" style="margin-bottom:5px;" placeholder="Street Address">
		<input class="un" type="text" align="center" placeholder="Postcode" style="margin-bottom:-5px;">
		<p class="forgot" align="center" style="margin-bottom:-5px;">Select Your Package:</p>
		 <div align="center" style="margin-bottom:30px;">
		<label class="radio-inline forgot">
      <input type="radio" name="optradio" checked>Comfort <br> 99,00$
    </label>
    <label class="radio-inline forgot">
      <input type="radio" name="optradio">Business <br> 199,00$
    </label>
    <label class="radio-inline forgot">
      <input type="radio" name="optradio">Star <br> 349,00$
    </label>
		</div>
      <a class="submit" align="center">Book now</a>
			<p class="forgot" align="center" style="margin-bottom:20px;"><a href="index.php" style="text-decoration: underline">Back To Home</a></p>
		</form>
		</div>
	<div class="body center2">
	<h1 style="font-size: 40pt">Book your luggage free journey <br> with Zolivigant today!</h1>
		<p style="margin-top: 30px; font-size: 18pt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	</main>
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>
