<?php 

class Products {
public $ID;
public $Quantity;
public $Donation;
public $SellerID;
public $CategoryID;
public $Connection;

 function Construct($ID){
    if($ID != NULL){
        $Query = "SELECT * FROM user WHERE Id = '$ID'";
        $Result = mysqli_query($Connection,$Query);
        while($row=mysqli_fetch_array($Result )){
            $User = new user;
            $User = $row;
        }
    }
}

static function InsertProduct($Object){
include 'connection.php';
  global $Connection; 
    
    session_start();
    if(!empty($_SESSION['id']))
  {
    
    $Object->SellerID = $_SESSION['id'];
    
    $Query = "INSERT INTO products(Donation,SellerID,CategoryID,Quantity) VALUES ('".$Object->Donation."','".$Object->SellerID."','".$Object->CategoryID."','".$Object->Quantity."')";
    
    $Result = mysqli_query($Connection,$Query);
    if($Result){
        echo "Product added Successfuly";
    }
}
    else {
        echo "Product Not added";
    }
}
    
static function deleteProduct($ID){
include 'connection.php';
  global $Connection; 

$sql = "DELETE FROM products WHERE Id=".$ID;

if (mysqli_query($Connection, $sql)) {
    echo "Product deleted successfully";
} else {
    echo "Error deleting Product: " . mysqli_error($Connection);
}

mysqli_close($Connection);
}
    
}


?>