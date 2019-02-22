<?php 

class Funds {
public $ID;
public $Name;
public $Password;
public $Email;
public $UserTypeId;
public $AddressID;
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


static function AddFund($Object){
include 'connection.php';
  global $Connection; 
 session_start();
    if(!empty($_SESSION['id']))
  {
 $Object->DonorId = $_SESSION['id'];
   
$Query="Insert into fund(DonorId,TotalQuantity)VALUES('$Object->DonorId','$Object->TotalQuantity')";

    $Result = mysqli_query($Connection,$Query);
    if($Result){
        echo "Record added Successfuly";
    }
    }
    else {
        echo "Not Added !";
    }
}

static function deleteFund($ID){


include 'connection.php';
  global $Connection; 

// sql to delete a record
$sql = "DELETE FROM fund WHERE Id=".$ID;

if (mysqli_query($Connection, $sql)) {
    echo "Record Deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($Connection);
}

mysqli_close($Connection);
}



}

?>