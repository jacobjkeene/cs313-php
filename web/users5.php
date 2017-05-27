<html>
<body>

<?php
require("dbConnect.php");
$db = get_db();
?>

<h1>Users</h1>

<?php  
$statement = $db->query('SELECT user_name, password, userID FROM users');
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  echo 'user: ' . $row['user_name'] . ' password: ' . $row['password'] . '<br/>';
}

?>

</body>
</html>