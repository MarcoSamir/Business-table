<?php
include_once 'foundation.php';


$ID=$_POST['ID'];

Products::deleteProduct($ID);




?>