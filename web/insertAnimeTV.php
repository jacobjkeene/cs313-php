<?php

$newUser = $_POST['newUser'];
$newPass = $_POST['newPass'];
$newShow = $_POST['newShow'];
$txtRating = $_POST['txtRating'];

require("dbConnect.php");
$db = get_db();


try
{
	//insert into users DB
	$query = 'INSERT INTO users(user_name, password) VALUES(:newUser, :newPass)';
	$statement = $db->prepare($query);
	$statement->bindValue(':user_name', $newUser);
	$statement->bindValue(':password', $newPass);
	$statement->execute();

	//insert into shows DB
	$query = 'INSERT INTO shows(show_name) VALUES(:newShow)';
	$statement = $db->prepare($query);
	$statement->bindValue(':show_name', $newShow);
	$statement->execute();

	//insert into ratings DB
	$query = 'INSERT INTO ratings(rating) VALUES(:txtRating)';
	$statement = $db->prepare($query);
	$statement->bindValue(':rating', $txtRating);
	$statement->execute();

}
catch (Exception $ex)
{
	echo "Error with DataBase. Specific details: $ex";
	die();
}

header("Location: displayAnimeTV.php");
die();
?>

