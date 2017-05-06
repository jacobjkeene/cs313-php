<?php
$cart = $_POST["cart"];
?>
<html>
	<head>
		<title>Week 3 Shopping Cart</title>
	</head>
	<body>
		<h1>Shopping Cart</h1>
		<ul>
		<?
			foreach ($cart as $cart)
			{
				$cart_clean = htmlspecialchars($cart);
				echo "<li><p>$cart_clean</p></li>";
			}
		?>
		</ul>
		<br/>
		<a href="browse3.php">Back to Browse Items</a>
		<a href="checkout3.php">Continue to Checkout</a>
	</body>
</html>