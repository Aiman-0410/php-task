<?php
// Comparison Operators
$a = 'raj';
$b = "raj";

// Comparing string values
echo "<p><strong>String Comparison:</strong></p>";
echo "<p>\$a == \$b: " . var_export($a == $b, true) . "</p>"; // Equal
echo "<p>\$a === \$b: " . var_export($a === $b, true) . "</p>"; // Identical
echo "<p>\$a != \$b: " . var_export($a != $b, true) . "</p>"; // Not Equal
echo "<p>\$a !== \$b: " . var_export($a !== $b, true) . "</p>"; // Not Identical

// Numeric Comparison
$a = 90;
$b = 34;

echo "<p><strong>Numeric Comparison:</strong></p>";
echo "<p>\$a > \$b: " . var_export($a > $b, true) . "</p>"; // Greater than
echo "<p>\$a < \$b: " . var_export($a < $b, true) . "</p>"; // Less than
echo "<p>\$a >= \$b: " . var_export($a >= $b, true) . "</p>"; // Greater than or equal
echo "<p>\$a <= \$b: " . var_export($a <= $b, true) . "</p>"; // Less than or equal
echo "<p>\$a == \$b: " . var_export($a == $b, true) . "</p>"; // Equal
echo "<p>\$a != \$b: " . var_export($a != $b, true) . "</p>"; // Not Equal

// Check Data Types
echo "<p><strong>Data Types:</strong></p>";
echo "<p>Type of \$a: " . gettype($a) . "</p>";
echo "<p>Type of \$b: " . gettype($b) . "</p>";

// Logical Operators
$a = 14;
$b = 40;

echo "<p><strong>Logical Operations (1st set: \$a=14, \$b=40):</strong></p>";
echo "<p>(\$a > 10 AND \$b < 50): " . var_export($a > 10 && $b < 50, true) . "</p>"; // AND
echo "<p>(\$a > 10 OR \$b < 30): " . var_export($a > 10 || $b < 30, true) . "</p>"; // OR
echo "<p>!(\$a < 15): " . var_export(!($a < 15), true) . "</p>"; // NOT

$a = -2;
$b = 70;

echo "<p><strong>Logical Operations (2nd set: \$a=-2, \$b=70):</strong></p>";
echo "<p>(\$a > 0 AND \$b > 50): " . var_export($a > 0 && $b > 50, true) . "</p>"; // AND
echo "<p>(\$a < 0 OR \$b > 60): " . var_export($a < 0 || $b > 60, true) . "</p>"; // OR
echo "<p>!(\$b < 100): " . var_export(!($b < 100), true) . "</p>"; // NOT
?>