<!DOCTYPE html>
<html lang="en">

<?php

	include 'core/head.php';
	include 'constants/social_constants.php';

?>

<body>
	<div class="page-wrapper">
		<!-- header start-->
		<?php

			$index = 0;

			include 'core/header.php';

		?>
		<!-- header end-->
		<main class="main">
			<!-- promo start-->
			<section class="promo bottom-background">
				<div class="promo-slider bottom-background">
					<div class="promo-slider__item promo-slider__item--style-1 bottom-background">
						<picture>
							<div class="img--bg" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/suvidha/Suvidha-1.jpg); background-position-x: 0%, 0%; background-position-y: 0%, 0%; background-repeat: repeat, repeat; background-attachment: scroll, scroll; background-size: auto, auto; background-attachment: fixed;background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
						</picture>
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="align-container">
										<div class="align-container__item">
											<div class="promo-slider__wrapper-1">
												<h2 class="promo-slider__title"><span>We help all people in need</span> <span>around the world.</span></h2>
											</div>
											<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="donation.php">Donate Now</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="promo-slider__item promo-slider__item--style-2">
						<picture>
							<div class="img--bg" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/suvidha/Suvidha-2.jpg); background-position-x: 0%, 0%; background-position-y: 0%, 0%; background-repeat: repeat, repeat; background-attachment: scroll, scroll; background-size: auto, auto; background-attachment: fixed;background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
						</picture>
						<div class="container">
							<div class="row">
								<div class="col-xl-7">
									<div class="align-container">
										<div class="align-container__item">
											<div class="promo-slider__wrapper-1">
												<h2 class="promo-slider__title"><span>Bring Smiles</span><br><span>To Millions.</span></h2>
											</div>
											<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="donation.php">Donate Now</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="promo-slider__item promo-slider__item--style-3">
						<picture>
							<div class="img--bg" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/suvidha/Suvidha-3.jpg); background-position-x: 0%, 0%; background-position-y: 0%, 0%; background-repeat: repeat, repeat; background-attachment: scroll, scroll; background-size: auto, auto; background-attachment: fixed;background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
						</picture>
						<div class="container">
							<div class="row">
								<div class="col-xl-8 offset-xl-2">
									<div class="align-container">
										<div class="align-container__item">
											<div class="promo-slider__wrapper-1">
												<h2 class="promo-slider__title"><span>Get Your Donations</span><br><span>Tax Exempted</span></h2>
											</div>
											<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="donation.php">Donate Now</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="promo-slider__item promo-slider__item--style-3">
						<picture>
							<div class="img--bg" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/suvidha/Suvidha-4.jpg); background-position-x: 0%, 0%; background-position-y: 0%, 0%; background-repeat: repeat, repeat; background-attachment: scroll, scroll; background-size: auto, auto; background-attachment: fixed;background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
						</picture>
						<div class="container">
							<div class="row">
								<div class="col-xl-8 offset-xl-2">
									<div class="align-container">
										<div class="align-container__item">
											<div class="promo-slider__wrapper-1">
												<h2 class="promo-slider__title"><span>77<sup>th</sup> Independence Day</span><br /><span> Celebrated</span></h2>
											</div>
											<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="donation.php">Donate Now</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="promo-slider__item promo-slider__item--style-3">
						<picture>
							<div class="img--bg" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/suvidha/Suvidha-5.jpg); background-position-x: 0%, 0%; background-position-y: 0%, 0%; background-repeat: repeat, repeat; background-attachment: scroll, scroll; background-size: auto, auto; background-attachment: fixed;background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
						</picture>
						<div class="container">
							<div class="row">
								<div class="col-xl-8 offset-xl-2">
									<div class="align-container">
										<div class="align-container__item">
											<div class="promo-slider__wrapper-1">
												<h2 class="promo-slider__title"><span>Suvidha Volunteers</span><br /><span>Around the world.</span></h2>
											</div>
											<div class="promo-slider__wrapper-3"><a class="button promo-slider__button button--primary" href="donation.php">Donate Now</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- promo socials start-->
				<ul class="promo-socials">
					<li class="promo-socials__item"><a class="promo-socials__link" href="<?php print($instagram); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li class="promo-socials__item"><a class="promo-socials__link" href="<?php print($linkedin); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li class="promo-socials__item"><a class="promo-socials__link" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				</ul>
				<!-- promo socials end-->
				<!-- promo pannel start-->
				<div class="promo-pannel"><a class="anchor promo-pannel__anchor" href="#about"> <span>Scroll Down</span></a>

					<!-- Video PLayer -->
					<!-- <div class="promo-pannel__video"><img class="img--bg" src="img/video_block.jpg" alt="image" /><a class="video-trigger" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><span>Watch our video</span><i class="fa fa-play" aria-hidden="true"></i></a></div> -->

					<div class="promo-pannel__phones">
						<p class="promo-pannel__title">Phone number</p><a class="promo-pannel__link" href="tel:+917020044091">+91 7020044091</a>
					</div>
					<div class="promo-pannel__email">
						<p class="promo-pannel__title">Email</p><a class="promo-pannel__link" href="mailto:info@suvidhafoundationedutech.org">info@suvidhafoundationedutech.org</a>
					</div>
				</div>
				<!-- promo pannel end-->
				<!-- slider nav start-->
				<div class="slider__nav slider__nav--promo">
					<div class="promo-slider__count"></div>
					<div class="slider__arrows">
						<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<!-- slider nav end-->
			</section>
			<!-- promo end-->
			<!-- about us start-->
			<section class="section about-us" id="about">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
								<h2 class="heading__title"><span>Empower Women, </span> <span>Empower the World</span></h2>
							</div>
							<p><strong>ABOUT: </strong>Suvidha Mahila Mandal is a non-profit organization working to impart education among the financially challenged sections to help them realize parity in education and strength of little minds in building a promising future. The organization has provisions of student internships, student mentorship and the scope to volunteer. Through these programmes, the organization aims to achieve the vision of imparting innovative education that stays with the students forever and equip them for the unforeseen future.</p>
							<br>
							<p><strong>MISSION: </strong>To Inspire Students, help them Innovate and let them Integrate to build the next generation humankind. <br><br>To Run Food Donation And Awareness Campaign In Rural Region.</p>
							<br>
							<p><strong>VISION: </strong>To build Next Generation Entrepreneur, by providing them a Skill-Based Education. <br><br>To Provide Internship, Training And Workshops and Quality Education All Over The World.</p>
						</div>
						<div class="col-lg-6 col-xl-5 offset-xl-1">
							<div class="info-box"><img class="img--layout" src="img/about_layout.png" alt="img" /><img class="img--bg" src="img/suvidha/about.jpg" alt="img" /></div>
						</div>
					</div>
				</div>
			</section>
			<!-- about us end-->
			<!-- internship section start-->
			<section class="section text-section"><img class="text-section__bg" src="img/text-section.png" alt="img" />
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="text-section__heading">Internship</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
							<h3 class="text-section__title">Apply For Internship And <br />Mentorship Programs.</h3>
							<p>The Suvidha Foundation Internship Program is a unique opportunity for students and recent graduates to gain experience and contribute to the work of Suvidha Foundation. Along with undertaking tasks related to their specific skills, we encourage interns to develop a reputable professional portfolio.</p>
							<a class="button button--primary" href="internship_form.php">Apply for Internship</a>
						</div>
					</div>
				</div>
			</section>
			<!-- internship section end-->
			<!-- causes start-->
			<section class="section causes"><img class="causes__bg" src="img/causes_img.png" alt="img" />
				<div class="container">
					<div class="row align-items-end">
						<div class="col-xl-12">
							<div class="heading heading--primary"><span class="heading__pre-title">What we Do</span>
								<h2 class="heading__title"><span>Causes</span> <span>for a Sustainable Future</span></h2>
							</div>
							<!-- slider nav start-->
							<div class="slider__nav causes-slider__nav">
								<div class="slider__arrows">
									<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
									</div>
									<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<!-- slider nav end-->
						</div>
					</div>
					<div class="row align-items-end margin-bottom">
						<div class="col-sm-12 d-flex justify-content-sm-end">

						</div>
					</div>
				</div>
				<div class="causes-holder offset-margin">
					<div class="causes-holder__wrapper">
						<div class="causes-slider offset-margin">
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Health Care</a></h6>
											<p>By focusing on healthy food donations, our NGO aims to improve the well-being and quality of life for individuals and communities in need.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Healthy Food</a></h6>
											<p>We believe that access to healthcare is a fundamental right, and we work tirelessly to ensure that healthcare services are accessible, affordable, and of high quality for those in need.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Primary Education</a></h6>
											<p>By collaborating with local communities and educators, we aim to empower children with the knowledge and skills they need for a brighter future.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Social Care</a></h6>
											<p>Our programs encompass a range of support services, including counseling, vocational training, and advocacy, with the goal of empowering individuals.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Social Awareness</a></h6>
											<p>We provide resources, conduct awareness campaigns, and facilitate access to hygiene facilities, aiming to create a healthier environment and prevent the spread of diseases.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="cause-details.html">Tree Plantation</a></h6>
											<p>Through community engagement and active participation, we successfully planted thousands of trees, fostering a greener and healthier ecosystem for future generations.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- causes end-->
			<!-- counter start-->
			<div class="container">
				<div class="row offset-margin">
					<div class="col-md-3 text-center">
						<div class="counter-item counter-item--style-1">
							<div class="counter-item__top">
								<svg class="icon icon--red">
									<use xlink:href="#donation"></use>
								</svg>
								<h6 class="counter-item__title">Countries</h6>
							</div>
							<div class="counter-item__lower"><span class="js-counter">15</span><span>+</span></div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="counter-item counter-item--style-1">
							<div class="counter-item__top">
								<svg class="icon icon--green">
									<use xlink:href="#church"></use>
								</svg>
								<h6 class="counter-item__title">Volunteers</h6>
							</div>
							<div class="counter-item__lower"><span class="js-counter">3</span><span> L+</span></div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="counter-item counter-item--style-1">
							<div class="counter-item__top">
								<svg class="icon icon--blue">
									<use xlink:href="#charity"></use>
								</svg>
								<h6 class="counter-item__title">Internships</h6>
							</div>
							<div class="counter-item__lower"><span class="js-counter">1</span><span> Cr+</span></div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="counter-item counter-item--style-1">
							<div class="counter-item__top">
								<svg class="icon icon--blue">
									<use xlink:href="#charity"></use>
								</svg>
								<h6 class="counter-item__title">Trees Planted</h6>
							</div>
							<div class="counter-item__lower"><span class="js-counter">54</span><span> L+</span></div>
						</div>
					</div>
				</div>
			</div>
			<!-- counter end-->
			<!-- projects start-->
			<section class="section projects padding-top no-padding-bottom">
				<div class="container">
					<div class="row align-items-end margin-bottom">
						<div class="col-lg-9">
							<div class="heading heading--primary"><span class="heading__pre-title">Suvidha Events</span>
								<h2 class="heading__title"><span>Our Charity Events:</span> <span>Celebrating Our Impact Together</span></h2>
							</div>
						</div>
						<div class="col-lg-3">
							<a class="button button--primary" href="events.php">Show More</a>
						</div>
					</div>
				</div>
				<div class="row no-gutters projects-masonry">
					<div class="col-lg-12 col-xl-12 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
						<div class="projects-masonry__img"><img class="img--bg" src="img/suvidha/Events/Tree-Plantation.jpg" alt="img" /></div>
						<div class="projects-masonry__text" style="background-color: #9BC35E;">
							<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #F36F8F;"></span>
								<h3 class="projects-masonry__title"> <a href="cause-details.html">Tree Plantation</a></h3>
								<p>Join us in nurturing the Earth's embrace, one tree at a time. Together, let's create a greener tomorrow and breathe life into our planet.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-xl-12 projects-masonry__item projects-masonry__item--height-2 projects-masonry__item--horizontal">
						<div class="projects-masonry__img"><img class="img--bg" src="img/suvidha/Events/Fundraising.jpg" alt="img" /></div>
						<div class="projects-masonry__text" style="background-color: #E78F51;">
							<div class="projects-masonry__inner"><span class="projects-masonry__badge" style="background: #2EC774;"></span>
								<h3 class="projects-masonry__title"> <a href="cause-details.html">Fundraising Events</a></h3>
								<p>Unlock the power of generosity at our Fundraising Event. Your support will ignite positive change and uplift lives in our community.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- projects end-->
			<!-- events start-->
			<section class="section events"><img class="events__bg" src="img/events_bg.png" alt="img" />
				<div class="container">
					<div class="row margin-bottom">
						<div class="col-12">
							<div class="heading heading--primary heading--center"><span class="heading__pre-title">Meet Our Team</span>
								<h2 class="heading__title"><span>Awesome guys behind</span> <span>charity activities</span></h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="event-item">
								<div class="event-item__img"><img class="img--bg" src="img/suvidha/team/Shobha_Motghare.jpg" alt="img" /></div>
								<div class="event-item__content">
									<h6 class="event-item__title text-center"><a href="#">Shobha Motghare</a></h6>
									<p class="text-center"><b>Secretary</b></p>
									<br>
									<center>
										<div>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($instagram); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($linkedin); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="color: black;"></i></a>
										</div>
									</center>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="event-item">
								<div class="event-item__img"><img class="img--bg" src="img/suvidha/team/Payal_Badhe.jpg" alt="img" /></div>
								<div class="event-item__content">
									<h6 class="event-item__title text-center"><a href="#">Payal Badhe</a></h6>
									<p class="text-center"><b>President</b></p>
									<br>
									<center>
										<div>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($instagram); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($linkedin); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="color: black;"></i></a>
										</div>
									</center>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="event-item">
								<div class="event-item__img"><img class="img--bg" src="img/suvidha/team/Bharti_Shendre.jpg" alt="img" /></div>
								<div class="event-item__content">
									<h6 class="event-item__title text-center"><a href="#">Bharti Shendre</a></h6>
									<p class="text-center"><b>Treasurer</b></p>
									<br>
									<center>
										<div>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($instagram); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($linkedin); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="color: black;"></i></a>
										</div>
									</center>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="event-item">
								<div class="event-item__img"><img class="img--bg" src="img/suvidha/team/Nilima_Kalambe.jpg" alt="img" /></div>
								<div class="event-item__content">
									<h6 class="event-item__title text-center"><a href="#">Nilima Kalambe</a></h6>
									<p class="text-center"><b>Advisor</b></p>
									<br>
									<center>
										<div>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($instagram); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($linkedin); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="color: black;"></i></a>
											<a class="promo-socials__link col-lg-3 col-md-3" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="color: black;"></i></a>
										</div>
									</center>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- events end-->
			<!-- donors start-->
			<section class="section donors padding-top">
				<div class="container">
					<div class="row margin-bottom">
						<div class="col-12">
							<div class="heading heading--primary heading--center"><span class="heading__pre-title"></span>
								<h3 class="heading__title no-margin-bottom"><span>Empowering Change Together:</span> <span>Our Collaborative Initiatives</span></h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<!-- donors slider start-->
							<div class="slider-holder">
								<div class="donors-slider donors-slider--style-1">
									<div class="donors-slider__item">
										<div class="donors-slider__img"><img src="img/suvidha/collab-1.jpg" alt="donor" /></div>
									</div>
									<div class="donors-slider__item">
										<div class="donors-slider__img"><img src="img/suvidha/collab-2.jpg" alt="donor" /></div>
									</div>
								</div>
							</div>
							<!-- donors slider end-->
						</div>
					</div>
				</div>
			</section>
			<!-- donors end-->
			<!-- testimonials style-2 start-->
			<!-- <section class="section causes"><img class="causes__bg" src="img/causes_img.png" alt="img" />
				<div class="container">
					<div class="row align-items-end">
						<div class="col-xl-12">
							<div class="heading heading--primary"><span class="heading__pre-title">Testimonials</span>
								<h2 class="heading__title"><span>What people are talking about</span> <span>our charity activities</span></h2>
							</div>
							
							<div class="slider__nav causes-slider__nav">
								<div class="slider__arrows">
									<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
									</div>
									<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row align-items-end margin-bottom">
						<div class="col-sm-12 d-flex justify-content-sm-end">

						</div>
					</div>
				</div>
				<div class="causes-holder offset-margin">
					<div class="causes-holder__wrapper">
						<div class="causes-slider offset-margin">
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<div class="row align-items-center ml-1 mb-3">
												<img src="img/suvidha/Testimonials/1.jpg">
												<h6 class="causes-item__title ml-2 mt-3">Divina Malfoy</h6>
											</div>
											<p>It was great experience to work in suvidha foundation, team work is very good. They conduct daily meetings to guide how to work,which they make our work more easy. So, overall it's amazing organization to learn.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<div class="row align-items-center ml-1 mb-3">
												<img src="img/suvidha/Testimonials/5.jpg">
												<h6 class="causes-item__title ml-2 mt-3">Aheri Ghosh</h6>
											</div>
											<p>I'm glad to have worked with the Suvidha Foundation because I am passionate about their message and what they do.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<div class="row align-items-center ml-1 mb-3">
												<img src="img/suvidha/Testimonials/9.jpg">
												<h6 class="causes-item__title ml-2 mt-3">Lekhashree H J</h6>
											</div>
											<p>It was a great experience working with your NGO. I  learned to connect with the society and helped the underprivileged section of the society.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<div class="row align-items-center ml-1 mb-3">
												<img src="img/suvidha/Testimonials/11.jpg">
												<h6 class="causes-item__title ml-2 mt-3">Khushi Jain</h6>
											</div>
											<p>Had great learning. Fruitful experience.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<div class="row align-items-center ml-1 mb-3">
												<img src="img/suvidha/Testimonials/2.jpg">
												<h6 class="causes-item__title ml-2 mt-3">Samrudhi Nawale</h6>
											</div>
											<p>The experience here at Suvidha Foundation was wonderful. I learnt a lot. It was worth it.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<div class="row align-items-center ml-1 mb-3">
												<img src="img/suvidha/Testimonials/6.jpg">
												<h6 class="causes-item__title ml-2 mt-3">Ananya Tripathi</h6>
											</div>
											<p>Regular meetings really helped in systematic learning as well as working.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<div class="row align-items-center ml-1 mb-3">
												<img src="img/suvidha/Testimonials/8.jpg">
												<h6 class="causes-item__title ml-2 mt-3">Sanjana Tunk</h6>
											</div>
											<p>It was entirely a new experience and a gained alot from it.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="causes-slider__item">
								<div class="causes-item causes-item--primary">
									<div class="causes-item__body">
										<div class="causes-item__top">
											<div class="row align-items-center ml-1 mb-3">
												<img src="img/suvidha/Testimonials/12.jpg">
												<h6 class="causes-item__title ml-2 mt-3">Manya Sahni</h6>
											</div>
											<p>Thank you for giving the opportunity. Did this intership which was a bit different and unique from others.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- testimonials style-2 end-->
		</main>
		<!-- footer start-->
		<?php

			include 'core/footer.php';

		?>
		<!-- footer end-->
	</div>
	<!-- libs-->
	<?php

		include 'core/bottom_js.php';

	?>
</body>

</html>
