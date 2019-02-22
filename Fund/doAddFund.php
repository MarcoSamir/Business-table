

<?php 
include_once 'classesFund.php';

$Object = new Funds();

$Object->DonorId=$_SESSION['Id'];
$Object->TotalQuantity = $_POST["TotalQuantity"];


Funds::AddFund($Object);
?>