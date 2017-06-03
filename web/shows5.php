<html>
<head>
<link rel="stylesheet" type="text/css" href="jacobStyles.css">
<title>AnimeTV Shows</title>
</head>
<body>

<?php
require("dbConnect.php");
$db = get_db();
?>

<h1>Shows</h1>

<?php
$statement = $db->query('SELECT showID, show_name FROM shows');
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo ' show name: ' . $row['show_name'] . '<br/>';
}

?>
<br>
<a href="displayAnimeTV.php">Link back to Display Database</a>
</body>
</html>