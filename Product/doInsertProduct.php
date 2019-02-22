<?php 
include_once 'Products.php';

$Object = new Products();

$Object->Donation = $_POST["Donation"];
$Object->Quantity = $_POST["Quantity"];
$Object->CategoryID = $_POST["Category"];

Products::InsertProduct($Object);

?>