<?php

// Connect to the database
$dsn = 'mysql:host=localhost;port=8888;dbname=routes;';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    // Add error handling for connection errors
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Failed to connect to the database']);
    exit;
}

// Get search parameters from GET request
$routeID = $_GET['routeID'] ?? null;

// Prepare SQL statement
$sql = "SELECT * FROM comments WHERE route_id = :routeID";
$stmt = $pdo->prepare($sql);

// Bind search parameters to prepared statement
$stmt->bindParam(':routeID', $routeID, PDO::PARAM_INT);

// Execute SQL statement
if (!$stmt->execute()) {
    // Add error handling for SQL errors
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Failed to retrieve comments']);
    exit;
}

// Fetch the comments as an associative array
$comments = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $comments[] = $row;
}

// Return the comments as JSON
header('Content-Type: application/json');
echo json_encode($comments);