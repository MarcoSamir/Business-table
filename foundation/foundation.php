<?php 


class foundations {
public $ID;
public $Name;
public $Connection;

 function Construct($ID){
    include 'connection.php';
  global $Connection; 

        if($ID != NULL){
        $Query = "SELECT * FROM foundations WHERE Id = '$ID'";
        $Result = mysqli_query($Connection,$Query);
        while($row=mysqli_fetch_array($Result )){
            $User = new user;
            $User = $row;
        }
    }
}


static function AddFoundation($Object){
include 'connection.php';
  global $Connection; 
    
    $Query = "INSERT INTO foundations(Name) VALUES ('".$Object->Name."')";
    $Result = mysqli_query($Connection,$Query);
    if($Result){
        echo "foundation added Successfuly";
    }
    else {
        echo "Not added";
    }
}

static function deleteFoundation($ID){
include 'connection.php';
  global $Connection; 


$sql = "DELETE FROM foundations WHERE Id=".$ID;

if (mysqli_query($Connection, $sql)) {
    echo "foundation deleted successfully";
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

$Query = "UPDATE foundations SET Name='$Object->Name' WHERE ID='$Object->ID";
    $Result = mysqli_query($Connection,$Query);
    
    
    }

}




?>