<?php 


class User {
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

static function Display(){
include 'connection.php';
  global $Connection; 

    

     $sql="SELECT * FROM user ";
 $result = mysqli_query($Connection,$sql); 
 $id=""; 
 $name="";
if(mysqli_num_rows($result) > 0)
  {       
     while($row = mysqli_fetch_array($result))
{
    echo $row ['name'];
   
}
}

}



static function Login($Name,$Password){
include 'connection.php';
  global $Connection; 
	session_start();
    $Query = "SELECT * FROM user WHERE Name ='$Name' AND Password = '$Password'";
    $Result = mysqli_query($Connection,$Query);
   if($row = mysqli_fetch_array($Result))
    {
        $_SESSION["id"]=$row[0];
        echo "Welcome user " . $Name;
    }
    else {
        echo "No Such Record";
    }
}

static function SignUp($Object){
include 'connection.php';
  global $Connection; 
    
    $Query = "INSERT INTO user(name, password) VALUES ('".$Object->Name."','".$Object->Password."')";
    $Result = mysqli_query($Connection,$Query);
    if($Result){
           header("Location: ../welcomepage.html");
    }
    else {
        echo "Not added";
    }
}

static function deleteUser($ID){
include 'connection.php';
  global $Connection; 


$sql = "DELETE FROM user WHERE Id=".$ID;

if (mysqli_query($Connection, $sql)) {
    echo "Account deleted successfully";
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

$Query = "UPDATE user SET Name='".$Object->Name."',Email='".$Object->Password."' WHERE ID='$Object->ID";
    $Result = mysqli_query($Connection,$Query);
    
    
    }

}




?>