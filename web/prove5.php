<?php
require("dbConnect.php");
$db = get_db();
?>

<!DOCTYPE html>
<html>
<body>
<h1>Welcome!</h1>

<form id="mainForm" action="insertAnimeTV.php" method="POST">

	<label for="newUser">New User</label>
	<input type="text" id="newUser" name="newUser"></input>
	<br /><br />

	<label for="newPass">Password</label>
	<input type="text" id="newPass" name="newPass"></input>
	<br /><br />

	<label for="newShow">Show</label>
	<input type="text" id="newShow" name="newShow"></input>
	<br /><br />

	<label for="txtRating">Rating:</label><br />
	<textarea id="txtRating" name="txtRating" rows="4" cols="50"></textarea>
	<br /><br />
<input type="submit" value="Add to Database" />
</form>

<p>Don't want to add new values? Click on the following link to return to AnimeTV Database</p>
<a href="displayAnimeTV.php">AnimeTV Database</a>

</body>
</html>