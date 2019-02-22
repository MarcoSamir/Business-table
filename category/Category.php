<?php 


class Category {
public $ID;
public $Name;
public $Connection;

 function Construct($ID){
    include 'connection.php';
  global $Connection; 

        if($ID != NULL){
        $Query = "SELECT * FROM category WHERE Id = '$ID'";
        $Result = mysqli_query($Connection,$Query);
        while($row=mysqli_fetch_array($Result )){
            $User = new user;
            $User = $row;
        }
    }
}


static function AddCategory($Object){
include 'connection.php';
  global $Connection; 
    
    $Query = "INSERT INTO category(name) VALUES ('".$Object->Name."')";
    $Result = mysqli_query($Connection,$Query);
    if($Result){
        echo "Category added Successfuly";
    }
    else {
        echo "Not added";
    }
}

static function deleteCategory($ID){
include 'connection.php';
  global $Connection; 


$sql = "DELETE FROM category WHERE Id=".$ID;

if (mysqli_query($Connection, $sql)) {
    echo "Category deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($Connection);
}

mysqli_close($Connection);
}


static function edit($ID){
include 'connection.php';
  global $Connection; 
    
    if (!isset($_SESSION)){
    session_start();
}

$Query = "UPDATE category SET Name='$Object->Name' WHERE ID='$Object->ID";
    $Result = mysqli_query($Connection,$Query);
    
    
    }

}




?>