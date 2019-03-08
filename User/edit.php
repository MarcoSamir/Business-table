


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "lab";
session_start();
// create connection
$conn = new mysqli ($hostname, $username, $password, $dbname);
  include_once 'Classes.php';
  

if (!isset($_SESSION)){
    $ID;
	$_SESSION["Id"];
	$ID=$_SESSION["Id"];
}

//$obj=new Users($ID);


//Users::Display($ID);



 $ID=$_SESSION["Id"];
			   $obj=new Users($ID);
			  $obj->Name=$_SESSION["Name"];
			   $obj->Email=$_SESSION["Email"];
			    $obj->Password=$_SESSION["Password"];

echo "<form action='doEdit.php' method='post'>

              <label> Name: <label>

              <input type='text' value='".$_SESSION["Name"]."' name='Name'><br>

             
              <label> Email: <label>

              <input type='text' value='".$_SESSION["Email"]."' name='Email'><br>

              <label> Password: <label>

              <input type='text' value='".$_SESSION["Password"]."' name='Password'><br>

              
    

              <input type='submit' value='submit' name='submit'><br>

              </form>";
			 
				Users::edit($obj);
?>

</body>
</html>
