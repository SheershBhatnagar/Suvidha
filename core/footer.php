<?php

	include 'constants/social_constants.php';

	$activeFooter = "footer-menu__item--active";

?>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="footer-logo"><a class="footer-logo__link" href="index.html"><img class="footer-logo__img" src="img/suvidha/SuvidhaLogo.png" alt="logo" /></a></div>
				<br>
				<div class="footer-contacts">
					<p class="footer-contacts__address">Suvidha Mahila Mandal, Walni Ward No. 1, Jai Bhole Nagar, Walni, Saoner, Nagpur, Maharashtra 441102</p>
					<br>
					<p class="footer-contacts__phone">Phone: <a href="tel:+917020044091">+91 7020044091</a></p>
					<br>
					<p class="footer-contacts__mail">Email: <a href="mailto:info@suvidhafoundationedutech.org">info@suvidhafoundationedutech.org</a></p>
				</div>
				<!-- footer socials start-->
				<ul class="footer-socials">
					<li class="footer-socials__item"><a class="footer-socials__link" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="footer-socials__item"><a class="footer-socials__link" href="<?php print($linkedin); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li class="footer-socials__item"><a class="footer-socials__link" href="<?php print($instagram); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
				<!-- footer socials end-->
			</div>
			<div class="col-sm-6 col-lg-2">
				<h4 class="footer__title">Menu</h4>
				<nav>
					<ul class="footer-menu">
						<li class="footer-menu__item <?php $index==0 ? print($activeFooter) : null ?>"><a class="footer-menu__link" href="index.php">Home</a></li>
						<li class="footer-menu__item <?php $index==1 ? print($activeFooter) : null ?>"><a class="footer-menu__link" href="events.php">Events</a></li>
						<li class="footer-menu__item <?php $index==2 ? print($activeFooter) : null ?>"><a class="footer-menu__link" href="gallery.php">Gallery</a></li>
						<li class="footer-menu__item <?php $index==3 ? print($activeFooter) : null ?>"><a class="footer-menu__link" href="contacts.php">Contact</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-6 col-lg-4">
				<h4 class="footer__title">Certificates</h4>
				<!-- footer nav start-->
				<nav>
					<ul class="footer-menu">
						<li class="footer-menu__item"><a class="footer-menu__link" href="https://suvidhafoundationedutech.org/Themes/doc/80G_APROVAL.pdf" target="_blank">80G Certificate</a></li>
						<li class="footer-menu__item"><a class="footer-menu__link" href="https://suvidhafoundationedutech.org/Themes/doc/12A_APPROVAL.pdf" target="_blank">12A Certificate</a></li>
						<li class="footer-menu__item"><a class="footer-menu__link" href="https://suvidhafoundationedutech.org/Themes/doc/CSR.PDF" target="_blank">CSR Certificate</a></li>
						<li class="footer-menu__item"><a class="footer-menu__link" href="https://suvidhafoundationedutech.org/Themes/doc/suvidha_darpan_portal_registration.pdf" target="_blank">Suvidha Darpan Registration</a></li>
						<li class="footer-menu__item"><a class="footer-menu__link" href="https://suvidhafoundationedutech.org/Themes/doc/suvidha_pan_card.pdf" target="_blank">Suvidha Pan Card</a></li>
					</ul>
				</nav>
				<br>
				<h4 class="footer__title">Useful Links</h4>
				<nav>
					<ul class="footer-menu">
						<li class="footer-menu__item"><a class="footer-menu__link" href="https://suvidhafoundationedutech.org/verify.php" target="_blank">Verify Your Certificate</a></li>
					</ul>
				</nav>
				<!-- footer nav end-->
			</div>
			<div class="col-sm-6 col-lg-3">
				<h4 class="footer__title">Donate</h4>
				<p>Help Us Change the Lives of Children in World</p><a class="button footer__button button--filled" href="donation.php">Donate</a>
			</div>
		</div>
		<div class="row align-items-baseline">
			<div class="col-md-6">
				<p class="footer-copyright">© Suvidha Foundation (Suvidha Mahila Mandal), All Right Reserved.</p>
			</div>
			<div class="col-md-6">
				<div class="footer-privacy"><a class="footer-privacy__link" href="privacy_policy.php">Privacy Policy</a></div>
			</div>
		</div>
	</div>
</footer>
