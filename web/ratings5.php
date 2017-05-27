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

</body>
</html>