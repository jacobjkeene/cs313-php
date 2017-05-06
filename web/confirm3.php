<?php
session_start();
$street = htmlspecialchars($_SESSION["street"]);
$city = htmlspecialchars($_SESSION["city"]);
$state = htmlspecialchars($_SESSION["state"]);
$zip = htmlspecialchars($_SESSION["zip"]);
$cart = $_POST["cart"];
?>
<html>
	<head>
		<title>Week 3 Confirmation</title>
	</head>
	<body>
		<h1>Confirmation Page</h1>
		<p>Your Shipping Address: <?=$street ?>, <?=$city ?>, <?=$state ?> ?=$zip ?></p>
		<p>Items purchased:</p>
		<ul>
		<?
			foreach ($_SESSION["cart"] as $cart)
			{
				$cart_clean = htmlspecialchars($cart);
				echo "<li><p>$cart_clean</p></li>";
			}
		?>
		</ul>
		<a href="checkout3.php">Back to Checkout</a>
	</body>
</html>