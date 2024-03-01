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
	<?load_template('_navbarmid');?>
	<!-- navbar-category -->
	<?load_template('_navbarcat');?>
	<!-- Navbar-hidden-display -->
	<?load_template('_navbarhidden');?>
	<!-- poster -->
	<?load_template('_poster1');?>
	<!-- Category Box -->
	<?load_template('_category');?>

	<!-- Products -->
	<?load_template('_products');?>

	<!-- poster-2 -->
	<?load_template('_poster2');?>

	<!-- New-Products -->
	<?load_template('_newproducts');?>

	<!-- Subscribe -->
	<?load_template('_subscribe');?>

	<!-- footer -->
	<?load_template('_footer');?>




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