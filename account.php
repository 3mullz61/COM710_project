<?php

session_start();

if(!isset($_SESSION['User'])){
	header("Location:login.php");
}

/*---------fetching data---------*/
require_once ('config.php');
			$user =  $_SESSION['User'];
			$sql = "SELECT * FROM Users WHERE username='$user'";
			$request = $conn->query($sql);
			$record = $request->fetch();

/*---------updata user---------*/
if(isset($_POST['update'])){
		
		require_once ('config.php');
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $record['id'];
		
		$sql = "UPDATE Users SET username='$username', password='$password' WHERE id = $id";
			
		$result = $conn->query($sql);
		
		if(false == $result){
			die ("unable to find user!");
			$message = "Unable to find user";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if( $result->rowCount() > 0){
			session_start();
			$_SESSION['User'] = $username;
			header("Location: account.php");
		}
}

/*---------delete user---------*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zolivagant | Account</title>
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
		<main style="margin-top: 70px; text-align: center;">
		<?php echo "<hr><h1> Username: " . $record['username'] . "</h1><hr>"; ?>
		<h1>Change Your Account Information:</h1>
			<form method="post">
  				<label for="user">Username:</label>
  				<input type="text" id="user" name="username" value="<?php echo $record['username'] ?>"><br><br>
  				<label for="pwd">Password:</label>
  				<input type="password" id="pwd" name="password" value="<?php echo $record['password'] ?>"><br><br>
  				<input type="submit" name="update" value="Update">
			</form>
		<?php echo "<h1> User ID = " . $record['id'] . "</h1><hr>"; ?>
			<h1>Want To Delete Your Account?</h1>
			
			
			<?php
			if(isset($_POST['delete'])){
		
			require_once ('config.php');
		
			$id = $record['id'];
			$sql = "DELETE from Users WHERE id = $id";	
			$result = $conn->query($sql);
		
			if(false == $result){
				die ("unable to delete account!");
			}
			if( $result->rowCount() > 0){
				session_destroy();
				header("Location: index.php");
			}}?>
			
			
			<form method="post">
			<input type="submit" name="delete" value="Delete Account"><br><br><br><hr>
			</form>
			
		<?php echo '<a href="logout.php" style="text-decoration:underline; font-size: 18px">Logout</a>'; ?>
	
	</main>
	<script type="text/javascript" src="scripts.js"></script>
</body>
</html>