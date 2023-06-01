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
					<li><a href="../pages/following.php">following</a> </li>
					<li><a href="../pages/saved.php">saved</a> </li>
					<li><a href="../pages/aboutipt.php">About IPT</a> </li>
					<li><a href="../pages/about.php">About Us</a> </li>
					<li><a href="../pages/contacts.php">Contacs</a> </li>
					<li><a href="../pages/Quote.php">Quote</a> </li>
					<li><a href="../pages/termsandcondition.php">Terms and Condition</a> </li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<a href="" class="hero-btn">Meliodas</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>Meliodas</h1>
			<p>Meliodas「メリオダス」 is the Dragon's Sin of Wrath「憤怒の罪ドラゴンシン, Doragon Shin」 and captain of the Seven Deadly Sins, the husband and lover of Elizabeth Liones and her previous incarnations, the owner of the renowned tavern Boar Hat, the current king of Kingdom of Liones, the father of Tristan, and the main protagonist of the series. His Sacred Treasure is the Demon Sword Lostvayne and his inherent power is Full Counter. He was also the head of the Ten Commandments, as Meliodas the Love「慈愛のメリオダス, Jiai no Meriodasu」, and a former member of Stigma after his defection from the Demon Clan.</p>
			<h1>Honor:</h1>
			<h1>Demon King</h1>
			<h1>Friends</h1>
			<p>Ban<br>King<br>Diane<br>Merlin<br>Escanor<br>Gother</p>
			<h1>Status:</h1>
			<p>Merried with Elizabeth</p>
			<a href="" class="hero-btn red-btn">KNOW MORE!</a>
		</div>

			<div class="about-col">
				<img src="../images/meliodas.jpg">
			</div>
			
		</div>
		
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
		<p>Made By <i class="fa fa-heart-o"></i> Jay Renz Mantala, Mark Angelo Lazo, James Tan.</p>

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