<?php
	session_start();
?>
<html>
	<head>
		<title>Week 3 Shopping Cart</title>
	</head>
	<body>
		<h1>Shopping Cart</h1>
		<ul>
		<?
			foreach ($_SESSION["cart"] as $cart)
			{
				$cart_clean = htmlspecialchars($cart);
				echo "<li><p>$cart_clean</p></li>";
			}
		?>
		</ul>
		<br/>
		<p>If your Shopping Cart doesn't look right, please go back to the browse page and try again.</p>
		<a href="browse3.php">Back to Browse Items</a>
		<a href="checkout3.php">Continue to Checkout</a>
	</body>
</html>