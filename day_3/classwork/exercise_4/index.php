<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    // Loop through integers from 1 to 100
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "Full-Stack <br>";
        } elseif ($i % 3 == 0) {
            echo "Back-End <br>";
        } elseif ($i % 5 == 0) {
            echo "Front-End <br>";
        } else {
            echo $i . "<br>";
        }
    }
    ?>

</body>
</html>