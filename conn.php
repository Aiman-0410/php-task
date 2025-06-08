<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Evaluation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .result {
            font-size: 18px;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            display: inline-block;
            width: 90%;
        }
        .good { background-color: #28a745; color: white; }
        .average { background-color: #ffc107; color: black; }
        .fail { background-color: #dc3545; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Marks Evaluation</h2>
        <?php
            // Define marks
            $marks = [
                ["label" => "Mark 1", "value" => 28],
                ["label" => "Mark 2", "value" => 67],
                ["label" => "Mark 3", "value" => 95]
            ];

            // Function to check grade category
            function checkGrade($mark) {
                if ($mark > 90) {
                    return "Good";
                } elseif ($mark > 35 && $mark < 70) {
                    return "Average";
                } else {
                    return "Fail";
                }
            }

            // Display results dynamically
            foreach ($marks as $mark) {
                $grade = checkGrade($mark["value"]);
                $class = strtolower($grade); // Assign CSS class based on result
                echo "<p class='result $class'>{$mark['label']} ({$mark['value']}): <strong>$grade</strong></p>";
            }
        ?>
    </div>
</body>
</html>