<?php

$sql_test = "SELECT *
FROM routes
WHERE (3959 * acos(cos(radians(" . $_GET["searchLat"] . ")) * cos(radians(start_lat)) * cos(radians(start_long) - radians(" . $_GET["searchLong"] . ")) + sin(radians(" . $_GET["searchLat"] . ")) * sin(radians(start_lat)))) <=" . $_GET["radius"];
// Connect to the database
$dsn = 'mysql:host=localhost;port=8888;dbname=routes;';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

// Select all the routes from the database
$table = "routes";
$sql = "SELECT * FROM routes";
$stmt = $pdo->query($sql);

// Fetch the routes as an associative array
$routes = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $routes[] = $row;
}

// Return the routes as JSON
header('Content-Type: application/json');
echo json_encode($routes);