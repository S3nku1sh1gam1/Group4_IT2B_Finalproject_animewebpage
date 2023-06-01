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
		<a href="" class="hero-btn">Saved Post</a>
	</section>

	<!------about us content------>

	<section class="Home">
		<h1>Saved vlogs</h1>
		<p>A "saved vlogs" feature might allow users to keep videos they enjoyed or found useful in a personal archive, so they can easily find and re-watch them later. This feature could also allow users to browse and discover new videos that they might find interesting or relevant.
		<br>
		The specific details and functionality of a saved vlogs feature would depend on the design and purpose of the website in question.</p>
		<div class="row">
			<div class="vlogs">
				<h3>Mark Angelo Lazo(saved)</h3>
				<p>I'm here to express myself that what I see, what I experience and what I plan for my life. I try myself to be modest, passionate, devoted, hardworking and honest.</p>
				<a href="" class="hero-btn red-btn">VISIT!</a>
			</div>
			<div class="vlogs">
				<h3>Jay Renz G. Mantala(saved)</h3>
				<p>Hello I'm here to guide you in this Anime Page and you can contact me if you have a problem or concerns about this page.</p>
				<a href="" class="hero-btn red-btn">VISIT!</a>
			</div>
			<div class="vlogs">
				<h3>James M. Tan(saved)</h3>
				<p>Hello James is here to help you out to work this page and you can contact me if you have suggestions.</p>
				<a href="" class="hero-btn red-btn">VISIT!</a>
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
		<p>Made By: <i class="fa fa-heart-o"></i> Mark Angelo Lazo, Jay Renz Mantala, James Tan.</p>

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