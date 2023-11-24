<!DOCTYPE html>
<html lang="en">
	<?php 

		include 'core/head.php';

	?>
	<body>
		<div class="page-wrapper">
			<!-- header start-->
			<?php 

				$index = 3;

				include 'core/header.php';
				
			?>
			<!-- header end-->
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="img/contacts.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/contacts.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Compassion</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Suvidha Foundation (Suvidha Mahila Mandal)</span>
										<h1 class="promo-primary__title"><span>Contacts</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section start-->
				<section class="section contacts">
					<div class="container">
						<div class="row offset-margin">
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icon_1-1.png" alt="img"/>
										<img class="img--layout" src="img/suvidha/icons/marker.png" alt="img"/>
									</div>
									<br>
									<div class="icon-item__text">
										<p>Address: Suvidha Mahila Mandal, Walni Ward No. 1, Jai Bhole Nagar, Walni, Saoner, Nagpur, Maharashtra 441102</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icon_2-2.png" alt="img"/>
										<img class="img--layout" src="img/suvidha/icons/phone.png" alt="img"/>
									</div>
									<br>
									<div class="icon-item__text">
										<p>Phone: <a class="icon-item__link" href="tel:+917020044091">+91 7020044091</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icon_3-3.png" alt="img"/>
										<img class="img--layout" src="img/suvidha/icons/mail.png" alt="img"/>
									</div>
									<br>
									<div class="icon-item__text">
										<p>Email: <a class="icon-item__link" href="mailto:info@suvidhafoundationedutech.org">info@suvidhafoundationedutech.org</a></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="icon-item">
									<div class="icon-item__img"><img class="img--layout" src="img/icon_4-4.png" alt="img"/>
										<img class="img--layout" src="img/suvidha/icons/social.png" alt="img"/>
									</div>
									<br>
									<div class="icon-item__text">
										<!-- socials start-->
										<ul class="socials">
											<li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										</ul>
										<!-- socials end-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
				<!-- contacts start-->
				<section class="section contacts no-padding-top">
					<div class="contacts-wrapper">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-xl-6">
									<form class="form message-form" action="api/contact_us.php" method="POST">
										<h6 class="form__title">Send Message</h6><span class="form__text">* The following info is required</span>
										<div class="row">
											<div class="col-lg-6">
												<input class="form__field" type="text" name="fname" placeholder="First Name *" required="required"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="text" name="lname" placeholder="Last Name (Optional)"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="email" name="email" placeholder="Email *" required="required"/>
											</div>
											<div class="col-lg-6">
												<input class="form__field" type="tel" name="phone" placeholder="Phone"/>
											</div>
											<div class="col-12">
												<textarea class="form__message form__field" name="message" placeholder="Message *" required="required"></textarea>
											</div>
											<div class="col-12">
												<button class="form__submit" type="submit" name="submit">Send Message</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- contacts end-->
				<!-- bottom bg start-->
				<section class="bottom-background">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="img/bottom-bg.png" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>
				<!-- bottom bg end-->
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
