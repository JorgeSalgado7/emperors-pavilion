<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accomodations | Emperor’s Pavilion</title>
	<link rel="stylesheet" href="../../css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>

<body>

	<!-- HEADER -->
	<header class="estates_header">

		<div class="container">

			<a href="/emperors-pavilion" class="estates_header__logo">
				<img src="../../img/logo.svg" alt="Emperors Pavilion" width="160" height="10.5">
			</a>

			<nav class="estates_header__nav"></nav>

			<button class="estates_header__button">
				MENU
				<div class="estates_header__button__toggle">
					<div class="estates_header__button__toggle__bar"></div>
				</div>
			</button>

		</div>

	</header>

	<!-- MOBILE MENU -->
	<nav class="estates_menu">
		<div class="container">
			<ul class="estates_menu__ul"></ul>
		</div>
	</nav>

	<!--HERO-->
	<div class="estates_accommodations_hotel_hero">
		<div class="container">
			<h1 class="estates_accommodations_hotel_hero__h1">RELAX IN ULTIMATE LUXURY AND COMFORT</h1>
		</div>
	</div>

	<!-- Emperor’s Pavilion  -->
	<div class="estates_accommodations_hotel__white">

		<!-- RESPONSIVE TITLE -->
		<div class="container">
			<h2 class="estates_accommodations_hotel__h2_responsive">Emperor’s Pavilion </h2>
		</div>

		<div class="container">

			<div class="estates_accommodations_hotel__white__text">

				<h2 class="estates_accommodations_hotel__white__text__h2">Emperor’s Pavilion</h2>

				<ul class="estates_accommodations_hotel__white__text__ul">
					<li>Bed: Two King-Size Beds and Four Double Beds</li>
					<li>Bedroom Furnishings: Bedside Tables with Lamps, Dressing Tables with Chairs and Mirrors, and Armchairs with Tables</li>
					<li>Bathrooms: Five and a Half Bathrooms with Two Jacuzzi Tubs and Double Sinks</li>
					<li>Outdoor: Private Terraces for Each Bedroom Plus Expansive Private Rooftop Terrace with Kitchen, Bar, Half Bath, and Multiple Sitting, Lounging, and Dining Areas</li>
					<li>Private Massage Room</li>
					<li>Kitchen: In-Unit Kitchen and Bar with Premium Appliances and Breakfast Bar</li>
					<li>Dining: Dining Area with Table for 10</li>
					<li>Living Room: Two Sofas with Coffee Tables and Armchairs with Tables</li>
					<li>TVs: Located in Bedrooms and Living Rooms</li>
					<li>Pool: Large Private Plunge Pool</li>
				</ul>
			</div>

			<button class="estates_accommodations_hotel__white__img" id="estatesOneBedroomButton"
				onclick="openEstatesOneBedroomModal()">
				<img src="../../img/accommodations/bedrooms/emperors-pavilion.webp" alt="">

				<div class="estates_accommodations_hotel__white__img__button">
					<img src="../../img/accommodations/plan.png" alt="">
					view floorplan
				</div>
			</button>

		</div>

	</div>

	<!-- Emperor’s Pavilion  MODAL -->
	<div class="estates_accommodations_hotel__modal" id="estatesOneBedroomModal">

		<button class="estates_accommodations_hotel__modal--close" onclick="closeEstatesOneBedroomModal()">
			<i class="bi bi-x-lg"></i>
		</button>

		<div class="container">
			<h1 class="estates_accommodations_hotel__modal__title">Emperor’s Pavilion </h1>
		</div>

		<div class="container">

			<div class="swiper">

				<div class="swiper-wrapper">
					<div class="swiper-slide">
					<img src="../../img/accommodations/floorplans/level-1.webp" alt="">
					</div>
					<div class="swiper-slide">
					<img src="../../img/accommodations/floorplans/level-2.webp" alt="">
					</div>
				</div>
	
				<div class="swiper-button-prev"><i class="bi bi-arrow-left"></i></div>
				<div class="swiper-button-next"><i class="bi bi-arrow-right"></i></div>
	
			</div>

		</div>

	</div>

	<!-- FOOTER -->
	<footer class="estates_footer">
		<img src="../../img/logo-vida.svg" alt="">
	</footer>

</body>

<script src="../../js/menu.js"></script>
<script src="../../js/accommodations/nv.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="../../js/accommodations/bedroomsCarrousel.js"></script>

</html>