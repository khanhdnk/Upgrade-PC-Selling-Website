<?php
	// Connect to database and get clicked pc's details
	require_once("settings.php");
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

	$pc_id = $_GET['product_id'];

	if (!isset($pc_id) && $pc_id == "") {
		header('Location: ./product.php');
	}

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$result = mysqli_query($conn, "SELECT * FROM pcdb WHERE pc = $pc_id");
	$row = mysqli_fetch_assoc($result);
	$p_name = $row['pcname'];
	$p_price = $row['pcprice'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Le Xuan Nhat, Dang Nam Khanh, Duong Quang Thanh">
	<meta name="keyword" content="payment">
	<meta name="description" content="Assignment 2">

	<title>Product Payment Form</title>

	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css">
</head>

<body>

	<?php include 'includes/header.inc' ?>

	<main class="enq">

		<h1>PRODUCT PAYMENT FORM</h1>
		<?php
			session_start();
			$_SESSION['pc_id'] = $_GET['product_id']; // Save global variable to query data from db			
		?>
		<!-- Submit payment form, direct to process_order-->
		<form action="process_order.php" method="post" novalidate>
			<div class="form_container">
				<!-- Buyer information -->
				<div class="part">
					<fieldset>
						<legend>Customer Information</legend>
						<label for="firstname">First Name: </label>
						<input type="text" id="firstname" name="firstname" placeholder="max 25 characters, alphabetical">
						<br>

						<label for="lastname">Last Name:</label>
						<input type="text" id="lastname" name="lastname" placeholder="max 25 characters, alphabetical">
						<br>

						<label for="email">Email:</label>
						<input type="email" id="email" name="email" >
						<br>

						<label for="address">Street Address:</label>
						<input type="text" id="address" name="address" placeholder="maximum 40 characters">
						<br>

						<label for="state">State:</label>
						<select id="state" name="state"	>
							<option value="">--Please select an option--</option>
							<option value="VIC">VIC</option>
							<option value="NSW">NSW</option>
							<option value="QLD">QLD</option>
							<option value="NT">NT</option>
							<option value="WA">WA</option>
							<option value="SA">SA</option>
							<option value="TAS">TAS</option>
							<option value="ACT">ACT</option>
						</select>
						<br>

						<label for="postcode">Postcode:</label>
						<input type="text" id="postcode" name="postcode" placeholder="exactly 4 digits"	>
						<br>

						<label for="phone">Phone:</label>
						<input type="text" id="phone" name="phone" placeholder="e.g. 0400123456"	>
						<br>

						<label>Preferred Contact:</label>
						<label><input type="radio" name="contact" value="email">Email</label>
						<label><input type="radio" name="contact" value="post">Post</label>
						<label><input type="radio" name="contact" value="phone">Phone</label>
						<br>
					</fieldset>
				</div>
				<div class="part">
					<!-- Bundle selection form -->
					<fieldset>
						<legend>Product</legend>
						<!-- get pc name and price from product id in url, then display it -->
						<p id="pcinfo">Your PC: <?php echo htmlentities($p_name)." &#40;&#36;".htmlentities($p_price)."&#41;"; ?> </p>
						<input type="text" name="pc_id" value="<?= $_GET['product_id'] ?>" hidden>

						<label for="mouse_selection">Select your mouse</label>
						<select name="mouse_selection" id="mouse_selection"	>
							<option value="">--- Please select your accessory ---</option>
							<option value="1">Logitech G Pro Wireless&#40;&#43;&#36;105&#41;</option>
							<option value="2">Steelseries Rival 3&#40;&#43;&#36;35&#41;</option>
							<option value="3">Razer Deathadder v3 Pro&#40;&#43;&#36;139&#41;</option>
						</select>

						<label for="keyboard_selection">Select your keyboard</label>
						<select name="keyboard_selection" id="keyboard_selection"	>
							<option value="">--- Please select your accessory ---</option>
							<option value="1">Razer Blackwidow v4 Pro&#40;&#43;&#36;219&#41;</option>
							<option value="2">Steelseries Apex Pro TKL&#40;&#43;&#36;320&#41;</option>
							<option value="3">Asus ROG Azoth&#40;&#43;&#36;245&#41;</option>
						</select>

						<label for="pc_numbers"	>Give us your desire for quantity:</label>
						<input type="number" name="pc_numbers" id="pc_numbers">
					</fieldset>
				</div>

				<div class="part">
					<!-- Credit card part -->
					<fieldset>
						<legend>Visa</legend>
						<label for="cardType">Card type</label>
						<select name="cardType" id="cardType">
							<option value="">---Please select your credit card---</option>
							<option value="visa">Visa</option>
							<option value="mastercard">Mastercard</option>
							<option value="americanExpress">American Express</option>
						</select>

						<label for="cardName">Name on Credit Card</label>
						<input type="text" name="cardName" id="cardName">

						<label for="cardNumber">Credit Card number</label>
						<input type="text" name="cardNumber" id="cardNumber">

						<label for="expmonth">Credit Card Expiry month</label>
						<input type="number" name="expmonth" id="expmonth">

						<label for="expyear">Credit Card Expiry year</label>
						<input type="number" name="expyear" id="expyear">

						<br>
						<br>
						<label for="cardCVV">Card Verification Value(CVV)</label>
						<input type="number" name="cardCVV" id="cardCVV">

						<br>
						<br>
						<input type="submit" value="Check Out">
						<br>
					</fieldset>
				</div>
			</div>
		</form>
	</main>

	<?php include 'includes/footer.inc' ?>

	<a href="#" class="top"></a>

</body>

</html>