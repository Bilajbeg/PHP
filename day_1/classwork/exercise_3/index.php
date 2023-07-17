<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $players = array("Mark", "John", "Georg", "Lisa");
        $thirdPlayer = $players[2];
    ?>

    <h1>The third player in the team is <?= $thirdPlayer ?></h1>

</body>
</html>