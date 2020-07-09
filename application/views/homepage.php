<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Easy Pass">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/bootstrap4/bootstrap.min.css')?>">
<link href="<?= base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/main_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles/responsive.css')?>">
 <!-- favicon -->
 <link href="<?=base_url('assets/images/barefooted.png')?>" rel="shortcut icon"/>
</head>
<body>

<div class="super_container">
	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any question?</div></li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>Barefooted@easypasscrutech.com</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>Barefooted@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="<?= base_url('student/login')?>">Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Easy<span>Pass</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="<?= base_url() ?>">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="#courses">Courses</a></li>
									<!-- <li><a href="blog.html">Blog</a></li> -->
									<!-- <li><a href="#">Page</a></li> -->
									<li><a href="#contact">Contact</a></li>
								</ul>
								<div class="search_button"><a href="<?= base_url('student/login')?>"><i class="fa fa-key" aria-hidden="true"></i></a></div>

								<!-- Hamburger -->
                               
								<div class="shopping_cart"><a href=" <?= base_url('student/register')?>"><i class="fa fa-user" aria-hidden="true"></i></a></div>
								<div class="hamburger menu_mm">
									<a href="<?= base_url('student/login')?>"><i class="fa fa-key" aria-hidden="true"></i></a>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?= base_url()?>">Home</a></li>
				<li class="menu_mm"><a href="#">About</a></li>
				<li class="menu_mm"><a href="#">Courses</a></li>
				<!-- <li class="menu_mm"><a href="#">Blog</a></li> -->
				<!-- <li class="menu_mm"><a href="#">Page</a></li> -->
				<li class="menu_mm"><a href="#">Contact</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->



	<!-- Features -->

	<div class="features" style="margin-top: 5%">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">CRUTECH E-Learning</h2>
						<div class="section_subtitle"><p>Best Online Learning System</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url('assets/images/icon_1.png')?>" alt=""></div>
						<h3 class="feature_title">CGPA Calculator</h3>
						<div class="feature_text"><p>Integrated CGPA Calculator for student with little or no idea on how it's done</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url('assets/images/icon_2.png')?>" alt=""></div>
						<h3 class="feature_title">Books & Past Question</h3>
						<div class="feature_text"><p>Study Past Questions and find solutions, get information directly from the source.</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url('assets/images/icon_3.png')?>" alt=""></div>
						<h3 class="feature_title">Best Online Classes</h3>
						<div class="feature_text"><p>Take classes, get tasks and ask questions</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url('assets/images/icon_4.png')?>" alt=""></div>
						<h3 class="feature_title">Award & Reward</h3>
						<div class="feature_text"><p>Easy Pass is the first and best online class in Nigeria.</p></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses" id="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/images/courses_background.jpg')?>" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Popular Online Courses</h2>
						<div class="section_subtitle"><p></p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img style="width: 100%;" src="<?= base_url('assets/images/maths.jpg')?>" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="#">General Mathematics</a></h3>
							<div class="course_teacher">Dr. Odok</div>
							<div class="course_text">
								<p>General Mathematics is available for year 1 and carry over students</p>
							</div>
						</div>
						
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img style="width: 100%;" src="<?= base_url('assets/images/english.jpg')?>" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="#">Use of English and Library Skills</a></h3>
							<div class="course_teacher">Prof. Joy Etiowo</div>
							<div class="course_text">
								<p>Use of English and Library Skills is available for year 1 and carry over students</p>
							</div>
						</div>
						<!-- <div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>20 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto">Free</div>
							</div>
						</div> -->
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= base_url('assets/images/physics.jpg')?>" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="#">General Physics</a></h3>
							<div class="course_teacher">Dr. F.A Kamgba</div>
							<div class="course_text">
								<p>Use of English and Library Skills is available for year 1 and carry over students</p>
							</div>
						</div>
						<!-- <div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									<span>20 Student</span>
								</div>
								<div class="course_info">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5 Ratings</span>
								</div>
								<div class="course_price ml-auto"><span>$320</span>$220</div>
							</div>
						</div> -->
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="#">view all courses</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Counter -->

	<div class="counter" id="about">
		<div class="counter_background" style="background-image:url(assets/images/counter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">Easy Pass</h2>
						<div class="counter_text"><p>Easy Pass is an online learning system for Cross River University. It has so many integrated features that has made learning redefined.</p></div>

						<!-- Milestones -->

						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
							
							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="10" data-sign-after="k+">10k+</div>
								<div class="milestone_text">Active Student</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="234" data-sign-after="+">234+</div>
								<div class="milestone_text">Active Staff</div>
							</div>

							

						</div>
					</div>

				</div>
			</div>

			<!-- <div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">
							<div class="counter_form_title">courses now</div>
							<input type="text" class="counter_input" placeholder="Your Name:" required="required">
							<input type="tel" class="counter_input" placeholder="Phone:" required="required">
							<select name="counter_select" id="counter_select" class="counter_input counter_options">
								<option>Choose Subject</option>
								<option>Subject</option>
								<option>Subject</option>
								<option>Subject</option>
							</select>
							<textarea class="counter_input counter_text_input" placeholder="Message:" required="required"></textarea>
							<button type="submit" class="counter_form_button">submit now</button>
						</form>
					</div>
				</div>
			</div> -->

		</div>
	</div>

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Upcoming events</h2>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="<?= base_url('assets/images/event_1.jpg')?>" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">2</div>
									<div class="event_month trans_200">Aug</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Personalized online learning experience</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>5pm</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Zoom</span></div>
									<div class="event_text">
										<p>Rebrand your learning and start an online session...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="<?= base_url('assets/images/event_2.jpg')?>" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">20</div>
									<div class="event_month trans_200">July</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">How to use Easy Pass?</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>4Pm</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Zoom</span></div>
									<div class="event_text">
										<p>Learn how to use the best online application...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="<?= base_url('assets/images/event_3.jpg')?>" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">01</div>
									<div class="event_month trans_200">Sep</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Contribute to solve the global Pandemic</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 - 14:00</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Zoom</span></div>
									<div class="event_text">
										<p>Let's do our part to fight the global pandemic...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/images/team_background.jpg')?>" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Some of our Staffs</h2>
						<div class="section_subtitle"><p></p></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('assets/images/1.jpeg')?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Mr Jasper</a></div>
							<div class="team_subtitle">Mathematics department</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('assets/images/2.jpeg')?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Mr Ofut Ogar</a></div>
							<div class="team_subtitle">Computer Science department</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('assets/images/3.jpeg')?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Mr Eba Alobo</a></div>
							<div class="team_subtitle">Mass Communication department</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('assets/images/4.jpeg')?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Dr E.E Umoh</a></div>
							<div class="team_subtitle">Computer Science department</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Latest News -->



	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/images/newsletter.jpg')?>" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up for news and offers</div>
							<div class="newsletter_subtitle">Sign up to recieve the lastest news on tech</div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer" id="contact">
		<div class="footer_background" style="background-image:url(assets/images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Easy<span>Pass</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Best Online Learning System</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: Barefooted@gmail.com</li>
											<!-- <li>Phone:  +(88) 111 555 666</li> -->
											<li>Cross River University of Technology</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">About</a></li>
											<li><a href="#">Contact</a></li>
											<li><a href="<?= base_url('student/login')?>">Login</a></li>
											<li><a href="<?= base_url('student/register')?>">Register</a></li>
											
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="<?= base_url('assets/images/mobile_1.png')?>" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="<?= base_url('assets/images/mobile_2.png')?>" alt=""></a></div>
									</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by  <a href="#" target="_blank">Barefooted</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?= base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?= base_url('assets/styles/bootstrap4/popper.js')?>"></script>
<script src="<?= base_url('assets/styles/bootstrap4/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/greensock/TweenMax.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/greensock/TimelineMax.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/scrollmagic/ScrollMagic.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/greensock/animation.gsap.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/greensock/ScrollToPlugin.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')?>"></script>
<script src="<?= base_url('assets/plugins/easing/easing.js')?>"></script>
<script src="<?= base_url('assets/plugins/parallax-js-master/parallax.min.js')?>"></script>
<script src="<?= base_url('assets/js/custom.js')?>"></script>
</body>
</html>