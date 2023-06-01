<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anime Web Page</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
	<section class="sub-header">
		<nav>
			<a href="home.php"><img src="../images/minilogo.png"> </a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="../index.php">Home</a> </li>
					<li><a href="../pages/profile.php">Profile</a> </li>
					<li><a href="../pages/groupmember.php">Group Members</a> </li>
					<li><a href="../pages/following.php">Following</a> </li>
					<li><a href="../pages/saved.php">Saved</a> </li>
					<li><a href="../pages/aboutipt.php">About IPT</a> </li>
					<li><a href="../pages/about.php">About Us</a> </li>
					<li><a href="../pages/contacts.php">Contacts</a> </li>
					<li><a href="../pages/Quote.php">Quote</a> </li>
					<li><a href="../pages/termsandcondition.php">Terms and Condition</a> </li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<a href="" class="hero-btn">Profile</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>Mark Angelo Lazo</h1>
			<p>Hi I'm Mark Angelo Lazo<br> 20 years old<br>From Tiguion,Gasan,Marinduque</p>
			<h1>Hobbies</h1>
			<p>Playing Online Games<br>Playing Basketball and Table Tennis<br>Watching Anime and Movies</p>
			<p>From: Marinduque State College</p>
			<p>BSIT - 2B</p>
			<p>Our Prof: Romeo Labayna</p>
			<h1>This is our Project in IPT!</h1>
			<p>We are the students of Marinduque state college from BSIT 2B and we are happy to guide you on our website! Anime Web Page!</p>
			<a href="" class="hero-btn red-btn">KNOW MORE!</a>
		</div>

			<div class="about-col">
				<img src="../images/lazo.jpg">
			</div>
			
		</div>
		
	</section>
		<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>James Tan</h1>
			<p>Hi I'm James Tan<br> 20 years old<br>From Villa Mendez,Mogpog,Marinduque</p>
			<h1>Hobbies</h1>
			<p>Playing Online Games<br>Watching Movies and Anime<br>Cooking and Art</p>
			<p>From: Marinduque State College</p>
			<p>BSIT - 2B</p>
			<p>Our Prof: Romeo Labayna</p>
			<h1>This is our Project in IPT!</h1>
			<p>We are the students of Marinduque state college from BSIT 2B and we are happy to guide you on our website! Anime Web Page!</p>
			<a href="" class="hero-btn red-btn">KNOW MORE!</a>
		</div>

			<div class="about-col">
				<img src="../images/tan.jpg">
			</div>
			
		</div>
		
	</section>
	<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>Jay Renz Mantala</h1>
			<p>Hi I'm Jay Renz Mantala<br> 20 years old<br>From Magapua,Mogpog,Marinduque</p>
			<h1>Hobbies</h1>
			<p>Playing Computer and Mobile Games<br>Playing Basketball and Board Games<br>Swimming</p>
			<p>From: Marinduque State College</p>
			<p>BSIT - 2B</p>
			<p>Our Prof: Romeo Labayna</p>
			<h1>This is our Project in IPT!</h1>
			<p>We are the students of Marinduque state college from BSIT 2B and we are happy to guide you on our website! Anime Web Page!</p>
			<a href="" class="hero-btn red-btn">KNOW MORE!</a>
		</div>

			<div class="about-col">
				<img src="../images/jay.jpg">
			</div>
			
		</div>
		
	</section>

	<!------Footer------>

	<section class="footer">

		<h4>About Us</h4>
		<p></p>
		<div class="icons">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
			<i class="fa fa-linkedin"></i>
		</div>
		<p>Made By: <i class="fa fa-heart-o"></i> Jay Renz Mantala, Mark Angelo Lazo, James Tan.</p>

	</section>

	<!------JavaScript for Toggle Menu------>

	<script>

		var navLinks = document.getElementById('navLinks');

		function showMenu() {
			navLinks.style.right = "0"
		}

		function hideMenu() {
			navLinks.style.right = "-200px"
		}

	</script>

</body>
</html>