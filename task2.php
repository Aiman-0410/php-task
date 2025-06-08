<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h2>Student Information</h2>
    <?php
        // Defining Variables
        $college = "Ved Engineering College";
        $reg_no = "U02AT22S0123";
        $branch = "Computer Science";

        // Defining Constants
        define("PHONE_NO", "9876543210");
        define("DEPARTMENT", "Engineering");

        // Printing Information
        echo "<p><strong>College Name:</strong> $college</p>";
        echo "<p><strong>Registration No.:</strong> $reg_no</p>";
        echo "<p><strong>Branch Name:</strong> $branch</p>";
        echo "<p><strong>Phone No.:</strong> " . PHONE_NO . "</p>";
        echo "<p><strong>Department:</strong> " . DEPARTMENT . "</p>";
    ?>
</body>
</html>