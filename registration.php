<?php
// Get the current script filename
$page = basename($_SERVER['SCRIPT_FILENAME']);

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>INSTYLR | Fashion HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Instyle Fashion HTML Template">
	<meta name="keywords" content="instyle, fashion, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
    <body>
	
	
	<section class="page-top-section set-bg" data-setbg="img/header-bg/4.jpg" style="background-image: url(&quot;img/header-bg/4.jpg&quot;);">
		
		<section class="breadcrumb-section set-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcrumb_text">
						<h2>Registation</h2>
						<div class="bread_option">
							<a href="index.php">home:</a>
							<span>Registation</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	 
	   <?php if ($page === 'index.php'): ?>
		<div class="hero-social-warp">
			<p>Follow us on Social MEdia</p>
			<div class="hero-social-links">
				<a href="#"><i class="fa fa-behance"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
			</div>
			<?php endif; ?>
		</div>
	</section>
	
	 <section class="page-warp contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section-title">
						<span>fashion, event, lifestyle</span>
						<h2>Get in touch</h2>
					</div>
					<form class="comment-form" method="post" action="registation_process.php">
						<div class="row">
							<div class="col-md-6">
								<input type="text"name="fnm" placeholder="Your Name">
							</div>
							<div class="col-md-6">
								<input type="text" name="emai" placeholder="Your Email">
							</div>
							<div class="col-md-6">
								<input type="text" name="pwd" placeholder="Password">
								<input type="text" name="cpwd" placeholder="Re-type Password">
								<input type="text" name="mno" placeholder="Mobile">
								<textarea placeholder="Message"></textarea>
								<button type="submit" class="site-btn sb-dark">SUBMIT<i class="fa fa-angle-double-right"></i></button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-4">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48359.89302507648!2d-73.95762813994347!3d40.75117343692072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2592bc7bab159%3A0x56156cc4c5ee8e31!2sLong+Island+City%2C+Queens%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1561474745218!5m2!1sen!2sbd" style="border:0" allowfullscreen=""></iframe>
					</div>
				<div class="contact-text">
					<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. </p>
					<ul>
						<li>Main Str, no 23, New York</li>
						<li>+546 990221 123</li>
						<li>fashion@contact.com</li>
					</ul>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
     <?php
	 include_once('includes/footer.php');

     ?>
	</body>
</html>


