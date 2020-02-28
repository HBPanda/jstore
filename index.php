<?php
    $products = array();
    if(filesize("./database/products.txt")){       
        $productFile = fopen("./database/products.txt", 'r') or die("Unable to open file!");
        $costsFile = fopen("./database/costs.txt", 'r') or die("Unable to open file!");
            while((fgetc($productFile) != " ") && !(feof($productFile)) && !(feof($costsFile))){
                fseek($productFile, ftell($productFile) - 1);
                parse_str(fgets($productFile), $temp1);
                parse_str(fgets($costsFile), $temp2);
                $temp1 = $temp1 + $temp2;
                array_push($products, $temp1);
                unset($temp1);
                unset($temp2);
            }   
        fclose($productFile);
        fclose($costsFile);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="icon" type="image/png" href="./favicon.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J's Electronics and More Ltd</title>
</head>
<body class="vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mh-10">
        <a class="navbar-brand" href="./"><img src="./assets/images/logo.png" height="40px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/productInfo.php">Add Product</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="mh-90 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-12 text-center animated fadeIn">
                <h1 class="display-4 pb-5">Products</h1>
            </div>
            <?php
                if(count($products) < 1){
                    echo "<div class='col-12 d-flex justify-content-center text-black-50 p-3'>No Products</div>";
                    echo "<div class='col-12 d-flex justify-content-center animated fadeIn delay-1s'><a href='./pages/productInfo.php' class='btn btn-primary'>Add a Product</a></div>";
                    echo "";
                } else{           
                    for($x = 0; $x < count($products); $x++){
                        echo "<div class ='col-md-3 col-sm-12 d-flex justify-content-center p-2 animated fadeInUp'>";
                            echo "<div class='card' style='width: 18rem;'>";
                                echo "<div class='card-body'>";
                                    echo "<h5 class='card-title'>". $products[$x]["productName"] . "</h5>";
                                    echo "<p class='card-text'>Code/Serial Number: " . $products[$x]["productCodeNumber"] . "</p>";
                                    echo "<p class='card-text'>Manufacturer: " . $products[$x]["manufacturer"] . "</p>";
                                    echo "<p class='card-text'>Manufacturer Date: " . $products[$x]["manufacturerDate"] . "</p>";
                                    echo "<p class='card-text'>Product Type: " . $products[$x]["productType"] . "</p>";
                                    echo "<p class='card-text'>Product Description: " . $products[$x]["productDescription"] . "</p>";
                                    echo "<p class='card-text'>Cost Price: " . $products[$x]["costPrice"] . "</p>";
                                    echo "<p class='card-text'>Sales Price" . $products[$x]["salesPrice"] . "</p>";
                                    echo "<p class='card-text'>Quantity: " . $products[$x]["quantity"] . "</p>";
                                echo "</div>";
                            echo "</div>";                        
                        echo "</div>";
                    }
                }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>