<?php
// Database Connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "task";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the country table
$sql = "SELECT * FROM country";
$result = $conn->query($sql);

// Check if data exists
if ($result->num_rows > 0) {
    $countries = []; // Initialize an array to store fetched data

    while ($row = $result->fetch_assoc()) {
        $countries[] = $row; // Store row data in the array
    }

    // Displaying country details using foreach loop
    echo "<h2>Country Details</h2>";
    foreach ($countries as $country) {
        echo "<p><strong>Country:</strong> " . $country['country_name'] . "</p>";
        echo "<p><strong>Capital:</strong> " . $country['country_capital'] . "</p>";
        echo "<p><strong>Famous Place:</strong> " . $country['famous_place'] . "</p>";
        echo "<hr>";
    }
} else {
    echo "<p><strong>No records found in the database.</strong></p>";
}

// Close connection
$conn->close();
?>