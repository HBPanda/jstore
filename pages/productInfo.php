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
    <title>Product Info | J's Store</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="./productInfo.php">Product Info<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./costingInfo.php">Costing Info</a>
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
        <div class="row w-50">
            <div class="col">
                <form method="post" class="animated fadeInUp" action="../validation/productValid.php">
                    <?php
                    if(isset($_GET['err'])){
                        $err_array = unserialize(urldecode($_GET['err']));
                        echo "<ul class='animated shake delay-1s fast'>";
                        foreach($err_array as $errString){
                            if($errString != ""){
                                echo "<li class='text-danger'>$errString</li>";
                            }
                        }
                        echo "</ul>";
                    }
                    ?>
                    <div class="row justify-content-center p-3">
                        <div class="col-8 text-center">
                            <h1 class="display-4">Product Info</h1>
                        </div>
                    </div>   
                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Product Name" name="productName" value="<?php echo $_SESSION["productName"]; ?>">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Product Code/Serial Number" name="productCodeNumber" value="<?php echo $_SESSION["productCodeNumber"]; ?>">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Manufacturer" name="manufacturer" value="<?php echo $_SESSION["manufacturer"]; ?>">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">                        
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Manufacturer Date</span>
                                </div>
                                <input type="date" class="form-control" placeholder="Manufacturer Date" name="manufacturerDate" value="<?php echo $_SESSION["manufacturerDate"]; ?>">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <select id="productType" class="form-control" name="productType" value="">
                                <option>Product Type</option>
                                <option <?php if($_SESSION["productType"] == "Computers") echo "selected" ?>>Computers</option>
                                <option <?php if($_SESSION["productType"] == "Phones") echo "selected" ?>>Phones</option>
                                <option <?php if($_SESSION["productType"] == "Displays") echo "selected" ?>>Displays</option>
                                <option <?php if($_SESSION["productType"] == "Misc") echo "selected" ?>>Misc</option>
                            </select>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">                        
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Product Description</span>
                                </div>
                                <textarea class="form-control" aria-label="Product Description" name="productDescription"><?php echo $_SESSION["productDescription"]; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>