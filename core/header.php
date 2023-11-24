<?php

	include 'constants/social_constants.php';

	$activeHeader = "main-menu__item--active";

?>

<!-- aside dropdown start-->
<div class="aside-dropdown">
	<div class="aside-dropdown__inner">
		<span class="aside-dropdown__close">
			<svg class="icon">
				<use xlink:href="#close"></use>
			</svg>
		</span>
		<div class="aside-dropdown__item d-lg-none d-block">
			<ul class="aside-menu">
				<li class="aside-menu__item aside-menu__item--has-child aside-menu__item--active"><a class="aside-menu__link" href="javascript:void(0);"><span>Home</span></a></li>
				<li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>Causes</span></a></li>
				<li class="aside-menu__item"><a class="aside-menu__link" href="contacts.html"><span>Contacts</span></a></li>
			</ul>
		</div>
		<div class="aside-dropdown__item">
			<div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:info@suvidhafoundationedutech.org">info@suvidhafoundationedutech.org</a></div>
			<div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+917020044091">+91 7020044091</a></div>
			<ul class="aside-socials">
				<li class="aside-socials__item"><a class="aside-socials__link" href="<?php print($instagram); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="<?php print($linkedin); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				<li class="aside-socials__item"><a class="aside-socials__link" href="<?php print($facebook); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="aside-dropdown__item"><a class="button button--squared" href="donation.php"><span>Donate</span></a></div>
	</div>
</div>
<!-- aside dropdown end-->
<!-- header start-->
<header class="header header--front">
	<div class="container-fluid">
		<div class="row no-gutters justify-content-between">
			<div class="col-auto d-flex align-items-center">
				<div class="dropdown-trigger d-none d-sm-block">
					<div class="dropdown-trigger__item"></div>
				</div>
				<div class="header-logo"><a class="header-logo__link" href="index.php"><img class="header-logo__img logo--light" src="img/suvidha/SuvidhaLogo.png" alt="logo" /><img class="header-logo__img logo--dark" src="img/suvidha/SuvidhaLogo.png" alt="logo" /></a></div>
			</div>
			<div class="col-auto">
				<!-- main menu start-->
				<nav>
					<ul class="main-menu">
						<li class="main-menu__item main-menu__item--has-child <?php $index==0 ? print($activeHeader) : null ?>"><a class="main-menu__link" href="index.php"><span>Home</span></a></li>
						<li class="main-menu__item main-menu__item--has-child <?php $index==1 ? print($activeHeader) : null ?>"><a class="main-menu__link" href="events.php"><span>Events</span></a></li>
						<li class="main-menu__item main-menu__item--has-child <?php $index==2 ? print($activeHeader) : null ?>"><a class="main-menu__link" href="gallery.php"><span>Gallery</span></a></li>
						<li class="main-menu__item <?php $index==3 ? print($activeHeader) : null ?>"><a class="main-menu__link" href="contacts.php"><span>Contact</span></a></li>
					</ul>
				</nav>
				<!-- main menu end-->
			</div>
			<div class="col-auto d-flex align-items-center">
				<div class="dropdown-trigger d-block d-sm-none">
					<div class="dropdown-trigger__item"></div>
				</div><a class="button button--squared" href="donation.php"><span>Donate</span></a>
			</div>
		</div>
	</div>
</header>
<!-- header end-->
