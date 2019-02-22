<?php

?>
<form action="doInsertProduct.php" method="post">
Donation<input type="text" name="Donation"/>
Quantity<input type="text" name="Quantity" />
<select name="Category"> Category:
     <?php 
       include 'connection.php';
        global $Connection; 
        
        $Query = "SELECT * FROM category";
        $Result = mysqli_query($Connection,$Query);
        
        while($row=mysqli_fetch_array($Result)){
        echo  "<option>" . $row['Name'] . "</option>";
        }
    
        ?>
    </select>
<input type="submit" />
</form>