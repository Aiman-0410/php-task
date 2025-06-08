<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions in PHP</title>
</head>
<body>
    <h2>PHP String Functions</h2>
    <?php
        // Define the original string
        $string = "Hello World! Welcome to PHP string functions.";

        // Get the length of the string
        $length = strlen($string);

        // Find the position of the first occurrence of "Hello"
        $position = strpos($string, "Hello");

        // Replace all occurrences of "World" with "Universe"
        $replacedString = str_replace("World", "Universe", $string);

        // Convert string to lowercase
        $lowercaseString = strtolower($string);

        // Convert string to uppercase
        $uppercaseString = strtoupper($string);

        // Capitalize the first letter of each word
        $titleCaseString = ucwords($string);

        // Capitalize the first letter of the string
        $firstCapitalString = ucfirst(strtolower($string));

        // Remove whitespace from the beginning and end of the string
        $trimmedString = trim($string);

        // Display results
        echo "<p><strong>Original String:</strong> $string</p>";
        echo "<p><strong>Length of String:</strong> $length</p>";
        echo "<p><strong>Position of 'Hello':</strong> $position</p>";
        echo "<p><strong>Replaced String:</strong> $replacedString</p>";
        echo "<p><strong>Lowercase String:</strong> $lowercaseString</p>";
        echo "<p><strong>Uppercase String:</strong> $uppercaseString</p>";
        echo "<p><strong>Title Case String:</strong> $titleCaseString</p>";
        echo "<p><strong>Capitalized First Letter:</strong> $firstCapitalString</p>";
        echo "<p><strong>Trimmed String:</strong> '$trimmedString'</p>";
    ?>
</body>
</html>