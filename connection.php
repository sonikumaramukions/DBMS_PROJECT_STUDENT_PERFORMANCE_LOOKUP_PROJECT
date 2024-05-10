
<?php
// Establish database connection (replace these variables with your actual database credentials)
$servername = "localhost"; // for xampp server 
$username = "root";   // default for xampp 
$password = "";        // default password for xampp server 
$database = "inter_result";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>