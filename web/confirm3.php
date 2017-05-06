<?php
session.start();
$address = htmlspecialchars($_POST["address"]);
$cart = $_POST["cart"];
?>
<html>
	<head>
		<title>Week 3 Confirmation</title>
	</head>
	<body>
		<h1>Confirmation Page</h1>
		<p>Address: <?=$address ?></p>
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