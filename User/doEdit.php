<?php
include_once 'User.php';


$ID=$_POST['ID'];

User::edit($ID);




?>