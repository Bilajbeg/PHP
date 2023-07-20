<?php
require_once "db_connect.php";

$sql = "SELECT * FROM dishes";

$result = mysqli_query($connect, $sql);

$cards = "";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $cards .= "<div>
                <div class='card' style='width: 18rem;'>
                    <img src='images/{$row["image"]}' class='card-img-top' alt='...'>
                    <div class='card-body'>
                    <h5 class='card-title'>{$row["name"]}</h5>
                    <p class='card-text'>{$row["price"]}</p>
                    <a href='update.php?id={$row["id"]}' class='btn btn-warning'>Update</a>
                    <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
                </div>
            </div>
          </div>";
    }
} else {
    $cards = "<p>No results found</p>";
}

mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Restaurant</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create product</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <a class="btn btn-secondary" href="create.php">Create a product</a>
        <h1 class="mt-5">Products List</h1>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-xs-1">
            <?= $cards ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</body>

</html>