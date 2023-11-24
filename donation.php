<!DOCTYPE html>
<html lang="en">
	<?php

		include 'core/head.php';

	?>
	<body>
		<div class="page-wrapper">
			<!-- header start-->
			<?php

				$index = 11;

				include 'core/header.php';

			?>
			<!-- header end-->
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="img/donors.jpg" media="(min-width: 992px)"/><img class="img--bg" src="img/donors.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Mercy</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Suvidha Foundation (Suvidha Mahila Mandal)</span>
										<h1 class="promo-primary__title"><span>Donate</span> <span>Now</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- info banner start-->
				<section class="section no-padding-top">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="info-banner"><img class="img--layout" src="img/info-banner_layout.png" alt="img"/>
									<div class="row margin-bottom">
										<div class="col-12">
											<div class="heading heading--primary heading--center">
												<h2 class="heading__title no-margin-bottom"><span>Account</span> <span>Details</span></h2>
											</div>
										</div>
									</div>
									<div class="row align-items-center">
										<div class="col-lg-5">
											<div class="info-banner__img"><img src="img/suvidha/QR-Codes.jpg" alt="img"/></div>
										</div>
										<div class="col-lg-6">
											<h4><strong>For Indian Donors</strong></h4>
											<br>
											<p><strong>Bank Name: </strong>Bank of Baroda
											<br>
											<strong>Account Name: </strong>Suvidha Mahila Mandal
											<br>
											<strong>Account Number: </strong>97840100027609
											<br>
											<strong>IFSC Code: </strong>BARB0DBKPAR
											<br>
											<strong>City: </strong>Nagpur
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- info banner end-->
				<!-- text section start-->
				<section class="section text-section text-section--style-2"><img class="text-section__bg-left" src="img/text-section_left.png" alt="img"/><img class="text-section__bg-right" src="img/text-section_right.png" alt="img"/>
					<div class="container">
						<div class="row">
							<div class="col-12 text-center">
								<h2 class="text-section__heading">Thank You</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-4">
								<h3 class="text-section__title">To all our donors, <br/>partners and volunteers</h3>
							</div>
						</div>
					</div>
				</section>
				<!-- text section end-->
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
