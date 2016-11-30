
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Welch-title.com Contact Form'; 
		$to = 'nicknwelch@gmail.com'; 
		$subject = 'Message from Welch-title.com';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Welch | Title and Abstract</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bentham" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon.css" media="screen" />
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-88258809-1', 'auto');
	  ga('send', 'pageview');

</script>
	
</head>

<body>

<header id="services" class="row">

	<nav id="mainmenu" role="navigation">
			<a href="index.php">
			<div class="logo col-3">
		</div>
		</a>
		<div id="menu-burger"><i class="icon-menu"></i></div>
		<div id="searchicon">		
		</div>
		<div id="menu">
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		</div>
	</nav>



	<div class="callout row row-centered">
		<h1>Services</h1>
		<div class="header-buttons">
			<a class="button-quote" href="#contact">Get a Quote
		</a>
	</div>

	<div class="bottom-arrow"></div>


</header>

<content>
	
	<div class="section-1 row row-centered">

		<div class="item col-4">
			<h2>Oil, Gas, & Mineral Rights</h2>
					<p>In his 15 years of experience in mineral rights acquisition, Nick Welch has developed relationships with everyday people across the United States. With a special talent for locating heirs and owners, Nick specializes in helping companies find and lease oil, natural gas, and coal rights.
				</p>
				<a class="button-cs" href="/case-study/cs-minard.pdf" target="blank">Read the Case Study</a>
		</div>

		<div class="item col-4">
			<h2>Right of Way</h2> <br>
					<p>Over the course of more than 12 years of right of way experience, Nick Welch was the title examiner for a telephone line running from Evansville to Terre Haute across the state of Indiana. He also was the title examiner for AT&T when they laid the first fiber optic line in the United States.
				</p>
				<a class="button-cs" href="/case-study/cs-att.pdf" target="blank">Read the Case Study</a>
		</div>

		<div class="item col-4">
			<h2>Residential & Commercial Land Title</h2>
					<p>Having closed over 1,000 title transactions in his career, managed the largest commercial land title operation in Indiana for Chicago Title, and grown Talon Title from zero to one-half-million dollars in revenue in 36 months, there are few people who know the ins and outs of commercial land title better than Nick Welch.
				</p>
				<a class="button-cs" href="/case-study/cs-oil-refinery.pdf" target="blank">Read the Case Study</a>
		</div>

		<div class="item col-4">
			<h2>Land Acquisition</h2> <br>
					<p>Nick Welch started his title career in the Illinois basin on the hardest kind of title projects that exist, making him extremely comfortable dealing with the most complex title problems. Nick's land acquisition experience covers multiple states and industries. 
				</p>
		</div>
	</div>




	<div class="section-4 row row-centered"><!-- BEGIN SECTION 4 -->
		<div class="box col-4 col-m-6">
            <h2>Here is How to Take Action!</h2>
            <p>Whether you’re looking for a quote, a professional opinion, or just wanting to share your thoughts, feel free to get in touch! We do our absolute best to reply as soon as we can.</p>
        </div>

		<div class="box col-4 col-m-6">
				

				<form class="form-horizontal" role="form" method="post" action="#contact">

			<?php echo "<p class='text-danger'>$errName</p>";?>
			<div class="form-group">
				<label for="name" class="control-label">Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
			</div>

			<?php echo "<p class='text-danger'>$errEmail</p>";?>
			<div class="form-group">
				<label for="email" class="contol-label">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">

			</div>

			<?php echo "<p class='text-danger'>$errMessage</p>";?>
			<div class="form-group">
				<label for="message" class="control-label">How Can We Help?</label>
					<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			</div>

			<?php echo "<p class='text-danger'>$errHuman</p>";?>
			<div class="form-group">
					<label for="human" class="control-label">2 + 3 = ?</label>
					<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			</div>

			<div class="form-group">
					<input id="submit" name="submit" type="submit" value="Get in Touch!" class="btn btn-primary">
			</div>

			<div class="form-group">
					<?php echo $result; ?>	
			</div>
			
			</form> 


		</div>
		
	</div><!-- END SECTION 4 -->

</content>

<footer>
	<div id="contact" class="box row">
		 <img src="images/welch-title_welch-title-square-white.png" />
		<div class="contact">
            <div class="contact-info">
                Nick Welch
            </div>
            <div class="contact-info clearfix">
               (317) 496-0923
            </div>
            <a class="contact-info" href="mailto:nick@welch-title.com">
               nick@welch-title.com
            </a>

		</div>
           
        <div class="social-icons col-3 col-m-12">
			<li><a href="https://www.facebook.com/profile.php?id=100011194487094" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
			<li><a href="https://twitter.com/THEOTOKOSRocks" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
			<li><a href="https://www.linkedin.com/in/nicholas-n-welch-00486213" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
		
		<div class="copyright">
			Copyright 2016 Welch Title and Abstract
		</div>

		</div>

		
	</div>


</footer>

<script src="js/jquery.min.js"></script> 
<script src="js/retina.min.js"></script> 
<!-- include Masonry -->
<script src="js/isotope.pkgd.min.js"></script> 
<!-- include image popups -->
<script src="js/jquery.magnific-popup.min.js"></script> 
<!-- include mousewheel plugins -->
<script src="js/jquery.mousewheel.min.js"></script>
<!-- include carousel plugins -->
<script src="js/jquery.tinycarousel.min.js"></script>
<!-- include svg line drawing plugin -->
<script src="js/jquery.lazylinepainter.min.js"></script>


<!-- include custom script -->
<script src="js/scripts.js"></script>

</body>
</html>