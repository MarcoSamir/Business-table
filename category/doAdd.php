<?php 
include_once 'Category.php';

$Object = new Category();

$Object->Name = $_POST["name"];

Category::AddCategory($Object);
?>