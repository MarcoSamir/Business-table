<?php 
include_once 'User.php';

$Object = new User();

$Object->Name = $_POST["Fname"];
$Object->Password = $_POST["psw"];

User::SignUp($Object);
?>