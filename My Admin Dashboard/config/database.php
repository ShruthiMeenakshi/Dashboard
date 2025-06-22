<?php
/**
 * Database Configuration File
 * 
 * SECURITY NOTE: This file should be placed outside the web root directory
 * and included via absolute path in your application.
 */

// Error reporting for development (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', '0'); // Set to '1' for debugging, '0' for production

// Database configuration constants
define('DB_HOST', 'localhost');
define('DB_USER', 'college_admin'); // Use a dedicated user with least privileges
define('DB_PASS', 'StrongPassword123!'); // Use a strong, unique password
define('DB_NAME', 'college_management_system');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', 'utf8mb4_unicode_ci');

// Connection options
$db_options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Enable exceptions for errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Return associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false, // Use real prepared statements
    PDO::ATTR_PERSISTENT         => false, // Don't use persistent connections
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
];

// Create a new PDO instance (recommended over mysqli for better security features)
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $conn = new PDO($dsn, DB_USER, DB_PASS, $db_options);
    
    // Set additional attributes if needed
    $conn->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
    
} catch (PDOException $e) {
    // Log the error securely (don't expose details to users)
    error_log("Database connection failed: " . $e->getMessage());
    
    // Display a generic error message to the user
    die("We're experiencing technical difficulties. Please try again later. Administrators have been notified.");
}

/**
 * Sanitize input data helper function
 * 
 * @param mixed $data The input data to be sanitized
 * @return mixed The sanitized data
 */
function sanitize($data) {
    if (is_array($data)) {
        return array_map('sanitize', $data);
    }
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Set timezone for database operations
date_default_timezone_set('America/New_York');

// Close the connection automatically at script end
register_shutdown_function(function() use ($conn) {
    $conn = null;
});
?>