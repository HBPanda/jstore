<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="icon" type="image/png" href="../favicon.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Product | J's Store</title>
</head>
<body class="vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mh-10">
        <a class="navbar-brand" href="../"><img src="../assets/images/logo.png" height="40px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./productInfo.php">Product Info</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./costingInfo.php">Costing Info<span class="sr-only">(current)</span></a>
                </li>       
                <li class="nav-item">
                    <a class="nav-link disabled" href="./registerProduct.php" tabindex="-1" aria-disabled="true">Register Product</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class=" mh-90 d-flex align-items-center justify-content-center">
        <div class="row w-50 animated fadeInUp">
            <div class="col-12 p-3">
                
            <h1 class="display-4 text-center">Register Product</h1>
            </div>
            <div class="col-6">
                <h1 class="display-4 animated fadeInRight delay-0-5s">Product Info</h1>
                <?php
                    echo "<p class='animated fadeInRight delay-0-5s'>Product Name: ". $_SESSION["productName"] . "</p>";
                    echo "<p class='animated fadeInRight delay-1s'>Product Code/Serial Number: ". $_SESSION["productCodeNumber"] . "</p>";
                    echo "<p class='animated fadeInRight delay-1-5s'>Manufacturer: ". $_SESSION["manufacturer"] . "</p>";
                    echo "<p class='animated fadeInRight delay-2s'>Manufacturer Date: ". $_SESSION["manufacturerDate"] . "</p>";
                    echo "<p class='animated fadeInRight delay-2-5s'>Product Type: ". $_SESSION["productType"] . "</p>";
                    echo "<p class='animated fadeInRight delay-3s'>Product Description: ". $_SESSION["productDescription"] . "</p>";
                    echo "<a href='./productInfo.php?edit=true' class='animated fadeInRight delay-3-5s btn btn-primary'>Edit</a>";
                ?>
            </div>
            <div class="col-6">
                <h1 class="display-4 animated fadeInRight delay-0-5s">Cost Info</h1>
                <ul>
                    <?php
                        echo "<p class='animated fadeInRight delay-1'>Cost Price: ". $_SESSION["costPrice"] . "</p>";
                        echo "<p class='animated fadeInRight delay-1-5s'>Sales Price: ". $_SESSION["salesPrice"] . "</p>";
                        echo "<p class='animated fadeInRight delay-2s'> Quantity In Stock: ". $_SESSION["quantity"] . "</p>";
                        echo "<a href='./costingInfo.php?edit=true' class='animated fadeInRight delay-2-5s btn btn-primary'>Edit</a>";
                    ?>
                </ul>
            </div>
            <div class="col pt-3 animated fadeIn delay-4s">
                <button type="submit" class="btn btn-primary btn-block">Register Product</button></div>   
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>