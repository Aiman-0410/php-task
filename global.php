<?php
// Define global variable
$globalValue = 90;

// Print the initial global value before modifications
echo "<p><strong>Initial Global Value:</strong> $globalValue</p>";

// Function to add 10 to the global value
function add() {
    global $globalValue; // Access global variable
    $globalValue += 10;
    echo "<p><strong>After Addition:</strong> $globalValue</p>";
}

// Function to subtract 50 from the global value
function sub() {
    global $globalValue; // Access global variable
    $globalValue -= 50;
    echo "<p><strong>After Subtraction:</strong> $globalValue</p>";
}

// Call functions to execute operations
add();
sub();
?>