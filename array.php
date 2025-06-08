<?php
// Create an indexed array
$indexedArray = [225, "Dreams", "Glass", 30, 25, 1, "Globe"];

// Create an associative array
$associativeArray = [
    "0" => "Couch",
    "Ice" => "India",
    "6" => "Box",
    "Trip" => "Range"
];

// Print both arrays entirely
echo "<p><strong>Indexed Array:</strong> ";
print_r($indexedArray);
echo "</p>";

echo "<p><strong>Associative Array:</strong> ";
print_r($associativeArray);
echo "</p>";

// Combine both arrays into a single array
$mergedArray = array_merge($indexedArray, $associativeArray);
echo "<p><strong>Merged Array:</strong> ";
print_r($mergedArray);
echo "</p>";

// Get the 3rd value from the indexed array
echo "<p><strong>3rd value from Indexed Array:</strong> " . $indexedArray[2] . "</p>";

// Get the value for the key 'Ice' from the associative array
echo "<p><strong>Value for key 'Ice' in Associative Array:</strong> " . $associativeArray["Ice"] . "</p>";
?>