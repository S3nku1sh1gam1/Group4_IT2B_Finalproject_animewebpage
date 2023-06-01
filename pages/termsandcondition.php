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
					<li><a href="profile.php">Profile</a> </li>
					<li><a href="../pages/groupmember.php">Group Members</a> </li>
					<li><a href="../pages/following.php">Following</a> </li>
					<li><a href="../pages/saved.php">Saved</a> </li>
					<li><a href="../pages/aboutipt.php">About IPT</a> </li>
					<li><a href="../pages/about.php">About Us</a> </li>
					<li><a href="../pages/contacts.php">Contacts</a> </li>
					<li><a href="../pages/Quote.php">Quote</a> </li>
					<li><a href="../termsandcondition.php">Terms and Condition</a> </li>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<a href="" class="hero-btn">Terms And Conditions</a>
	</section>

	<!------about us content------>

	<section class="about-us">

		<div class="row">

			<div class="about-col">
			<h1>Aggrement</h1>
			<p>Welcome to our Anime Web Page. These Terms and Conditions describe the rules and regulations that govern your use of the Site, its functionalities, and related services. Please read the following Terms and Conditions carefully before using the Site. By using the Site, you agree to be bound by these Terms and Conditions. If you do not agree to all or any of these terms, please do not use our Site.<br>
				<br>1. Use of the Site.
				<br>
			<br>1.1 You are authorized to use our Site only for lawful purposes. The Site shall not be used for any illegal, fraudulent, or harmful.
			<br>
			 <br>activities1.2 The copyright of all materials and information (including software, text, graphics, and logos) on the Site is owned by us or our licensors. Without our prior written consent, you must not copy, distribute, modify, or transmit such materials.
			 <br>
			<br>1.3 You agree not to alter or interfere with any part of the Site, including disabling, overburdening,pering tam with or destroying any technological safeguards or security measures.
			<br>
			<br>2. User Content.
			<br>
			<br>2.1 You acknowledge that all user-submitted content, including videos, text, comments, images, or other materials, posted on our Site by you or any other user, are entirely your responsibility.
			<br>
			<br>2.2 By participating in our Site, you warrant and represent that all content posted by you does not infringe any third-party intellectual property rights, including but not limited to trademarks, copyrights, and patents.
			<br>
			<br>2.3 You agree not to post any content that is or may be illegal, obscene, discriminatory, defamatory, or otherwise offensive in nature.
			<br>
			<br>2.4 We reserve the right to remove or ban any violates that content these Terms and Conditions.
			<br>
			<br>3 Indemnification.
			<br>
			<br>3.1 You agree to indemnify us, our affiliates, agents, or licensors, against any claims, damages, liabilities, costs.<br>
			<br>In conclusion, terms and conditions form an important part of any agreement between a user and a website or service. By reading and following these terms, users can protect their legal rights, personal information, and ensure a positive user experience. Failure to comply with these terms can result in serious consequences, including account suspension, termination, or legal action. Therefore, it is important to carefully review and understand the terms and conditions before using any website or service.</p>
			<a href="" class="hero-btn red-btn">AGREE!</a>
		</div>

			<div class="about-col">
				<img src="../images/tac.jpg">
				<h1>What if we Didn't Follow the Terms and condition?</h1>
				<p>if a user does not follow the terms and conditions of a website or service, they may face consequences such as account suspension, termination, or legal action. The severity of the consequences depends on the severity of the violation. It is important to carefully read and understand the terms and conditions before using a website or service to avoid any breaches.</p>
				<br>
				<h1>why should we follow the terms and condition?</h1>
				<p>There are several reasons why it is important to follow the terms and conditions of a website or service, including:
				<br>
				<br>1. Legal implications: By using a website or service, you are entering into a legal agreement with the company or platform. Failure to follow the terms and conditions may result in a breach of contract, which could have legal consequences.
				<br>
				<br>2. Protection of personal information: Many terms and conditions outline how the website or service collects, uses, and protects user data. Following these guidelines can help protect your personal information from being misused or exploited.
				<br>
				<br>3. Ensuring a positive user experience: Terms and conditions often include rules and guidelines that are intended to maintain a positive user experience on the platform. By following these rules, you can help ensure that the platform remains a safe and pleasant place to use.
				<br>
				<br>In short, following the terms and conditions is important in order to protect your legal rights, personal information, and overall user experience.</p>
				<br>

			</div>
			
		</div>
		
	</section>

	<!------Footer------>

	<section class="footer">

		<h4>About terms and condition</h4>
		<p>terms and conditions refer to the legal agreement between the user and the service provider.<br>It typically includes details on how the service or product can be accessed or used, payment arrangements, responsibilities of each party, liability limitation, and dispute resolutions.<br>It is important to read and understand the terms and conditions of any service before agreeing and using it to avoid any legal or financial consequences.</p>
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