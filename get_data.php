<?php

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

$searchRadius = $_GET['searchRadius'];
$searchLat = $_GET['searchLat'];
$searchLong = $_GET['searchLong'];

$sql = "SELECT * FROM routes WHERE ( 3959 * acos( cos( radians(:searchLat) ) * cos( radians( start_lat ) ) * cos( radians( start_long ) - radians(:searchLong) ) + sin( radians(:searchLat) ) * sin( radians( start_lat ) ) ) ) < :searchRadius";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':searchRadius', $searchRadius);
$stmt->bindParam(':searchLat', $searchLat);
$stmt->bindParam(':searchLong', $searchLong);

$stmt->execute();

// Fetch the routes as an associative array
$routes = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $routes[] = $row;
}

// Return the routes as JSON
header('Content-Type: application/json');
echo json_encode($routes);
