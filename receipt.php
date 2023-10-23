<?php

    session_start();
    if (!isset($_SESSION['receipt']) || !isset($_SESSION['values'])) {
		header('Location: ./index.php'); // Return to index page to prevent directly access from url
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Le Xuan Nhat, Dang Nam Khanh, Duong Quang Thanh">
    <meta name="keyword" content="receipt">
    <meta name="description" content="Assignment 2">

	<title>Receipt</title>

	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Ubuntu:wght@300;400&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css">
</head>
<body>
	<?php include 'includes/header.inc'; ?>	
    <!-- retrieving the values in the previous session to print the receipt -->
    <div class="receipt-container">
        <div class="receipt-header">
            <h1>Receipt</h1>
            <p>Order ID: <?=$_SESSION['receipt']['order_id']?></p>
            <p>Date: <?=$_SESSION['receipt']['order_time']?></p>
        </div>
        <div class="receipt-body">
            <div class="receipt-info">
                <div class="infor_leftside">
                        <p>Customer Name: <strong> <?=$_SESSION['values']['firstname']?> <?=$_SESSION['values']['lastname']?> </strong> </p>
                        <p>Email: <strong> <?=$_SESSION['values']['email']?></strong> </p>
                        <p>Address: <strong> <?=$_SESSION['values']['address']?> </strong> </p>
                        <p>State: <strong> <?=$_SESSION['values']['state']?> </strong></p>
                        <p>Postcode: <strong> <?=$_SESSION['values']['postcode']?> </strong></p>
                        <p>Phone: <strong> <?=$_SESSION['values']['phone']?> </strong> </p>
                        <p>Preferred Contact:<strong> <?=$_SESSION['values']['contact']?> </strong></p>
                        <br>
                </div>
                <div class="infor_rightside">
                        <p>Your credit card detail:</p>
                        <p>Card type: <strong><?=$_SESSION['values']['cardtype']?></strong></p>
                        <p>Card name: <strong><?=$_SESSION['values']['cardname']?></strong></p>
                        <p>Card number: <strong> <?=$_SESSION['values']['cardnum']?></strong></p>
                        <p>Card expiry month: <strong><?=$_SESSION['values']['expmonth']?></strong></p>
                        <p>Card exipry year: <strong><?=$_SESSION['values']['expyear']?></strong></p>
                        <p>CVV: <strong><?=$_SESSION['values']['cardcvv']?></strong></p>
                </div>
            </div>
            <div class="receipt-items">
                <table>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PC: <?=$_SESSION['receipt']['pcname']?> </td>
                            <td>&#36; <?=$_SESSION['receipt']['pcprice']?> </td>
                        </tr>

                        <tr>
                            <td>Keyboard: <?=$_SESSION['receipt']['kbname']?></td>
                            <td>&#36; <?=$_SESSION['receipt']['kbprice']?> </td>
                        </tr>
                        <tr>
                            <td>Mouse: <?=$_SESSION['receipt']['mousename']?></td>
                            <td>&#36;<?=$_SESSION['receipt']['mouseprice']?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="receipt-total">
                    <p>Order status: <?=$_SESSION['receipt']['order_status']?></p>
                    <p>Quantity: <?=$_SESSION['values']['pc_numbers']?></p>
                    <p>Total: &#36;<?=$_SESSION['receipt']['totalprice']?></p>
                </div>
            </div>
        </div>
        <div class="receipt-footer">
            <p>Thank you for your purchase!</p>
        </div>

        <a href="product.php">Back to Product Page</a>
    </div>

	<?php include 'includes/footer.inc' ?>

</body>
</html>
