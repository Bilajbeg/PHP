<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise_1</title>
</head>
<body>
    <form  method="POST">
        Name:
        <input type="text" name="firstName">
        <br>
        Surname:
        <input type="text" name="lastName">
        <br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <a href="index.php">Reset</a>

    <?php
        if (isset($_POST['submit'])){
            if ($_POST['firstName'] && $_POST['lastName']){
                echo '<span sytle="color:green"> Welcome'. ' ' . $_POST['']
 

            }
        }
    ?>
</body>
</html>