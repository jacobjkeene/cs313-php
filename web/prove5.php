<html>
<body>

<?php

// default Heroku Postgres configuration URL
$dbUrl = getenv('DATABASE_URL');

if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
 $dbUrl = "postgres://postgres:password@localhost:5432/calm-plains-29594";
}

$dbopts = parse_url($dbUrl);


$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');


try {
 $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
 print "<p>error: $ex->getMessage() </p>\n\n";
 die();
}

?>
<h1>Welcome!</h1>
<p>Click the following link to see our Users in the database:</p>
<a href="users5.php">Users</a>

<p>Click the following link to see our Shows in the database:</p>
<a href="shows5.php">Shows</a>

<p>Click the following link to see our Ratings in the database:</p>
<a href="ratings5.php">Ratings</a>

</body>
</html>