
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

	<meta name="description" content="We provide searches, examinations, and closings to help manage large workloads, drive repeat business, and resolve complex title issues.">
	<meta name="keywords" content="Title, Commercial Title, closings, Indianapolis">
	<meta name="author" content="Nick Welch">
	<meta property="og:image" content="http://welch-title.com/images/logos/welch-title_welch-title-square-white.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1024">
	<meta property="og:image:height" content="1024">

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bentham" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon.css" media="screen" />
	

	<script type="application/ld+json">
			{
			  "@context": "http://schema.org",
			  "@type": "Local Business",
			  "name": "Welch Title and Abstract",
			  "url": "http://welch-title.com",
			  "email": "nick@welch-title.com"
			  "founders": "Nick Welch Sr."
			  "foundingDate": "2002-05-20",
			  "logo": "http://welch-title.com/library/images/welch-title_welch-title-square-white.jpg",
			  "sameAs": [
			    "https://www.instagram.com/SkymouseStudios/"
			  ]
			}
		</script>
	
</head>

<body>

<header id="home" class="row">

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
		<h1>Professional Title. <br>Only When You Need It.</h1>
		<div class="header-buttons">
			<a class="button-quote" href="#contact">Get a Quote
		</a>
	</div>

	<div class="bottom-arrow"></div>


</header>

<content>
	
	<div class="section-1 row row-centered">
		<h2>Every Detail. Exposed and Explained.</h2>
			<p class="col-5">
				Welch Abstract and Title provides searches, examinations, and closings on an as-needed basis to help you manage high-volume workloads, drive repeat business, and resolve complex title issues. 
			</p>
		<div class="box">
			<div class="item col-3 col-m-6">
				<img src="images/icons/Welch-title-icons-04.svg">
				<h3>Searches</h3>
				<p>
					We extract all records relating to a parcel, ensuring you make the best-informed decision backed by all relevant information regarding property or persons involved. 
				</p>
			</div>
			<div class="item col-3 col-m-6">
				<img src="images/icons/Welch-title-icons-02.svg">
				<h3>Examinations</h3>
				<p>
					We investigate and analyze searched records to determine any obstacles that may block or void your intended use of the property. 
				</p>
			</div>
			<div class="item col-3 col-m-6">
				<img src="images/icons/Welch-title-icons-06.svg">
				<h3>Closings</h3>
				<p>
					We provide a professional and personable face for your company to finalize transactions on a high-note, driving repeat business from your clients and increasing your reputation for title industry best practices.
				</p>
			</div>
		</div>
	</div>

	<div class="section-2 row row-centered"><!-- BEGIN SECTION 2 -->
		<h2>Qualities That Make the Difference.</h2>
		<div class="box clearfix">
			<div class="item col-4 col-m-10 col-centered clearfix">
				<img src="images/icons/Welch-title-icons-01.svg">
				<h3>Accuracy</h3>
				<p>Title work is useless to you if it isn’t accurate. <strong>We know that details are important, but even more important is knowing where to look.</strong> Awareness of information outliers can determine the viability of your project before it even gets started, preventing wasted time and money.</p>
			</div>
			<div class="item col-4 col-m-10 col-centered clearfix">
				<img src="images/icons/Welch-title-icons-03.svg">
				<h3>Knowlgedge</h3>
				<p>Built on experience: With over 37 years of professional title experience, we offer knowledge drawn from countless projects across multiple title specialties. If 10,000 hours is the time required to be an expert, imagine where 76,960 hours gets you.</p>
			</div>
			<div class="item col-4 col-m-10 col-centered clearfix">
				<img src="images/icons/Welch-title-icons-05.svg">
				<h3>Contract Based</h3>
				<p>By offering services on a need-to-work basis, we provide you with the flexibility to handle needs as they arise and to take on projects that only temporarily increase your workload. It also means that you when you win, we win.</p>
			</div>
		</div>
	</div><!-- END SECTION 2 -->

		

	<div class="section-3 row row-centered"><!-- BEGIN SECTION 3 -->
		
		<h2>37 Years of Trusted Experience. Take a look.</h2>

		<div class="box clearfix">
		<div class="col-1"></div>
			<div class="item-1 col-3 col-m-10 col-centered">
				<p>"Nick Welch is one of the most trustworthy people that I know, both personally and professionally. He always met my company's needs in a timely manner, while providing excellent customer service through a very personalized approach.”</p>
				<div class="client">- Derek Phillips, Vice President</div> 
				<div class="company">Commercial Banking at Centier Bank</div>
                <!-- <div class="button case-study" href="#">Read the Case Study</div> -->
			</div>
			
            
			<div class="item-1 col-3 col-m-10 col-centered">
				<p>"Nick provides consistently reliable results, and is always timely. He's my 'go to' title guy.” </p>
				<div class="client">Melissa DeGroff, Workout and Loan Documentation Attorney</div> 
				<div class="company"></div>	
                <!-- <div class="button case-study" href="#">Read the Case Study</div> -->
			</div>
                
            
			<div class="item-1 col-3 col-m-10 col-centered">
				<p>"I've worked with Nick Welch in the past and he was an experienced, trustworthy service provider that quarterbacked the successful closing of numerous building purchase transactions. He delivered great results!”</p>
				<div class="client">- Scott Lindenberg, Commercial Real-Estate Advisor</div> 
				<div class="company"></div>	
                <!-- <div class="button case-study" href="#">Read the Case Study</div> -->
			</div>	
			<div class="col-1"></div>
		</div>
	</div><!-- END SECTION 3 -->

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

	
		<!-- 	<form id="myForm" action="contact/contact.php" method="post">

		  <div class="clearfix">
		    <label for="name">Name</label>
		    <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Name"> <br>
		   </div>
		    <div class="clearfix">
		    <label for="email">Email Address</label>
		    <input type="email" name="name" id="name" value="" tabindex="2" placeholder="email@example.com"> <br>
		    </div>
		    <div class="clearfix">
		    <label for="company">Company</label>
		    <input type="text" name="name" id="name" value="" tabindex="3" placeholder="Company Corp."> <br>
		   </div>
			
		  <div class="clearfix">
		    <label for="textarea">Description</label>
		    <textarea cols="40" rows="8" name="textarea" id="textarea" placeholder="What services are you looking for?"></textarea>
		  </div>

		  <div>
		    <input type="submit" value="Get in touch!">
		  </div>

		</form> -->

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
			<li><a href="https://bit.ly/nwelch-facebook" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
			<li><a href="https://bit.ly/nwelch-twitter" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
			<li><a href="https://bit.ly/nwelch-linkedin" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
		
		<div class="copyright">
			Copyright 2016 Welch Title and Abstract
		</div>

		</div>

		
	</div>


</footer>

<script src="js/jquery.min.js"></script> 
<!-- <script src="js/retina.min.js"></script> --> 
<!-- include Masonry -->
<!-- <script src="js/isotope.pkgd.min.js"></script>  -->
<!-- include image popups -->
<!-- <script src="js/jquery.magnific-popup.min.js"></script>  -->
<!-- include mousewheel plugins -->
<!-- <script src="js/jquery.mousewheel.min.js"></script> -->
<!-- include carousel plugins -->
<!-- <script src="js/jquery.tinycarousel.min.js"></script> -->
<!-- include svg line drawing plugin -->
<script src="js/jquery.lazylinepainter.min.js"></script>

<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-88258809-1', 'auto');
	  ga('send', 'pageview');

	</script>

<!-- include custom script -->
<script src="js/scripts.js"></script>

</body>
</html>