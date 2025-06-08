<?php
// Including detail.php using include
include 'detail.php';

// Including my_name.php using require
require 'my_name.php';

// Using include_once for detail.php to prevent multiple inclusions
include_once 'detail.php';

// Using require_once for my_name.php to prevent duplicate inclusions
require_once 'my_name.php';

// Displaying the details array from details.php
echo "<p><strong>Details of People:</strong></p>";
foreach ($people as $person) {
    echo "<p>Name: {$person['name']}, <br>
    Age: {$person['age']}, <br>
    DOB: {$person['DOB']}</p>";
}
?>