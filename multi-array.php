<?php
// Creating a multidimensional array '$details'
$details = [
    ["Lisa", "London", 30, "Female"],
];

// Adding another array entry
$details[] = ["Ash", "Tokyo", 20, "Male"];

// Print the original array before modifications
echo "<p><strong>Original 'details' Array:</strong> <pre>";
print_r($details);
echo "</pre></p>";

// Deleting the first array item from the 0th index
array_shift($details);

// Displaying only cities (2nd index of each sub-array)
echo "<p><strong>Cities:</strong> ";
foreach ($details as $person) {
    echo $person[1] . " ";
}
echo "</p>";

// Displaying the entire last indexed array
$lastDetails = end($details);
echo "<p><strong>Last indexed array:</strong> ";
print_r($lastDetails);
echo "</p>";

// Creating a multidimensional associative array '$product_details'
$product_details = [
    ["product_name" => "Laptop", "price" => 1500, "date" => "05-01-2024", "address" => "Delhi"],
];

// Adding another product entry
$product_details[] = ["product_name" => "TV", "price" => 200, "date" => "06-01-2024", "address" => "Hubli"];

// Print the original array before modifications
echo "<p><strong>Original 'product_details' Array:</strong> <pre>";
print_r($product_details);
echo "</pre></p>";

// Deleting the first array item
array_shift($product_details);

// Displaying product name where date = '06-01-2024'
foreach ($product_details as $product) {
    if ($product["date"] == "06-01-2024") {
        echo "<p><strong>Product Name for date 06-01-2024:</strong> " . $product["product_name"] . "</p>";
    }
}

// Displaying the last array list
$lastProductDetails = end($product_details);
echo "<p><strong>Last array list:</strong> ";
print_r($lastProductDetails);
echo "</p>";
?>