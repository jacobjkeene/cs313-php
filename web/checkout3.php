<?php
	session_start();
?>
<html>
	<head>
		<title>Week 3 Checkout</title>
	</head>
	<body>
		<h1>Checkout</h1>
		<form method="POST" action="checkout3.php">
			<p>Please fill out your address</p>
			<label for="street">Street</label>
			<input type="text" placeholder="Street" id="street" name="street">
			<label for="city">City</label>
			<input type="text" placeholder="City" id="city" name="city">
			<label for="state">State</label>
			<input type="text" placeholder="State" id="state" name="state">
			<label for="zip">ZIP</label>
			<input type="text" placeholder="ZIP" id="zip" name="zip">
			<br />
			<input type="submit" value="Add address">
		</form>
		<?php
		$_SESSION["street"] = $_POST["street"];
		$_SESSION["city"] = $_POST["city"];
		$_SESSION["state"] = $_POST["state"];
		$_SESSION["zip"] = $_POST["zip"];
		?>
		<a href="shop3.php">Back to Shopping Cart</a>
		<a href="confirm3.php">Continue to Confirmation Page</a>
	</body>
</html>