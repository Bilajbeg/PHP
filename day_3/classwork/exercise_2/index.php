<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Array</title>
</head>
<body>
    <?php    
    
    $numericArray = array(10,20,30,40,50,60,70,80,90,100);

    foreach($numericArray as $key => $value) {
        $key = $key + 1;
        echo   "The $key. Array element value is = " . $value . "<br>";
    }

   /*  $array = array(1,2,3,4,5,6,7,8,9,10);

        foreach ($array as $key => $value) {
            echo "the value of array is $value and key is : $key <br>";
        } */

    ?>
</body>
</html>