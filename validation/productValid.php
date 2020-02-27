<?php 
    session_start();
    //Declare product form variables
    $productName = $productCodeNumber = 
    $manufacturer = $manufacturerDate = 
    $productType = $productDescription = "";

    $errCheck =false;
    $err[6] = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["productName"])){
            $errCheck = true;
            $err[0] = "Product Name must not be empty";
        } else {
            $err[0] = "";
            $productName = test_input($_POST["productName"]);
        }
        if(empty($_POST["productCodeNumber"])){
            $errCheck = true;
            $err[1] = "Product Code/Serial Number must not be empty";
        } else {
            $err[1] = "";
            $productCodeNumber = test_input($_POST["productCodeNumber"]);
        }
        if(empty($_POST["manufacturer"])){
            $errCheck = true;
            $err[2] = "Manufacturer name must not be empty";
        } else {
            $err[2] = "";
            $manufacturer = test_input($_POST["manufacturer"]);
        }
        if(empty($_POST["manufacturerDate"])){
            $errCheck = true;
            $err[3] = "Manufacturer Date must not be empty";
        } else {
            $err[3] = "";
            $manufacturerDate = test_input($_POST["manufacturerDate"]);
        }
        if(empty($_POST["productType"])){
            $errCheck = true;
            $err[4] = "Product Type must be selected";
        } else {
            $err[4] = "";
            $productType = test_input($_POST["productType"]);
        }
        if(empty($_POST["productDescription"])){
            $errCheck = true;
            $err[5] = "Product Description must not be empty";
        } else {
            $err[5] = "";
            $productDescription = test_input($_POST["productDescription"]);
        }
        if($errCheck){
            header("Location: ../pages/productInfo.php?err=". urlencode(serialize($err)));
        } else{
            $_SESSION["productName"] = $productName;
            $_SESSION["productCodeNumber"] = $productCodeNumber;
            $_SESSION["manufacturer"] = $manufacturer;
            $_SESSION["manufacturerDate"] = $manufacturerDate;
            $_SESSION["productType"] = $productType;
            $_SESSION["productDescription"] = $productDescription;
            header("Location: ../pages/costingInfo.php?success=true");
        }
        
    }
    foreach($err as $errString){
        print $errString ."<br>";
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>