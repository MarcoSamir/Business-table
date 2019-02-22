<?php
include_once 'Category.php';


$ID=$_POST['ID'];

Category::deleteCategory($ID);




?>