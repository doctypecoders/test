<?php
require("bazDone/konekte.php");
global $bazKonekte;
$rek=$bazKonekte->prepare("INSERT INTO visitByDate(ipUser) VALUES (:ipUser)");
$rek->execute([
	'ipUser'=>$_SERVER['REMOTE_ADDR']
	]);
$result=$rek->rowCount();
if($result){
	echo "success";
}else{
	echo "error, your query is not correct";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HwE - Hack with Ebook</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/ebook.jpg" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<ul class="main-menu">
				<li class="active"><a href="index.php">Ebooks</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->

	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Ebooks</span>
		</br>
		<p>
			<h4>Welcome to this website, here you have found all ebooks about hacking for educationnal properly</h4>
		</p>
		<?php
		$req23=$bazKonekte->query("SELECT * FROM visitByDate");
		$req23->fetch();
		var_dump($req23);
		?>
		<p>
			VISIT SAVED : 1
		</p>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="full-courses-section spad pt-0">
		<div class="container">
			<div class="row">
				<!-- ebooks -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="img/ebook/pwk2020.png" alt="">
						<div class="course-cat">
							<span>Pentest</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 6 Sat 2020</div>
						<h4>Learn hacking<br>with offensive security</h4>
						<h4 class="cource-price"><a href="https://mega.nz/file/fQJjBIrZ#frWlbYEic4IeCMDbn9Izk5CLhwsWOuHNSC09sNgPBZ8">FREE<span>/Download</span></a></h4>
					</div>
				</div>
				<!-- ebooks -->
			</div>
			<div class="text-center">
				<ul class="site-pageination">
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3>NEWSLETTER</h3>
					<p>Stay alert on our new books related to your needs by subscribing to our mailbox.</p>
				</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						<input type="text" placeholder="Enter your email">
						<button class="site-btn">SUBSCRIBE</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->	


	<!-- Footer section -->
	<footer class="footer-section">
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | developped by Kal
				</p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>