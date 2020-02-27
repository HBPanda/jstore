<?php 
    session_start();
    //Declare product form variables
    $costPrice = $salesPrice = $quantity = "";

    $errCheck =false;
    $err[3] = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["costPrice"])){
            $errCheck = true;
            $err[0] = "Cost Price must not be empty";
        } else {
            $err[0] = "";
            $costPrice = test_input($_POST["costPrice"]);
        }
        if(empty($_POST["salesPrice"])){
            $errCheck = true;
            $err[1] = "Sales Price must not be empty";
        } else {
            $err[1] = "";
            $salesPrice = test_input($_POST["salesPrice"]);
        }
        if(empty($_POST["quantity"])){
            $errCheck = true;
            $err[2] = "Quantity must not be empty";
        } else {
            $err[2] = "";
            $quantity = test_input($_POST["quantity"]);
        }
        
        if($errCheck){
            header("Location: ../pages/costingInfo.php?err=". urlencode(serialize($err)));
        } else{
            $_SESSION["costPrice"] = $costPrice;
            $_SESSION["salesPrice"] = $salesPrice;
            $_SESSION["quantity"] = $quantity;
            header("Location: ../pages/registerProduct.php?success=true");
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