<?php
// Creating a multidimensional associative array
$students = [
    ["name" => "Alice", "marks" => 85],
    ["name" => "Bob", "marks" => 72],
    ["name" => "Charlie", "marks" => 91]
];

// Displaying the array using a 'foreach' loop
echo "<p><strong>Displaying array using foreach loop:</strong></p>";
foreach ($students as $student) {
    echo "<p>Name: {$student['name']}, Marks: {$student['marks']}</p>";
}

// Displaying the array using a 'for' loop
echo "<p><strong>Displaying array using for loop:</strong></p>";
for ($i = 0; $i < count($students); $i++) {
    echo "<p>Name: " . $students[$i]['name'] . ", Marks: " . $students[$i]['marks'] . "</p>";
}

// Displaying the array using a 'while' loop
echo "<p><strong>Displaying array using while loop:</strong></p>";
$i = 0;
while ($i < count($students)) {
    echo "<p>Name: " . $students[$i]['name'] . ", Marks: " . $students[$i]['marks'] . "</p>";
    $i++;
}

// Displaying the array using a 'do-while' loop
echo "<p><strong>Displaying array using do-while loop:</strong></p>";
$i = 0;
do {
    echo "<p>Name: " . $students[$i]['name'] . ", Marks: " . $students[$i]['marks'] . "</p>";
    $i++;
} while ($i < count($students));
?>