<?php 
	include('functions.php');

	
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Blood Donation">
        <meta name="keywords" content="donate,blood,recipients,blood group">
        <meta name="author" content="Jayaraj, Varun Raj,Lava Kumar,Venkatesh">
        <meta charset="utf-8">
        <title>Home of blood bank</title>
        <link rel="stylesheet" href="style (2).css">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Blood</span> Donation</h1>
                </div>

		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

                <nav>
                    <ul>
                        <li class="current"><a href="index.php" >Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="requests.php">Request Blood</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="search.php">Search</a></li><br>
                    </ul>
		    <div class="container1" >
                  
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
		     </div>
                </nav>
            </div>
        </header>
        <section id="showcase">
            <div class="container">
                <h1>Blood Donation</h1>
                <p>“Blood Donation Will Cost You Nothing But It Will Save A Life!”</p>
            </div>
        </section>
        <section id="newsletter">
            <div class="container">
                <h1>Register For More Access</h1>
                
            </div>
        </section>
            <section id="boxes">
                <div class="container">
                    <div class="box">
                        <img src="img/tips.jpg">
                        <h1>Blood Donation Tips</h1>
                        <p>UNIVERSAL DONORS AND RECIPIENTS
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.<a href="healthtips.html">Read more</a></p>
                    </div>
                    <div class="box">
                        <img src="img/impacts.jpg">
                        <h1>Impact</h1>
                        <ul>
                            <li>Patients</li>
                            <li>Sponsors</li>
                            <li>Hospitals</li>
                            <li>Testimonials</li>
                            <li>Organisation</li>
                            <li><a href="patients.html">Read more</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <img src="img/sponsors.png">
                        <h1>SPONSORS</h1>
                        <p>
These are the stories of visionaries: the companies, churches, organizations and schools that see the need and have decided to make an impact by hosting drives of their own.<a href="sponsoship.html">Read more</a>
                        </p>
                    </div>
                </div>
            </section>
        <footer>Blood Donation , Copyrights &copy; 2017</footer>
    </body>
</html>