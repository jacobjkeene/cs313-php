<?php

$user = $_POST['newUser'];
$pass = $_POST['newPass'];
$show = $_POST['newShow'];
$rating = $_POST['txtRating'];

require("dbConnect.php");
$db = get_db();


try
{
	//insert into users DB
	$query = 'INSERT INTO users(user_name, password) VALUES(:user_name, :password)';
	$statement = $db->prepare($query);
	$statement->bindValue(':user_name', $user);
	$statement->bindValue(':password', $pass);
	$statement->execute();

	//insert into shows DB
	$query = 'INSERT INTO shows(show_name) VALUES(:show_name)';
	$statement = $db->prepare($query);
	$statement->bindValue(':show_name', $show);
	$statement->execute();


	$userId = $db->lastInsertId("users_id_seq");
	$showId = $db->lastInsertId("shows_id_seq");

	//insert into ratings DB
	$query = 'INSERT INTO ratings(userID, showID, rating) VALUES(:userID, :showID, :rating)';
	$statement = $db->prepare($query);
	$statement->bindValue(':userID', $userId);
	$statement->bindValue(':showID', $showId);
	$statement->bindValue(':rating', $rating);
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

