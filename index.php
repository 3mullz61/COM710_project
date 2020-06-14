<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zolivigant | Home</title>
    <!--Ion Icons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
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
        <section class="hero">
            <div class="container">
                <div class="main-message"> 
                    <h3>Zolivigant</h3>
                    <h1>The way to travel</h1>
                    <p>
                        Zolivagant is a simple solution for frequent travellers. The start-up business is a mixture of consultancy and personal shopping that will pack the perfect outfit for the next business trip or vacation.
Many globetrotters are often confronted with issues during their trips; these can include airport queues, losing luggage or relinquishing on their favourite products from home. Zolivagant will prevent the traveller from all these worries by sending their luggage ahead of time to the desired location. This service will change journeys to a baggage-free adventure.
                    </p>
                    <div class="cta">
                        <a href="booking.php" class="btn">Book Your Journey</a>
                    </div>
                </div>  
            </div>
        </section> 

        <section class="Packages" id="packages">
            <div class="container">
                <div class="title-heading">
                    <h3>Packages</h3>
                    <h1>Luggage free with Zolivigant</h1>
                    <p>The business will pack outfits for the customer’s trip in a suitcase and will send their luggage to the desired location. The feature about Zolivagant’s services is that the client has the possibility to always wear something new during their journey. Their travel wardrobe will never be the same and with this unique offering they can explore various styles, which they might have not done without Zolivagant. In total there are three packages: Comfort, Business and Star.</p>
                </div>
                
                <div class="packages-grid">
                    <!--grid item #1-->
                    <div class= "packages-grid-item suitcase">
                    <i class= "icon ion-md-briefcase"></i>
                    <h1>Comfort - 99,00$</h1>
                    <p> The customer allows an employee of the firm to choose and pack their wardrobe and itineraries in the comfort of his home. It is also possible for an additional cost, to have the consultancy team choose outfits and/or accessories for the trip; e.g. the perfect scarf for the trip to Dubai. This is the lowest-priced package offered.</p>
						<div class="cta">
                        <a href="#about" class="btn">Learn More</a>
                    </div>
                </div>

                    <!--grid item #2-->
                    <div class= "packages-grid-item business">
                        <i class= "icon ion-md-business"></i>
                        <h1>Business - 199,00$</h1>
                        <p> Most business passengers like to travel as light as possible. With this particular package, the customer has the option to rent or buy the outfits that the firm provides for them. The suitcase will be sent directly to the traveller’s accommodation. Prior to the journey, the customer completes an online checklist, which takes less than 5 minutes to fill out. If he’s on the go, a picture of his or her current outfit can be attached to the checklist which will contain questions about what sizes, colours and brands the customer prefers. A virtual closet will then be sent to their contact details and after approval, an individual package will be selected and waiting for the client at the destination. Suits, t-shirt, shirts, pants, blazers etc. will be possible to rent or buy from selected cooperating department stores.</p>
						<div class="cta">
                        <a href="#about" class="btn">Learn More</a>
                    </div>
                        </div>
                    <!--grid item #3-->
                    <div class= "packages-grid-item shopping">
                        <i class= "icon ion-md-star"></i>
                        <h1>Star - 349,00$</h1>
                        <p> The Star package offers a wardrobe, which has been arranged by the company. Before the journey, an employee will make an appointment to discuss and consult with the client about possible outfits, brands and products he likes. With this information, an individual package will be compiled by the firm. The buyer has to purchase the entire package for his trip. If clothes for whatever reason do not fit properly or the person dislikes them, then these can be sent back. An employee will then pick up the outfits and exchange them within 24h
                        </p>
						<div class="cta">
                        <a href="#about" class="btn">Learn More</a>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="testimonials">
            <div class="container">
            <div class="testimonial">
                <div class="testimonial-text-box">
                    <p><br> I can't wait to use Zolivigant's service again. My trip was relaxing and <br> I was happy with the variety of garments provided.
                        Also, I love the suitcase.
                    </p>
                <i class="icon ion-md-quote"></i>
                </div>
                <div class="testimonial-customer">
                    <img src="images/customer.jpg" alt="">
                    <h1>Carol B.</h1>
                </div>
            </div>
            </div>
        </section>


        <section class="begin-journey" id="about">
        <div class="container">
            <div class="title-heading" style="margin-bottom:-5px;">
                <h3>Begin your journey</h3>
                <h1>today</h1>
                <p>Luggage free with Zolivigant</p>
            </div>
            <div class="journey-grid">
                <!--Journey grid item #1-->
                <div class="journey-grid-item">
                    <p>
                        Zolivagant is a mixture of the travel and fashion industries. It fits the category personal shopper the most, since it will be a combination of buying garments and styling customers with the perfect outfit for their trip. Since it is specially aimed at the travelling consumer, the travel industry is a major part in this section. It is a market niche, because most personal shoppers only focus on supplying their clients with general clothes, but nobody focuses mainly on the globe-trotting aspect. The second part which is extraordinary about the company is that the client neither has to pack his suitcase nor carry it with him. They will also be provided with new apparel for each journey. This is conducted because of a cooperation between Zolivagant and a department store.
                    </p>
                </div>
                <!--Journey grid item #2-->
                <div class="journey-grid-item" style="margin-top:-20px;">
                    <p>
                       When a customer has booked over 10 trips with us, they will receive a reward. This depend on the budget spent prior.  
                    </p>
					<div class = "leftbox"> 
                <h2>Comfort</h2> 
			<img src="images/rimowa1.PNG" alt="" style="width:150px;">
                <p>Comfort offers an in-home consultancy service of the personal closet. A Zolivagant team member will pack the customer’s outfits appropriate for the trip.</p>
				<a class="btn" href="booking.php">Book now</a>
            </div>  
              
            <div class = "middlebox"> 
                <h2>Business</h2>
				<img src="images/rimowa2.PNG" alt="" style="width:150px;">
                <p>All garments of the Business package <br> are rented and can be purchased if <br> the customer would like to, for an <br> additional price.</p>
				<a class="btn" href="booking.php" style="position:relative; top:10px;">Book now</a>
            </div> 
              
            <div class = "rightbox"> 
                <h2>Star</h2>
				<img src="images/rimowa3.PNG" alt="" style="width:130px;">
                <p>Star is the most expensive offer of Zolivagant. A stylist will make an appointment with a customer to identify their personality and styles, to pack an extraordinary travel wardrobe for them.</p>
				<a class="btn" href="booking.php" style="position:relative; top:5px;">Book now</a>
            </div>
                </div>
				
            </div> 
        </div>
        </section>
		<section class="begin-journey">
		<div class="container">
			</div>
		</section>
		<section class="begin-journey">
		<div class="container">
			</div>
		</section>
    </main>
    <footer>
        <p>&#169;2020 Zolivigant. All rights reserved</p>
    </footer>
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>