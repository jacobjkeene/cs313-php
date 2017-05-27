<html>
<body>

<?php
require("dbConnect.php");
$db = get_db();
?>

<h1>Ratings</h1>

<?php
$statement = $db->query('SELECT rating FROM ratings');
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo ' Rating: ' . $row['rating'] . '<br/>';
}
?>

<a href="displayAnimeTV.php">Link back to Display Database</a>
</body>
</html>