<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if (isset($_POST['name']) && isset($_POST['surname'])) {
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);

    if (!empty($name) && !empty($surname)) {
        echo "Welcome $name $surname!";
    } elseif (empty($name)) {
        echo "Please insert your name.";
    } else {
        echo "Please insert your surname.";
    }
} else {
    echo "Form submission failed. Please try again.";
}
?>
    
</body>
</html>