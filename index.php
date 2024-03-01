<?php

include 'libs/load.php';

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MotoVibezz</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="owl_carousel/owl.carousel.css">
	<link rel="stylesheet" href="owl_carousel/owl.theme.default.css">
	<link rel="icon" type="image/x-icon" href="css/Images/Icons/cargreenicon_98531.ico">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!-- Navbar-first -->
	<?load_template('_navbarfirst');?>
	<!-- Navbar-Mid -->
	<nav class="navbar navbar-expand-lg mt-2 p-0 d-none d-lg-block" id="navbar-mid">
		<div class="container">
			<a href="" class="navbar-brand">MotoVibezz</a>
			<div class="input-group ">
				<input type="text" class="form-control px-4 py-2" placeholder="Search for Products" />
				<button class="btn btn-dark btn-md" type="button" id="btn"><span>Search</span></button>

				<a href="#" class="btn btn-md rounded-pill ms-2" id="login"><img
						src="css/Images/Icons/User_cicrle_light.svg" alt=""><span class="ms-2 text-white">Login</span>
				</a>
				<a href="" class="btn" id="Wishlist"><i class="fa-solid fa-heart"></i><span
						class="ms-2 h6">Wishlist</span></a>
				<a href="" class="btn" id="cart"><i class="fa-solid fa-cart-shopping"></i><span
						class="ms-2 h6">Cart</span></a>
			</div>
		</div>
	</nav>

	<!-- navbar-category -->
	<div class="container d-none d-lg-block">
		<ul class="nav justify-content-center mt-2" id="Category">
			<li class="nav-item mx-3">
				<a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
			</li>
			<li class="nav-item mx-3">
				<a class="nav-link text-dark" href="#">About</a>
			</li>
			<li class="nav-item mx-3">
				<a class="nav-link text-dark" href="#">Category</a>
			</li>
			<li class="nav-item mx-3">
				<a class="nav-link text-dark" aria-disabled="true">Contact Us</a>
			</li>
			<li class="nav-item mx-3">
				<a class="nav-link text-dark" aria-disabled="true">FAQ</a>
			</li>
		</ul>
	</div>

	<!-- Navbar-hidden-display -->

	<nav class="navbar bg-body-tertiary d-lg-none d-sm-block" id="Navhidden">
		<div class="container-fluid bg-dark" id="NavbarHidden">
			<button class="navbar-toggler text-bg-dark" type="button" data-bs-toggle="offcanvas"
				data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
				<i class="fa-solid fa-bars"></i>
			</button>
			<a class="navbar-brand text-bg-dark p-0" href="#">MotoVibezz</a>
			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
				aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								Dropdown
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
					</ul>
					<form class="d-flex mt-3" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
			<a href="" class="btn ms-auto text-bg-dark"><span><i class="fa-solid fa-magnifying-glass"></i></span></a>
			<a href="" class="btn text-bg-dark"><span><i class="fa-regular fa-user"></i></span></a>
			<a href="" class="btn text-bg-dark"><span><i class="fa-solid fa-cart-shopping"></i></span></a>
		</div>
	</nav>

	<!-- poster -->

	<section id="poster" class="p-3">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md p-5">
					<h2>MotoVibezz <br>Trusted & Realiable Online Store</h2>
					<p class="lead">
						The automobile industry involves the design and development of different types of motor vechiles
						& spare
						parts.
					</p>
					<a href="#" class="btn btn-transprent rounded-pill p-2">
						<i class="bi bi-chevron-right"></i> Explore Our Offers
					</a>
				</div>
				<div class="col-md">
					<img src="css/Images/NissanCar.jpg" class="img-fluid rounded-5" alt="" />
					<div class="glass">
					</div>
				</div>
				<section class="d-none d-lg-block" id="badge">
					<div class="badge d-flex col-10" id="text1">
						<div class="text1 col-2">
							<p class="me-3">Confort</p>
							<img src="css/Images/Icons/🦆 icon _yoga_.png" alt="">
							<span>Cozy Seating</span>
						</div>
						<div class="text2 col-2" id="text2">
							<p class="ms-3">Quality Assurance</p>
							<img src="css/Images/Icons/🦆 icon _thumbs up_.png" alt="">
							<span>Cozy Seating</span>
						</div>
						<div class="text3 col-2" id="text3">
							<p class="ms-3">Free Shipping</p>
							<img src="css/Images/Icons/🦆 icon _box iso_.png" alt="">
							<span>No Cost Delivery</span>
						</div>
						<div class="text4 col-2" id="text4">
							<p class="ms-3">Secure Checkout</p>
							<img src="css/Images/Icons/🦆 icon _twitter verified badge_.png" alt="">
							<span>Secure Payments</span>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>

	<!-- Category Box -->
	<section class="p-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="card mt-5">
						<div class="card-body p-auto">
							<h5 class="card-title mt-5 m-auto">Interior Styling</h5>
							<!-- <p class="card-text">Click to see more Interior styling Products</p> -->
							<a href="#" class="btn rounded-pill ms-3 m-auto mt-2" id="cate-btn"
								style="margin-left: 40px;">See
								More</a>
						</div>
						<img src="css/Images/Thumb/Seat.png" class="card-img-top" alt="..." style="width: 50%">
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="card mt-5">
						<div class="card-body p-auto">
							<h5 class="card-title mt-5 m-auto">Exterior Styling</h5>
							<!-- <p class="card-text">Click to see more Interior styling Products</p> -->
							<a href="#" class="btn rounded-pill ms-3 m-auto mt-2" id="cate-btn"
								style="margin-left: 40px;">See
								More</a>
						</div>
						<img src="css/Images/Thumb/exterior.png" class="card-img-top" alt="..." style="width: 50%">
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="card mt-5">
						<div class="card-body p-auto">
							<h5 class="card-title mt-5 m-auto">Electronics</h5>
							<!-- <p class="card-text">Click to see more Interior styling Products</p> -->
							<a href="#" class="btn rounded-pill ms-3 m-auto mt-2" id="cate-btn"
								style="margin-left: 40px;">See
								More</a>
						</div>
						<img src="css/Images/Thumb/Electronics.png" class="card-img-top" alt="..." style="width: 50%">
					</div>
				</div>
				<div class="col-lg-4 col-md-6 ">
					<div class="card mt-5">
						<div class="card-body p-auto">
							<h5 class="card-title mt-5 m-auto">Perfume</h5>
							<!-- <p class="card-text">Click to see more Interior styling Products</p> -->
							<a href="#" class="btn rounded-pill ms-3 m-auto mt-2" id="cate-btn"
								style="margin-left: 40px;">See
								More</a>
						</div>
						<img src="css/Images/Thumb/perfume.png" class="card-img-top" alt="..." style="width: 50%">
					</div>
				</div>

				<div class="col-lg-4 col-md-6 ">
					<div class="card mt-5">
						<div class="card-body p-auto">
							<h5 class="card-title mt-5 m-auto">Care Care</h5>
							<!-- <p class="card-text">Click to see more Interior styling Products</p> -->
							<a href="#" class="btn rounded-pill ms-3 m-auto mt-2" id="cate-btn"
								style="margin-left: 40px;">See
								More</a>
						</div>
						<img src="css/Images/Thumb/care.png" class="card-img-top" alt="..." style="width: 50%">
					</div>
				</div>

				<div class="col-lg-4 col-md-6 ">
					<div class="card mt-5">
						<div class="card-body p-auto">
							<h5 class="card-title mt-5 m-auto">Engine Parts</h5>
							<!-- <p class="card-text">Click to see more Interior styling Products</p> -->
							<a href="#" class="btn rounded-pill ms-3 m-auto mt-2" id="cate-btn"
								style="margin-left: 40px;">See
								More</a>
						</div>
						<img src="css/Images/Thumb/engine.png" class="card-img-top" alt="..." style="width: 50%">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Products -->
	<section class="products">
		<div class="container">
			<div class="row my-5">
				<h1 class="text-center">Featured Products</h1>
				<p class="fw-light w-75 mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto animi
					voluptatum debitis saepe fugiat aspernatur pariatur quos?</p>
			</div>
			<div class="row g-4 my-5 mx-auto owl-carousel owl-theme">
				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Arm Rest</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>
				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Pedal Kit</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Exterior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Projector Fog
							Lamps</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- poster-2 -->
	<section id="poster-2" class="p-3">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md" id="pos-2">
					<img src="css/Images/carback.jpg" class="img-fluid rounded-5" alt="" />
				</div>
				<div class="col-md p-5">
					<h2>With MotoVibezz You Can Easily Buy Car's Spare Parts Online.</h2>
					<p>
						We offer the best rates for car spare parts and provide a complete range of spare parts. Along
						with spare
						parts we have an exclusive range of car accessories. If you are looking for car accessories
						online then we
						are the one-stop shop for you. All the spare parts go under quality tests so that our end user
						gets the best
						parts online.
					</p>
					<div class="checkbox row pt-2">
						<div class="ellipse">
							<i class="fa-solid fa-check"></i>
						</div>
						<h5 class="col ps-2 pt-1" style="font-weight: 600;">Cash on Delivery</h5>
					</div>
					<div class="checkbox row pt-2">
						<div class="ellipse">
							<i class="fa-solid fa-check"></i>
						</div>
						<h5 class="col ps-2 pt-1" style="font-weight: 600;">Cash on Delivery</h5>
					</div>
					<div class="checkbox row pt-2 pb-3">
						<div class="ellipse">
							<i class="fa-solid fa-check"></i>
						</div>
						<h5 class="col ps-2 pt-1" style="font-weight: 600;">Cash on Delivery</h5>
					</div>
					<a href="#" class="btn bg-dark text-bg-dark rounded-pill p-3" style="width: 10rem;">
						<i class="bi bi-chevron-right"></i> Shop Now
					</a>
				</div>

			</div>
		</div>
	</section>

	<!-- New-Products -->
	<section class="new-products">
		<div class="container">
			<div class="row my-5">
				<h1 class="text-center">New Arrivals</h1>
				<!-- <p class="fw-light w-75 mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto animi
          voluptatum debitis saepe fugiat aspernatur pariatur quos?</p> -->
			</div>
			<div class="row g-4 my-5 mx-auto owl-carousel owl-theme">
				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Arm Rest</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>
				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Pedal Kit</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Exterior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Projector Fog
							Lamps</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>

				<div class="col product-item mx-auto">
					<div class="product-img">
						<img src="css/Images/Products/Gearknobs.jpg" alt="" class="img-fluid d-block mx-auto">
						<span class="heart-icon"><i class="fa-solid fa-heart"></i></span>
						<div class="row btns w-100 mx-auto text-center">
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-cart-plus"></i>
							</button>
							<button type="button" class="col-6 py-2">
								<i class="fa-solid fa-binoculars"></i>
							</button>
						</div>
					</div>
					<div class="product-info p-3">
						<span class="product-type">Interior Styling</span>
						<a href="" class="d-block text-dark text-decoration-none py-2 product-name">Gearknobs-
							Transperent</a>
						<span class="product-price">
							$100.00
						</span>
						<div class="rating d-flex mt-1">
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span><i class="fa-solid fa-star"></i></span>
							<span>(25 reviews)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Subscribe -->
	<section id="poster-2" class="sub-bac">
		<div class="container sub-image">
			<img src="css/Images/Sub-background.png" alt="" class="img-fluid">
			<div class="centered">
				<h3>MotoVibezz</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, tenetur!</p>
			</div>
		</div>
		<div class="container">
			<div class="row sub-text">
				<div class="col">
					<h3 class="">Subscribe to get attractive<br>offers on our products</h3>
				</div>
				<div class="col">
					<input class="form-control" type="email" placeholder="E.g. youremail@mail.com" aria-label="email">
					<button class="btn" type="submit">Subscribe</button>
				</div>
			</div>
		</div>
	</section>

	<section id="footer" class="bg-dark p-4">
		<div class="container">
			<div class="row ps-5">
				<div class="col-4" id="add">
					<h4 class="text-bg-dark">CONTACT INFORMATION</h4>
					<div class="address">
						<h6>Address: </h6>
						<p>MotoVibezz, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, illo?Lorem,
							ipsum.</p>
					</div>
					<div class="phone">
						<h6>Phone: </h6>
						<p>+91 00000 00000</p>
					</div>
					<div class="email">
						<h6>Email: </h6>
						<p>info@MotoVibezzz.com</p>
					</div>
					<div class="work">
						<h6>Working Days/Hours: </h6>
						<p>Monday - Saturday 11.30am - 6.30pm</p>
					</div>
				</div>
				<div class="col-5" id="about">
					<h4 class="text-bg-dark">ABOUT US</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptatum enim quas ut,
						laudantium aut sint vel tenetur voluptatem ipsam assumenda, dolorum, saepe est velit harum
						magnam ipsum dolorem error!</p>
				</div>
				<div class="col-3" id="cus-service">
					<h4 class="text-bg-dark">CUSTOMER SERVICE</h4>
					<p><a href="">Contact</a></p>
					<p><a href="">Privacy Policy</a></p>
					<p><a href="">Return and Refund</a></p>
					<p><a href="">Shipping and Delivery</a></p>
					<p><a href="">Terms & Conditions</a></p>
					<p><a href="">My Account</a></p>
					<p><a href="">About us</a></p>
					<p><a href="">Advanced Search</a></p>
				</div>
			</div>
			<div class="container">
				<hr class="text-bg-dark">
				<p class="float-end">
					<a href="#">Back to top</a>
				</p>
				<p class="mb-1" id="copyright">&copy; MotoVibezz. All Rights Reserved. Created by Sivakumar Murugan</p>
				<!-- <p class="mb-0" id="copyright inactive">Created by Sivakumar Murugan</p> -->
			</div>

	</section>




	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
	</script>
	<script src="owl_carousel/owl.carousel.js"></script>
	<script src="script.js"></script>
</body>

</html>