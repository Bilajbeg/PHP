<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Function to find the highest value in an array
    function findHighestValue($arr) {
        $highestValue = $arr[0]; // Assume the first element is the highest

        // Loop through the array to find the actual highest value
        foreach ($arr as $i => $value) {
            $i = $i +1;
            echo "$i Element  = $value, " . "<br>";

            if ($value > $highestValue) {
                $highestValue = $value;
            }
        }

        return $highestValue;
    }

    // Create an array with at least 10 random numbers
    $randomNumbers = array();
    for ($i = 0; $i < 10; $i++) {
        $randomNumbers[] = rand(1, 100); // Generate a random number between 1 and 100
    }

    // Call the function and output the result
    $result = findHighestValue($randomNumbers);
    echo "<h1>The highest value in the array is: " . $result . "</h1>";
    ?>

    
<!--  echo "<br><br>";

  $numbers = array();
  for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(1, 100);
  }

  $highestValue = $numbers[0]; // Initialize with the first element

  foreach ($numbers as $number) {
    echo $number . " ";

    if ($number > $highestValue) {
      $highestValue = $number;
    }
  }

  echo "<br>The highest value in the array is: " . $highestValue;  -->
  



</body>
</html>