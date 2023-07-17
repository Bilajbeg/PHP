<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Arrays</title>
</head>
<body>


<h1>Cartoon/Anime/Game Characters</h1>
    <ul>
    <?php
        // Define the multidimensional array to store character properties
        $characters = array(
            array(
                "name" => "Mickey Mouse",
                "franchise" => "Disney",
                "main_attribute" => "Cheerfulness",
            ),
            array(
                "name" => "Super Mario",
                "franchise" => "Nintendo",
                "main_attribute" => "Jumping",
            ),
            array(
                "name" => "Goku",
                "franchise" => "Dragon Ball",
                "main_attribute" => "Super Saiyan",
            ),
            array(
                "name" => "Pikachu",
                "franchise" => "Pokemon",
                "main_attribute" => "Electricity",
            ),
            // Add more characters as needed
        );

        // Output the characters with their properties in a user-friendly manner using HTML tags
        foreach ($characters as $character) {
            echo "<li>";
            echo "<strong>Name:</strong> " . $character['name'] . "<br>";
            echo "<strong>Franchise:</strong> <span>" . $character['franchise'] . "</span><br>";
            echo "<strong>Main Attribute:</strong> " . $character['main_attribute'] . "<br>";
            echo "</li>";
        }
    ?>
    </ul>
</body>
</html>