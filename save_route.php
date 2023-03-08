<?php
// Get the coordinates from the AJAX request
$startLat = $_POST['start_lat'];
$startLng = $_POST['start_long'];
$endLat = $_POST['end_lat'];
$endLng = $_POST['end_long'];
echo $startLat . $startLng . $endLat . $endLng;

// Connect to the MySQL database using PDO
$host = 'localhost';
$port = '8888';
$dbname = 'routes';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// Insert the data into the routes table
$sql = "INSERT INTO routes (start_lat, start_long, end_lat, end_long) VALUES (:start_lat, :start_long, :end_lat, :end_long)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['start_lat' => $startLat, 'start_long' => $startLng, 'end_lat' => $endLat, 'end_long' => $endLng]);

// Send a response back to the AJAX request
echo 'Data inserted into database.';