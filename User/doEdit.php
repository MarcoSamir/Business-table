<?php
include_once 'Classes.php';
session_start();
$Object=new Users();
$Object->Name = $_POST["Name"];
$Object->Email = $_POST["Email"];
$Object->Password = $_POST["Password"];
$ID= $_SESSION["Id"];
$Object->ID=$ID;
Users::edit($Object);





?>
