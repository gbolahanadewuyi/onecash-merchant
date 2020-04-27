<!DOCTYPE html>
<html lang="en">

<head>
	<title>OneCash</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/logo3.png" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url()?>public/landing_page/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url()?>public/landing_page/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= base_url()?>public/landing_page/css/themify-icons.css" />
	<link rel="stylesheet" href="<?= base_url()?>public/landing_page/css/animate.css" />
	<link rel="stylesheet" href="<?= base_url()?>public/landing_page/css/owl.carousel.css" />
	<link rel="stylesheet" href="<?= base_url()?>public/landing_page/css/style.css" />


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a href="index.html" class="site-logo">
				<!-- <img src="<?= base_url()?>public/landing_page/img/logo3.png" alt="" style="width: 250px;"> -->
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
			<a href="<?=base_url()?>user" class="site-btn">Sign In</a>
			<nav class="main-menu">
				<ul class="menu-list ">
					<li><a href="#home-section">Home</a></li>
					<li><a href="#about-section">About</a></li>
					<li><a href="#product-section">Platforms</a></li>
					<li><a href="#feature-section">Features</a></li>
					<!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li><a href="#">Page 1-1</a></li>
						  <li><a href="#">Page 1-2</a></li>
						  <li><a href="#">Page 1-3</a></li>
						</ul>
					  </li> -->
					<!-- <li><a href="">Contact</a></li> -->
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section" id="home-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>The future of digital wallets in Africa</h2>
					<h4>OneCash is redefining mobile financial services in Africa by offering special accounts that go beyond your individual and business payment needs.</h4>
					<form class="hero-subscribe-from">
						<!-- <input type="text" placeholder="Enter your email"> -->
						<a class="site-btn sb-gradients" href="#about-section">Learn More</a>
					</form>
				</div>
				<div class="col-md-6">
					<img src="<?=base_url()?>public/landing_page/img/laptop.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- About section -->
	<section class="about-section spad" id="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
				<h2>About OneCash</h2>
					<h5>WALLET & PLATFORMS</h5>
					<p>OneCash provides a set of powerful digital financial technology tools to expand access beyond financial services to other sectors, including agriculture, commerce and education.  And this is just the beginning.
						.</p>
					<a href="<?= base_url()?>welcome/about" class="site-btn sb-gradients sbg-line mt-5">Learn More</a>
				</div>
			</div>
			<div class="about-img">
				<img src="<?= base_url()?>public/landing_page/img/about-img.png" alt="">
			</div>
		</div>
	</section>
	<!-- About section end -->


	<!-- products section -->
	<section class="product-section spad gradient-bg" id="product-section">
		<div class="container text-white">
			<div class="section-title text-center">
				<h2>OneCash Platforms</h2>
				<p>OneCash provides a set of powerful digital financial technology tools to various sectors</p>
			</div>
			<div class="row">
				<!-- feature -->
				<div class="col-md-6 col-lg-3 feature">
					<i class="ti-bag"></i>
					<div class="feature-content">
						<h4>Businesses</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
							<a class="site-btn btn-primary sb-gradients" id="business" href="<?= base_url();?>user/register">Get Started</a>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-3 feature">
					<i class="ti-shield"></i>
					<div class="feature-content">
						<h4>City Authority</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<!-- <a href="" class="readmore">Readmore</a> -->
						<a class="site-btn btn-primary sb-gradients"  id="city_auth" href="<?= base_url();?>user/register" >Get Started</a>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-3 feature">
					<i class="ti-home"></i>
					<div class="feature-content">
						<h4>Schools</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<!-- <a href="" class="readmore">Readmore</a> -->
						<a class="site-btn btn-primary sb-gradients" id="school" href="<?= base_url();?>user/register">Get Started</a>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-3 feature">
					<i class="ti-flag-alt"></i>
					<div class="feature-content">
						<h4>Organization & Groups</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<!-- <a  href="" class="readmore">Readmore</a> -->
						<a class="site-btn btn-primary sb-gradients" id="group" href="<?= base_url();?>user/register">Get Started</a>
					</div>
				</div>
				<!-- feature -->
				<!-- <div class="col-md-6 col-lg-4 feature">
					<i class="ti-reload"></i>
					<div class="feature-content">
						<h4>Instant Exchange</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<a href="" class="readmore">Readmore</a>
					</div>
				</div> -->
				<!-- feature -->
				<!-- <div class="col-md-6 col-lg-4 feature">
					<i class="ti-panel"></i>
					<div class="feature-content">
						<h4>Recuring Buys</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<a href="" class="readmore">Readmore</a>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- products section end -->

	<!-- feature section -->
	<section class="feature-section spad" id="feature-section">
		<div class="container ">
			<div class="section-title text-center">
				<h2>Features</h2>
				<p>OneCash provides a set of powerful digital financial technology tools to various sectors and they include:</p>
			</div>
			<div class="row">
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-mobile"></i>
					<div class="feature-content">
						<h4>Identification</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-shield"></i>
					<div class="feature-content">
						<h4>Acess Control</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-wallet"></i>
					<div class="feature-content">
						<h4>Mobile Wallet</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-headphone-alt"></i>
					<div class="feature-content">
						<h4>HRM & CRM Tools</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-reload"></i>
					<div class="feature-content">
						<h4>Payment Integration</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-panel"></i>
					<div class="feature-content">
						<h4>Loyalty Management</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim
							id est laborum. </p>
						<!-- <a href="" class="readmore">Readmore</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Process section -->
	<!-- <section class="process-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Get Started With OneCash</h2>
				<p>Start learning about Bitcoin with interactive tutorials. It’s fun, easy, and takes only a few minutes! </p>
			</div>
			<div class="row">
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/1.png" alt="#">
						</figure>
						<h4>Create Your Wallet</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/2.png" alt="#">
						</figure>
						<h4>Create Your Wallet</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="img/process-icons/3.png" alt="#">
						</figure>
						<h4>Create Your Wallet</h4>
						<p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Process section end -->


	<!-- Fact section -->
	<section class="fact-section gradient-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>0</h2>
						<p>Users</p>
						<i class="ti-user"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>0</h2>
						<p>Transactions </p>
						<i class="ti-panel"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>0</h2>
						<p>Id card issued </p>
						<i class="ti-stats-up"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div class="fact">
						<h2>0</h2>
						<p>Merchants</p>
						<i class="ti-user"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->








	<!-- Team section -->
	<!-- <section class="team-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Meet Our Team</h2>
				<p>Our experts in the field of crypto currency can always help you with any of your questions!</p>
			</div>
		</div>
		<div class="team-members clearfix">
			
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/1.jpg"></div>
					<h2>Tom Binegar</h2>
					<span>Business Development</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/1.jpg"></div>
					<div class="member-meta">
						<h2>Tom Binegar</h2>
						<span>Marketing Director</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
			
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/2.jpg"></div>
					<h2>Jackson Nash</h2>
					<span>Business Development</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/2.jpg"></div>
					<div class="member-meta">
						<h2>Jackson Nash</h2>
						<span>Marketing Director</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
			
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/3.jpg"></div>
					<h2>Tom Binegar</h2>
					<span>Business Development</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/3.jpg"></div>
					<div class="member-meta">
						<h2>Aaron Ballance</h2>
						<span>Ceo Bitcoin</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
			
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/4.jpg"></div>
					<h2>Melissa Barth</h2>
					<span>Product Manager</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/4.jpg"></div>
					<div class="member-meta">
						<h2>Melissa Barth</h2>
						<span>Product Manager</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
			
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="img/member/5.jpg"></div>
					<h2>Katy Abrams</h2>
					<span>Head of Design</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="img/member/5.jpg"></div>
					<div class="member-meta">
						<h2>Katy Abrams</h2>
						<span>Head of Design</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Team section -->


	<!-- Review section -->
	<!-- <section class="review-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 push-8">
					<img src="img/quote.png" alt="" class="quote mb-5">
					<div class="review-text-slider owl-carousel">
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 pr-0 pull-3">
					<div class="review-meta-slider owl-carousel pt-5">
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="img/review/1.jpg"></div>
							<div class="author-name">
								<h4>Aaron Ballance</h4>
								<p>Ceo Bitcoin</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="img/review/2.jpg"></div>
							<div class="author-name">
								<h4>Jackson Nash</h4>
								<p>Head of Design</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="img/review/3.jpg"></div>
							<div class="author-name">
								<h4>Katy Abrams</h4>
								<p>Product Manager</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Review section end -->


	<!-- Newsletter section -->
	<!-- <section class="newsletter-section gradient-bg">
		<div class="container text-white">
			<div class="row">
				<div class="col-lg-7 newsletter-text">
					<h2>Subscribe to our Newsletter</h2>
					<p>Sign up for our weekly industry updates, insider perspectives and in-depth market analysis.</p>
				</div>
				<div class="col-lg-5 col-md-8 offset-lg-0 offset-md-2">
					<form class="newsletter-form">
						<input type="text" placeholder="Enter your email">
						<button>Get Started</button>
					</form>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Newsletter section end -->



	<!-- Blog section -->
	<!-- <section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Latest News</h2>
				<p>Bitcoin is the simplest way to exchange money at very low cost.</p>
			</div>
			<div class="row">
				
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="img/blog/1.jpg" alt="">
						</figure>
						<div class="blog-text">
							<div class="post-date">03 jan 2018</div>
							<h4 class="blog-title"><a href="">Coinbase to Reopen the GDAX Bitcoin Cash-Euro Order Book</a></h4>
							<div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
								<a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="img/blog/2.jpg" alt="">
						</figure>
						<div class="blog-text">
							<div class="post-date">28 dec 2018</div>
							<h4 class="blog-title"><a href="">Blockchain Rolls Out Trading Feature for 22 States in the U.S</a></h4>
							<div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
								<a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="img/blog/3.jpg" alt="">
						</figure>
						<div class="blog-text">
							<div class="post-date">28 aug 2018</div>
							<h4 class="blog-title"><a href="">This Week in Bitcoin: Up, Down and Sideways</a></h4>
							<div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
								<a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Blog section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row spad">
				<div class="col-md-6 col-lg-6 footer-widget">
					<img src="img/logo3.png" class="mb-4" alt="" style="width: 300px;">
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est
						laborum.</p>
					<span>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | OneCash Technologies
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				
				
				<div class="col-md-6 col-lg-6 footer-widget pl-lg-5 pl-3">
					<h5 class="widget-title">Follow Us</h5>
					<div class="social">
						<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="" class="google"><i class="fa fa-google-plus"></i></a>
						<a href="" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-lg-4 store-links text-center text-lg-left pb-3 pb-lg-0">
						<a href=""><img src="<?= base_url()?>public/landing_page/img/appstore.png" alt="" class="mr-2"></a>
						<a href=""><img src="<?= base_url()?>public/landing_page/img/playstore.png" alt=""></a>
					</div>
					<div class="col-lg-8 text-center text-lg-right">
						<ul class="footer-nav">
							<li><a href="">DPA</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Privacy Policy </a></li>
							<li><a href="">support@company.com</a></li>
							<li><a href="">(123) 456-7890</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url()?>public/landing_page/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url()?>public/landing_page/js/owl.carousel.min.js"></script>
	<script src="<?= base_url()?>public/landing_page/js/main.js"></script>
	<script>
		console.log('hello world');
		var btn_business = document.getElementById('business');
		var btn_authority = document.getElementById('city_auth');
		var btn_school = document.getElementById('school');
		var btn_group = document.getElementById('group');


	//add event listener for log in button
	if(btn_business){
		btn_business.addEventListener('click', e => {
			
			localStorage.setItem('field' , 'Business')
		})
	};
	if(btn_authority){
		btn_authority.addEventListener('click', e => {
			localStorage.setItem('field' , 'City Authority')
		})
	};

	if(btn_school){
		btn_school.addEventListener('click', e => {
			localStorage.setItem('field' , 'School')
		})
	};

	if(btn_group){
		btn_group.addEventListener('click', e => {
			localStorage.setItem('field' , 'Organization/Group')
		})
	};


</script>  
</body>

</html>