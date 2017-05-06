<html>
	<head>
		<title>Week 3 Browse Items</title>
	</head>
	<body>
		<h1>Browse Items</h1>
		<form method="POST" action="browse3.php" action="shop3.php">
			Please select any of the following items you wish to purchase. Simply check the box next to the item to add it to your shopping cart.<br />
			<input type="checkbox" name="cart[]" id="cart1" value="Laptop"><label for="cart1">Laptop</label><br />
			<input type="checkbox" name="cart[]" id="cart2" value="Desktop"><label for="cart2">Desktop</label><br />
			<input type="checkbox" name="cart[]" id="cart3" value="Wireless Mouse"><label for="cart3">Wireless Mouse</label><br />
			<input type="checkbox" name="cart[]" id="cart4" value="Wired Mouse"><label for="cart4">Wired Mouse</label><br />
			<input type="checkbox" name="cart[]" id="cart5" value="Mouse Pad"><label for="cart5">Mouse Pad</label><br />
			<input type="checkbox" name="cart[]" id="cart6" value="Keyboard"><label for="cart6">Keyboard</label><br />
			<input type="checkbox" name="cart[]" id="cart7" value="Speakers"><label for="cart7">Speakers</label><br />
			<br/>
			<input type="submit" value="Add Items">
		</form>
		<br/>
		<a href="shop3.php">Shopping Cart</a>
	</body>
</html>