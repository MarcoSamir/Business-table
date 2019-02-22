<?php

include_once 'classesFund.php';


$ID=$_POST['ID'];

Users::deleteFund($ID);


?>