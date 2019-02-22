<?php 
include_once 'User.php';

$Name = $_POST['Name'];
$Password = $_POST['Password'];

User::Login($Name,$Password);
?>