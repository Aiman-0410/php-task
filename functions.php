<?php
// Function to multiply two parameters and display the result
function mul($num1, $num2) {
    $result = $num1 * $num2;
    echo "<p>$num1 × $num2 = <strong>$result</strong></p>";
}

// Calling the function inside a for loop with 5 different iterations
echo "<p><strong>Multiplication Results:</strong></p>";
for ($i = 1; $i <= 5; $i++) {
    $num1 = $i * 2; // Generating first parameter dynamically
    $num2 = $i + 3; // Generating second parameter dynamically
    mul($num1, $num2); // Calling function with generated parameters
}
?>