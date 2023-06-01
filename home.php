<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anime Web Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>

</body>
	<section class="header">
		<nav>
			<a href="home.php"><img src="images/minilogo.png"> </a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="">Home</a> </li>
					<li><a href="pages/profile.php">Profile</a> </li>
					<li><a href="pages/groupmember.php">Group Members</a> </li>
					<li><a href="pages/following.php">Following</a> </li>
					<li><a href="pages/saved.php">Saved</a> </li>
					<li><a href="pages/aboutipt.php">About IPT</a> </li>
					<li><a href="pages/about.php">About Us</a> </li>
					<li><a href="pages/contacts.php">Contacts</a> </li>
					<li><a href="pages/Quote.php">Quote</a> </li>
					<li><a href="pages/termsandcondition.php">Terms and Condition</a> </li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
			<div class="text-box">
				<h1>ANIME WEB PAGE</h1>
				<p>This web page is all about the great anime to watch because you can collect some moral lesson.</p>
				<a href="" class="hero-btn">Visit Us To Know More</a>
			</div>
	</section>
	<!------Home------>

	<section class="Home">
		<h1>Character Selection</h1>
		
		<div class="row">
			<div class="vlogs">
				<h3>Naruto Uzumaki</h3>
				<p>Naruto Uzumaki is the titular protagonist of the manga Naruto, created by Masashi Kishimoto. As the series progresses,he is young ninja from from the fictional village of Konohagakure.</p>
			</div>
			<div class="vlogs">
				<h3>Monkey D. Luffy</h3>
				<p>Monkey D. Luffy, is also known as "Straw Hat" Luffy, is a fictional character and the protagonist of the One Piece manga series, created by Eiichiro Oda. Luffy made his debut as a young boy who acquires the properties of rubber after accidentally eating one of the Devil Fruits that belonged to "Red Hair" Shanks.</p>
			</div>
			<div class="vlogs">
				<h3>Ishigami Senku</h3>
				<p>Senku Ishigami is the protagonist from Riichiro Inagaki and Boichi's manga series Dr. Stone. Beggining in April 5738 AD, it has been over 3,700 years since a mysterious flash petrified nearly all human life.</p>
			</div>
		</div>
	</section>

	<!------ Campuses ------>

	<section class="Campuses">
		<h1>Anime Characters</h1>
		<p>Anime Protagonists</p>
		<div class="row">
			<div class="lazo">
				<img src="images/naruto.jpg">
				<a href="pages/naruto.php"><div class="layer">
					<h3>Uzumaki Naruto</h3>
				</div></a>
			</div>
			<div class="lazo">
				<img src="images/luffy.jpg">
				<a href="pages/luffy.php"><div class="layer">
					<h3>Luffy D. Monkey</h3>
				</div></a>
			</div>
			<div class="lazo">
				<img src="images/senku.jpg">
				<a href="pages/senku.php"><div class="layer">
					<h3>Senku Ishigami</h3>
				</div></a>
			</div>
		</div>
				<div class="row">
			<div class="lazo">
				<img src="images/deku.jpg">
				<a href="pages/deku.php"><div class="layer">
					<h3>Izuku Medoriya</h3>
				</div></a>
			</div>
			<div class="lazo">
				<img src="images/tanjiro.jpg">
				<a href="pages/tanjiro.php"><div class="layer">
					<h3>Kamado Tanjiro</h3>
				</div></a>
			</div>
			<div class="lazo">
				<img src="images/meliodas.jpg">
				<a href="pages/meliodas.php"><div class="layer">
					<h3>Meliodas</h3>
				</div></a>
			</div>
		</div>
	</section>
	<!------contacs------>

	<section class="contacts">
		<h1>Call at our team for more info and if you want to set an appointment<br>Anywhere from the world.</h1>
		<a href="" class="hero-btn">CONTACTS US</a>
	</section>

	<!------Footer------>

	<section class="footer">

		<h4>About Us</h4>
		<p>This Web Page is all about a certain anime characters and thier background.</p>
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

<?php }else {
	header("Location: login.php");
	exit;
} ?>

