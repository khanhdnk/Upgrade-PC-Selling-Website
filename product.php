<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="author" content="Le Xuan Nhat, Dang Nam Khanh, Duong Quang Thanh">
    <meta name="keyword" content="product">
    <meta name="description" content="Assignment 2">

	<title>Product</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css">
	<link rel="stylesheet" href="styles/style.css">
</head>

<body>

	<?php include 'includes/header.inc' ?>

	<main class="product">

		<section class="trending">

			<h2>Trending Bundle</h2>

			<p class="des">&#40;Contact us for more info&#41;</p>

			<a class="credit" href="https://hoanglongcomputer.vn/core-i3-10105f-ram-8g-rtx-2060-6g-cu-man-22in">Image source 1</a>
			<a class="credit" href="https://www.ebay.ca/itm/254738789627">Image source 2</a>

			<ul>

				<li>
					<a id="trending1" href="#">
						<img src="images/pc1.png" alt="PC">
						<h4>Ryzen 5 5600 | 16GB RAM | RX 6700 XT</h4>
						<h4>&#36;999.99</h4>
					</a>
				</li>

				<li>
					<a id="trending2" href="#">
						<img src="images/pc2.png" alt="PC">
						<h4>CORE I 7 12700k | 32GB RAM | RTX 3080</h4>
						<h4>&#36;1,999.99</h4>
					</a>
				</li>

			</ul>

		</section>

		<section class="list">

			<div class="select">
				<h4>Select your budget</h4>
				<ul>
					<li><a href="#500">Above <br>&#36;500</a></li>
					<li><a href="#1000">Above <br>&#36;1000</a></li>
					<li><a href="#1500">Above <br>&#36;1500</a></li>
				</ul>
			</div>

			<aside>

				<h4>Top selling accessories</h4>

				<ol>
					<li><a href="#mkb">G Pro Wireless</a></li>
					<li><a href="#mkb">Rival 3</a></li>
					<li><a href="#mkb">ROG Azoth</a></li>
				</ol>
			</aside>

		</section>

		<div>

			<section id="500">

				<h2>Budget PCs</h2>

				<p class="des">&#40;Hover on PC to buy&#41;</p>

				<a class="credit" href="https://unsplash.com/photos/KV2vFOYItcY">Image 1</a>
				<a class="credit" href="https://unsplash.com/photos/XfSk_BMLj0A">Image 2</a>
				<a class="credit" href="https://unsplash.com/photos/gRQXs2KjrAo">Image 3</a>

				<div class="item-container">

					<div class="item-box product-box">

						<img src="images/pc-sell1.jpg" alt="Item image 1">
						<h2>Entry Point</h2>
						<h2>&#36;539</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>CPU</th>
									<td>Intel Core i3-10100F</td>
								</tr>
								<tr>
									<th>GPU</th>
									<td>Nvidia GTX 1050 Ti</td>
								</tr>
								<tr>
									<th>Main</th>
									<td>Gigabyte B460M DS3H</td>
								</tr>
								<tr>
									<th>PSU</th>
									<td>EVGA 500 W1</td>
								</tr>
								<tr>
									<th>Case</th>
									<td>Cooler Master MasterBox Q300L</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td>Team Elite 8GB DDR4</td>
								</tr>
								<tr>
									<th>SSD</th>
									<td>Kingston A400 240GB</td>
								</tr>
								<tr>
									<th>HDD</th>
									<td>WD Blue 1TB</td>
								</tr>
								<tr>
									<th>Fan</th>
									<td>Cooler Master SickleFlow 120</td>
								</tr>
							</table>
							<a href="payment.php?product_id=1">Buy</a>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/pc-sell2.jpg" alt="Item image 2">
						<h2>The Upgrade</h2>
						<h2>&#36;749</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>CPU</th>
									<td>AMD Ryzen 5 3600</td>
								</tr>
								<tr>
									<th>GPU</th>
									<td>Nvidia GTX 1660</td>
								</tr>
								<tr>
									<th>Main</th>
									<td>MSI B450M Pro-VDH Max</td>
								</tr>
								<tr>
									<th>PSU</th>
									<td>EVGA 600 W1</td>
								</tr>
								<tr>
									<th>Case</th>
									<td>Cooler Master MasterBox NR400</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td>G.Skill Ripjaws V 16GB DDR4</td>
								</tr>
								<tr>
									<th>SSD</th>
									<td>Crucial MX500 500GB</td>
								</tr>
								<tr>
									<th>HDD</th>
									<td>WD Blue 1TB</td>
								</tr>
								<tr>
									<th>Fan</th>
									<td>Cooler Master SickleFlow 120</td>
								</tr>
							</table>
							<a href="payment.php?product_id=2">Buy</a>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/pc-sell3.jpg" alt="Item image 3">
						<h2>Stretching Budget</h2>
						<h2>&#36;989</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>CPU</th>
									<td>AMD Ryzen 7 3700X</td>
								</tr>
								<tr>
									<th>GPU</th>
									<td>Nvidia RTX 2060</td>
								</tr>
								<tr>
									<th>Main</th>
									<td>ASUS TUF B450M-PRO Gaming</td>
								</tr>
								<tr>
									<th>PSU</th>
									<td>EVGA 700 BR</td>
								</tr>
								<tr>
									<th>Case</th>
									<td>Cooler Master MasterCase H500</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td>Corsair Vengeance LPX 32GB DDR4</td>
								</tr>
								<tr>
									<th>SSD</th>
									<td>Samsung 970 EVO Plus 500GB</td>
								</tr>
								<tr>
									<th>HDD</th>
									<td>Seagate Barracuda 2TB</td>
								</tr>
								<tr>
									<th>Fan</th>
									<td>Noctua NF-P12 redux-1700 PWM</td>
								</tr>
							</table>
							<a href="payment.php?product_id=3">Buy</a>
						</div>

					</div>

				</div>

			</section>

			<section id="1000">

				<h2>Mid-range PCs</h2>

				<p class="des">&#40;Hover on PC to buy&#41;</p>

				<a class="credit" href="https://unsplash.com/photos/8yesL5ZPjIU">Image 1</a>
				<a class="credit" href="https://unsplash.com/photos/qZ2oaRBj0Ic">Image 2</a>
				<a class="credit" href="https://unsplash.com/photos/yiYrazZ2wN4">Image 3</a>

				<div class="item-container">

					<div class="item-box product-box">

						<img src="images/pc-sell4.jpg" alt="Item image 1">
						<h2>Clean and Minimal</h2>
						<h2>&#36;1050</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>CPU</th>
									<td>Intel Core i5-11600K</td>
								</tr>
								<tr>
									<th>GPU</th>
									<td>Nvidia RTX 3060</td>
								</tr>
								<tr>
									<th>Main</th>
									<td>Gigabyte Z590 UD AC</td>
								</tr>
								<tr>
									<th>PSU</th>
									<td>Corsair RM750x</td>
								</tr>
								<tr>
									<th>Case</th>
									<td>Fractal Design Meshify C</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td>Corsair Vengeance LPX 32GB DDR4</td>
								</tr>
								<tr>
									<th>SSD</th>
									<td>Western Digital Black SN750 1TB</td>
								</tr>
								<tr>
									<th>HDD</th>
									<td>Seagate Barracuda 2TB</td>
								</tr>
								<tr>
									<th>Fan</th>
									<td>Noctua NH-U12S chromax.black</td>
								</tr>
							</table>
							<a href="payment.php?product_id=4">Buy</a>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/pc-sell5.jpg" alt="Item image 2">
						<h2>Compact Package</h2>
						<h2>&#36;1250</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>CPU</th>
									<td>AMD Ryzen 7 5800X</td>
								</tr>
								<tr>
									<th>GPU</th>
									<td>Nvidia RTX 3070</td>
								</tr>
								<tr>
									<th>Main</th>
									<td>ASUS TUF Gaming X570-PRO</td>
								</tr>
								<tr>
									<th>PSU</th>
									<td>Corsair RM750x</td>
								</tr>
								<tr>
									<th>Case</th>
									<td>Lian Li PC-O11 Dynamic</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td>G.Skill Trident Z RGB 32GB DDR4</td>
								</tr>
								<tr>
									<th>SSD</th>
									<td>Samsung 970 EVO Plus 1TB</td>
								</tr>
								<tr>
									<th>HDD</th>
									<td>Seagate Barracuda 2TB</td>
								</tr>
								<tr>
									<th>Fan</th>
									<td>Noctua NF-S12B redux-1200 PWM</td>
								</tr>
							</table>
							<a href="payment.php?product_id=5">Buy</a>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/pc-sell6.jpg" alt="Item image 3">
						<h2>Big Leap</h2>
						<h2>&#36;1499</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>CPU</th>
									<td>Intel Core i7-11700K</td>
								</tr>
								<tr>
									<th>GPU</th>
									<td>Nvidia RTX 3080</td>
								</tr>
								<tr>
									<th>Main</th>
									<td>ASUS TUF Gaming Z590-PLUS</td>
								</tr>
								<tr>
									<th>PSU</th>
									<td>Corsair RM850x</td>
								</tr>
								<tr>
									<th>Case</th>
									<td>NZXT H510 Elite</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td>Corsair Vengeance RGB Pro 32GB DDR4</td>
								</tr>
								<tr>
									<th>SSD</th>
									<td>Samsung 970 EVO Plus 1TB</td>
								</tr>
								<tr>
									<th>HDD</th>
									<td>Seagate Barracuda 2TB</td>
								</tr>
								<tr>
									<th>Fan</th>
									<td>Noctua NH-D15 chromax.black</td>
								</tr>
							</table>
							<a href="payment.php?product_id=6">Buy</a>
						</div>

					</div>

				</div>

			</section>

			<section id="1500">

				<h2>High-end PCs</h2>

				<p class="des">&#40;Hover on PC to buy&#41;</p>

				<a class="credit" href="https://unsplash.com/photos/YYMVV-qMD6Q">Image 1</a>
				<a class="credit" href="https://unsplash.com/photos/cR0bLCSpGfw">Image 2</a>
				<a class="credit" href="https://unsplash.com/photos/EOAKUQcsFIU">Image 3</a>

				<div class="item-container">

					<div class="item-box product-box">

						<img src="images/pc-sell7.jpg" alt="Item image 1">
						<h2>Serious Business</h2>
						<h2>&#36;1799</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>CPU</th>
									<td>AMD Ryzen 9 5900X</td>
								</tr>
								<tr>
									<th>GPU</th>
									<td>Nvidia RTX 3080 Ti</td>
								</tr>
								<tr>
									<th>Main</th>
									<td>Gigabyte X570 AORUS Master</td>
								</tr>
								<tr>
									<th>PSU</th>
									<td>Corsair RM850x</td>
								</tr>
								<tr>
									<th>Case</th>
									<td>Lian Li PC-O11 Dynamic XL ROG Certified</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td>G.Skill Trident Z RGB 32GB DDR4</td>
								</tr>
								<tr>
									<th>SSD</th>
									<td>Western Digital Black SN850 1TB</td>
								</tr>
								<tr>
									<th>HDD</th>
									<td>Seagate Barracuda 2TB</td>
								</tr>
								<tr>
									<th>Fan</th>
									<td>Noctua NH-D15 chromax.black</td>
								</tr>
							</table>
							<a href="payment.php?product_id=7">Buy</a>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/pc-sell8.jpg" alt="Item image 2">
						<h2>Premium PC</h2>
						<h2>&#36;2099</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>CPU</th>
									<td>AMD Ryzen 7 5800X</td>
								</tr>
								<tr>
									<th>GPU</th>
									<td>Nvidia RTX 3090</td>
								</tr>
								<tr>
									<th>Main</th>
									<td>ASUS ROG Strix B550-E Gaming</td>
								</tr>
								<tr>
									<th>PSU</th>
									<td>EVGA SuperNOVA 850 G5</td>
								</tr>
								<tr>
									<th>Case</th>
									<td>Corsair 4000D Airflow</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td>G.Skill Ripjaws V 32GB DDR4</td>
								</tr>
								<tr>
									<th>SSD</th>
									<td>WD Black SN750 NVMe 1TB</td>
								</tr>
								<tr>
									<th>HDD</th>
									<td>Seagate Barracuda 2TB</td>
								</tr>
								<tr>
									<th>Fan</th>
									<td>Cooler Master Hyper 212 Black Edition</td>
								</tr>
							</table>
							<a href="payment.php?product_id=8">Buy</a>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/pc-sell9.jpg" alt="Item image 3">
						<h2>The Enthusiast</h2>
						<h2>&#36;2450</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>CPU</th>
									<td>Intel Core i9-12900k</td>
								</tr>
								<tr>
									<th>GPU</th>
									<td>Nvidia RTX 4080</td>
								</tr>
								<tr>
									<th>Main</th>
									<td>ASUS ROG Crosshair VIII Dark Hero</td>
								</tr>
								<tr>
									<th>PSU</th>
									<td>Corsair AX1000i</td>
								</tr>
								<tr>
									<th>Case</th>
									<td>Lian Li PC-O11 Dynamic XL ROG Certified</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td>G.Skill Trident Z RGB 64GB DDR4</td>
								</tr>
								<tr>
									<th>SSD</th>
									<td>Samsung 980 PRO 2TB</td>
								</tr>
								<tr>
									<th>HDD</th>
									<td>Seagate IronWolf Pro 4TB</td>
								</tr>
								<tr>
									<th>Fan</th>
									<td>Noctua NH-D15 chromax.black</td>
								</tr>
							</table>
							<a href="payment.php?product_id=9">Buy</a>
						</div>

					</div>

				</div>

			</section>

			<section id="mkb">

				<h2>Mouse &#38; Keyboard</h2>

				<p class="des">&#40;Sold together with PCs&#41;</p>

				<div class="item-container">

					<div class="item-box product-box">

						<img src="images/mouse1.png" alt="Item image 1">
						<h2>Logitech G Pro Wireless</h2>
						<h2>&#36;105</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>Connectivity</th>
									<td>Wireless, USB Receiver</td>
								</tr>
								<tr>
									<th>DPI Resolution</th>
									<td>100 - 16,000 DPI</td>
								</tr>
								<tr>
									<th>Dimensions</th>
									<td>125 x 63.5 x 40 mm</td>
								</tr>
								<tr>
									<th>Switches' Lifespan</th>
									<td>50 million clicks</td>
								</tr>
								<tr>
									<th>Ergonomy</th>
									<td>Ambidextrous design with removable side buttons</td>
								</tr>
								<tr>
									<th>Weight</th>
									<td>80g</td>
								</tr>
							</table>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/mouse2.png" alt="Item image 2">
						<h2>Steelseries Rival 3</h2>
						<h2>&#36;35</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>Connectivity</th>
									<td>Wired, USB</td>
								</tr>
								<tr>
									<th>DPI Resolution</th>
									<td>100 - 8,500 DPI</td>
								</tr>
								<tr>
									<th>Dimensions</th>
									<td>120.6 x 67 x 37 mm</td>
								</tr>
								<tr>
									<th>Switches' Lifespan</th>
									<td>60 million clicks</td>
								</tr>
								<tr>
									<th>Ergonomy</th>
									<td>Right-handed ergonomic design</td>
								</tr>
								<tr>
									<th>Weight</th>
									<td>77g</td>
								</tr>
							</table>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/mouse3.png" alt="Item image 3">
						<h2>Razer Deathadder v3 Pro</h2>
						<h2>&#36;139</h2>

						<div class="extra-content">
							<table>
								<tr>
									<th>Connectivity</th>
									<td>Wireless, USB</td>
								</tr>
								<tr>
									<th>DPI Resolution</th>
									<td>100 - 20,000 DPI</td>
								</tr>
								<tr>
									<th>Dimensions</th>
									<td>127 x 61.7 x 42.7 mm</td>
								</tr>
								<tr>
									<th>Switches' Lifespan</th>
									<td>70 million clicks</td>
								</tr>
								<tr>
									<th>Ergonomy</th>
									<td>Right-handed ergonomic design with textured rubber side grips</td>
								</tr>
								<tr>
									<th>Weight</th>
									<td>88g</td>
								</tr>
							</table>
						</div>

					</div>

				</div>

				<div class="item-container">

					<div class="item-box product-box">

						<img src="images/kb1.jpg" alt="Item image 1">
						<h2>Razer Blackwidow v4 Pro</h2>
						<h2>&#36;219</h2>

						<div class="extra-content">
							<p>
								<strong>Weight:</strong> 1.81 kg | <strong>Connectivity:</strong> Wireless or wired with
								USB-C | <strong> Switch Type: </strong> Razer Green, Razer Yellow, or Razer Orange |
								<strong> Layout: </strong> Full-size with numeric keypad | <strong> Dimensions:
								</strong> 463 x 174 x 36 mm
							</p>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/kb3.jpg" alt="Item image 2">
						<h2>Steelseries Apex Pro TKL</h2>
						<h2>&#36;320</h2>

						<div class="extra-content">
							<p>
								<strong>Weight:</strong> 0.78 kg | <strong>Connectivity:</strong> Wireless with USB-C or
								Bluetooth | <strong>Switch Type:</strong> OmniPoint adjustable mechanical switches |
								<strong>Layout:</strong> Tenkeyless with media keys and OLED display |
								<strong>Dimensions:</strong> 355.44 x 139.26 x 40.44 mm
							</p>
						</div>

					</div>

					<div class="item-box product-box">

						<img src="images/kb2.jpg" alt="Item image 3">
						<h2>Asus ROG Azoth</h2>
						<h2>&#36;245</h2>

						<div class="extra-content">
							<p>
								<strong>Weight:</strong> 1.08 kg | <strong>Connectivity:</strong> Wired with USB-C or
								USB-A | <strong>Switch Type:</strong> ROG RX Red Optical Mechanical Switches |
								<strong>Layout:</strong> Full-size with numeric keypad and media keys |
								<strong>Dimensions:</strong> 458 x 153 x 31.5 mm
							</p>
						</div>

					</div>

				</div>

				<a class="credit" href="https://www.amazon.in/Logitech-Wireless-Lightweight-Programmable-POWERPLAY-Compatible/dp/B07M5DK18R">Mouse 1</a>
				<a class="credit" href="https://gameroom.lt/en/mouses/products/steelseries-rival-3-ergonomic-mouse-gaming-mouse-3425">Mouse 2</a>
				<a class="credit" href="https://gameroom.lt/en/mouses/products/razer-deathadder-v3-pro-wireless-gaming-mouse-30000-dpi-11084">Mouse 3</a>
				<a class="credit" href="https://www.razer.com/gaming-keyboards/razer-blackwidow-v4-pro/RZ03-04680200-R3U1">Keyboard 1</a>
				<a class="credit" href="https://gearshop.vn/review-asus-rog-azoth-mot-tam-cao-moi-cua-ban-phim-gaming">Keyboard 2</a>
				<a class="credit" href="https://steelseries.com/gaming-keyboards/apex-pro-tkl-wireless-2023">Keyboard 3</a>

			</section>

		</div>

		<section id="special">

			<h2>For custom PC orders:</h2>

			<table>
				<tr>
					<th>Price</th>
					<td>Discount</td>
				</tr>

				<tr>
					<th>&gt; &#36;500</th>
					<td>&#36;25</td>
				</tr>

				<tr>
					<th>&gt; &#36;1000</th>
					<td>&#36;100</td>
				</tr>

				<tr>
					<th>&gt; &#36;2000</th>
					<td>&#36;200</td>
				</tr>
			</table>

		</section>

		<article id="war">

			<h3>Warranty Policy</h3>

			<p>At <strong>PC Señor</strong>, we stand behind the quality of our products and are committed to
				providing
				our customers with the best possible service. We offer a limited warranty for our products to ensure
				that they
				are free from defects in materials and workmanship for a period of one year from the date of purchase.
				This warranty applies to all new products purchased from our website.</p>

			<h4>Warranty Coverage</h4>

			<p>If a product is found to be defective within the warranty period, we will repair or replace it free of
				charge.
				This warranty does not cover damage resulting from misuse, abuse, or normal wear and tear. It also does
				not
				cover damage caused by accidents, unauthorized repairs or modifications, or damage caused by natural
				disasters.
			</p>

			<h4>How to Make a Warranty Claim</h4>

			<p>To make a warranty claim, customers must contact our customer service team and provide proof of purchase.
				We
				will provide instructions on how to return the product for repair or replacement. Customers are
				responsible for
				the cost of shipping the product to us, and we will cover the cost of shipping it back to them.</p>

			<h4>Policy Changes</h4>

			<p>Please note that our warranty policy is subject to change without notice. This policy does not affect any
				statutory rights that you may have under applicable laws.</p>

			<h4>Contact Us</h4>

			<p>If you have any questions or concerns about our warranty policy, please don't hesitate to contact our
				customer
				service team for assistance.</p>

			<ul>
				<li>Phone: 1900-1069</li>
				<li>Email: customerservice@pcsenor.com</li>
				<li>Address: 69/420 Tran Duy Hung Street, Trung Hoa Ward, Cau Giay District, Hanoi, Viet Nam</li>
			</ul>

		</article>
	</main>

	<?php include 'includes/footer.inc' ?>

	<a href="#" class="top"></a>

</body>

</html>