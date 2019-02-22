<?php 
include_once 'foundation.php';

$Object = new foundations();

$Object->Name = $_POST["name"];

foundations::AddFoundation($Object);
?>