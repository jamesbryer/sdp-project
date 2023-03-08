<?php
// Connect to the database using PDO
$dsn = 'mysql:host=localhost;port=8888;dbname=routes';
$username = 'root';
$password = 'root';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
$dbh = new PDO($dsn, $username, $password, $options);

// Prepare a SQL statement to retrieve data from the "routes" table
$stmt = $dbh->prepare('SELECT * FROM routes');
$stmt->execute();

// Fetch the results as an associative array
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Convert the associative array to a JSON string
$json_str = json_encode($results);

// Pass the JSON string to your JavaScript code
echo '<script>var json_obj = ' . $json_str . ';console.log(json_obj);</script>';
