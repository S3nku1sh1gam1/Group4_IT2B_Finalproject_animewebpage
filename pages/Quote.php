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
		<a href="" class="hero-btn">Quote</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">
			<div class="mangiii">
				<img src="../images/itachi.jpg">
				<div>
					<h3>Itachi Uchiha</h3> <p> "No Matter How Powerful You Become, Don't Try To Shoulder Everything Alone."</p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
				</div>
				</div>
				<div class="mangiii">
				<img src="../images/deku.jpg">
				<div>
					<h3>Izuku Medoriya</h3><p>“Sometimes I do fell like I'm a failure like theres no hope for me but even so I'm not gonna give up ever.”<p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
				</div>
			</div>
		</div>
		
	</section>
	<section class="about-us">

		<div class="row">
			<div class="mangiii">
				<img src="../images/senku.jpg">
				<div>
					<h3>Ishigami Senku</h3><p>“It's a slow and steady effort. I'm going to beat fantasy with science. This is exhilarating.”<p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
				</div>
			</div>
			<div class="mangiii">
				<img src="../images/naruto.jpg">
				<div>
					<h3>Uzumaki Naruto</h3><p>“If you don't like your destiny, don't accept it. Instead, have the courage to change it the way you want it to be.”<p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
				</div>
			</div>
		</div>
		
	</section>
	<section class="about-us">

		<div class="row">
			<div class="mangiii">
				<img src="../images/tanjiro.jpg">
				<div>
					<h3>Kamado Tanjiro</h3><p>“It's heart that drives people. So your heart can grow as strong as you want it to.”<p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
				</div>
			</div>
			<div class="mangiii">
				<img src="../images/luffy.jpg">
				<div>
					<h3>Luffy D. Monkey</h3><p>“No matter how hard or immposible it is, never lose sight of your goal.”<p>
					<a href="" class="hero-btn red-btn">VISIT!</a>
				</div>
			</div>
		</div>
		
	</section>

	<!------Footer------>

	<section class="footer">

		<h4>Group!</h4>
		<p>BSIT 2B<br>PROJECT FOR IPT</p>
		<div class="icons">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
			<i class="fa fa-linkedin"></i>
		</div>
		<p>Made By: <i class="fa fa-heart-o"></i> Jay Renz G. Mantala, Mark Angelo Lazo, and James M. Tan</p>

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