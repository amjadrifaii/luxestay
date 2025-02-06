<?php
// Ensure no output is sent before the JSON response
ob_start();
// Include necessary files (e.g., UserController)
require_once 'UserController.php';
require '../db_connect.php';

$userController = New UserController($conn);

// Extract the HTTP method and URI
$method = $_SERVER['REQUEST_METHOD']; // Get the HTTP method (e.g., GET, POST)
$uri = $_SERVER['REQUEST_URI']; // Get the request URI

$methoduri = $method . ' ' . $uri;
// Handle GET /luxestay/users/{id}
if (preg_match('/^GET \/luxestay\/mvcs\/UserRouter\.php\/users\/(\d+)$/', $methoduri, $matches))  {
    // Extract the user ID from the URI
    $userId = $matches[1];

    // Fetch user data from the controller
    $userData = $userController->getUserById($userId);

    // Check if user data was found
    if ($userData) {

        if (is_string($userData)) {
            $userData = json_decode($userData, true); // Convert JSON string to PHP array
        }
        // Set the response header to JSON
        header('Content-Type: application/json');

        // Return the user data as JSON
        echo json_encode([
            'status' => 'success',
            'data' => $userData,
        ]);
    } else {
        // User not found
        http_response_code(404); // Set HTTP status code to 404 (Not Found)
        echo json_encode([
            'status' => 'error',
            'message' => 'User not found',
        ]);
    }
} else {
    // Handle 404 - Endpoint not found
    http_response_code(404); // Set HTTP status code to 404 (Not Found)
    echo json_encode([
        'status' => 'error',
        'message' => 'Endpoint not found',
    ]);
}

// Ensure no additional output is sent
ob_end_flush();
?>