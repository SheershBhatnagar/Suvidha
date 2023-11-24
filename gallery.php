<!DOCTYPE html>
<html lang="en">
	<?php 

		include 'core/head.php';

	?>
	<body>
		<div class="page-wrapper">
			<!-- header start-->
			<?php 

				$index = 2;

				include 'core/header.php';
				
			?>
			<!-- header end-->
			<main class="main">
				<section class="promo-primary">
					<picture>
						<div class="img--bg" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/suvidha/Gallery/Workshops.jpg); background-position-x: 0%, 0%; background-position-y: 0%, 0%; background-repeat: repeat, repeat; background-attachment: scroll, scroll; background-size: auto, auto; background-attachment: fixed;background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
					</picture>
					<div class="promo-primary__description"> <span>Our Journey</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Suvidha Foundation (Suvidha Mahila Mandal)</span>
										<h1 class="promo-primary__title"><span>Gallery</span> <span>Masonry</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- gallery start-->
				<section class="section gallery">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<!-- filter panel start-->
								<ul class="filter-panel">
									<li class="filter-panel__item filter-panel__item--active" data-filter="*"><span>All</span></li>
									<li class="filter-panel__item" data-filter=".category_1"><span>Animal Feeding</span></li>
									<li class="filter-panel__item" data-filter=".category_2"><span>Books Distribution</span></li>
									<li class="filter-panel__item" data-filter=".category_3"><span>Cloths Distribution</span></li>
									<li class="filter-panel__item" data-filter=".category_4"><span>Empowering Women</span></li>
									<li class="filter-panel__item" data-filter=".category_5"><span>Food Distribution</span></li>
									<li class="filter-panel__item" data-filter=".category_6"><span>Free Education</span></li>
									<li class="filter-panel__item" data-filter=".category_7"><span>Free Workshops</span></li>
									<li class="filter-panel__item" data-filter=".category_8"><span>Online Events</span></li>
									<li class="filter-panel__item" data-filter=".category_9"><span>Suvidha Events</span></li>
									<li class="filter-panel__item" data-filter=".category_10"><span>Tree Plantation</span></li>
									<li class="filter-panel__item" data-filter=".category_11"><span>Women's Day</span></li>
								</ul>
								<!-- filter panel end-->
							</div>
						</div>
					</div>
					<div class="row no-gutters gallery-masonry">
						<div class="col-6 col-md-4 gallery-masonry__item category_7"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_1.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/Workshops.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Free Workshops</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_2"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_2.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/BooksDistribution.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Books Distribution</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_8"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_3.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/OnlineEvents.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Online Events</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_3"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_4.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/ClothsDistribution.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Cloths Distribution</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_10"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_5.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/TreePlantation.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Tree Plantation</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_6"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_6.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/FreeEducation.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Free Education</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_11"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_7.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/Women'sDay.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Women's Day</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_5"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_8.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/FoodDistribution.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Food Distribution</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_9"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_8.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/SuvidhaEvents.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Suvidha Events</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_4"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_8.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/SanitaryPad.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Empowering Women</h6></a></div>
						<div class="col-6 col-md-4 gallery-masonry__item category_1"><a class="gallery-masonry__img gallery-masonry__item--height-2" href="img/gallery_8.jpg" data-fancybox="gallery"><img class="img--bg" src="img/suvidha/Gallery/AnimalFeeding.jpg" alt="img"/>
							<h6 class="gallery-masonry__description">Animal Feeding</h6></a></div>
					</div>
				</section>
				<!-- gallery end-->
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
