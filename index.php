<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Le Xuan Nhat, Dang Nam Khanh, Duong Quang Thanh">
	<meta name="keyword" content="index">
	<meta name="description" content="Assignment 2">

	<title>Index</title>

	<meta name="introduction" content="Find the perfect PC for your needs.">

	<link rel="stylesheet" href="styles/style.css">
	<link href="styles/styletest.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css">

</head>

<body class="index">

	<?php include 'includes/header.inc' ?>

	<main class="index">

		<div class="wellcometitle">

			<div class="realtitle">
				<h1>This is your PC world</h1>
				<h2>Find the perfect PC that you need.</h2>
				<br>
				<p><a href="#hello" id="introbutton">Explore</a></p>
				<p><a class="credit" href="https://youtu.be/s0zlFVg0UyI">Youtube Video</a></p>
			</div>

		</div>

		<div class="firstpage-container" id="firstpage-container">

			<div class="ui-card" id="hello">
				<img src="images/gear1.jpg" alt="indexcard">
				<div class="description">
					<h3>Products</h3>
					<p>Take a look at our catalog and make a purchase.</p>
					<a href="product.php">Buy now</a>
					<br>
					<br>
					<a class="credit" href="https://unsplash.com/photos/_R3Eg6bsB_A">Image source</a>
				</div>
			</div>

			<div class="ui-card">
				<img src="images/gear2.jpg" alt="productcard">
				<div class="description">
					<h3>Enhancements</h3>
					<p>Take a look at how we create advanced features.</p>
					<a href="enhancements2.php">Explore how</a>
					<br>
					<br>
					<a class="credit" href="https://unsplash.com/photos/1tFxIhtSxxM">Image source</a>
				</div>
			</div>

			<div class="ui-card">
				<img src="images/gear3.jpg" alt="enquirycard">
				<div class="description">
					<h3>About</h3>
					<p>Information about the founders.</p>
					<a href="about.php">Go to page</a>
					<br>
					<br>
					<a class="credit" href="https://unsplash.com/photos/6gzGtB5SnXs">Image source</a>
				</div>
			</div>

		</div>
	</main>
	
	<?php include 'includes/footer.inc' ?>

	<a href="#" class="top"></a>

</body>

</html>
