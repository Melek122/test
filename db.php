<?php
// db.php for Azure MySQL Database

$host = 'agenda-server.mysql.database.azure.com';  // Fully qualified domain name of your MySQL server
$dbname = 'agenda-database';  // Replace with your actual database name
$user = 'agenda-server.mysql.database.azure.com@fbwgcxxxjl';  // Include @servername for Azure MySQL username
$pass = 'Test123+';  // Your Azure MySQL password

$dsn = "mysql:host=$host;dbname=$dbname;port=3306"; 

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $user, $pass);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // You can add additional settings here, like setting charset
    $pdo->exec("SET NAMES utf8mb4");

    // Uncomment for debugging
    // echo "Connected successfully"; 

} catch (PDOException $e) {
    // If the connection fails, show an error message
    echo "Connection failed: " . $e->getMessage();
    exit();  // Make sure the script stops if the connection fails
}
?>
?>
