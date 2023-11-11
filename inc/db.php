<?php
// Database connection parameters

$servername = "localhost";
$username = "root";
$password = "mag7374)(*";
$database = "shoug";
// $conn = mysqli_connect('localhost','root', '','win');

// // Check the connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());


// }


$conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
?>