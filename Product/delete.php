<?php
include 'connection.php';
  global $Connection; 
 
 $sql="SELECT * FROM products ";
 $result = mysqli_query($Connection,$sql); 
  
 $Donation="";
 $SellerID="";
 $CategoryID="";
 $Quantity="";

if(mysqli_num_rows($result) > 0)
  {       
     while($row = mysqli_fetch_array($result))
{
	$Donation=$row ['Donation'];
	$SellerID=$row ['SellerID']; 
  $CategoryID=$row ['CategoryID'];
  $Quantity=$row ['Quantity']; 
}
}
?>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>

<table style="width:60%">
  <tr>
    <th>Donation</th>
    <th>SellerID</th> 
    <th>CategoryID</th>
    <th>Quantity</th> 
</tr>
<tr>
    <td><?php echo $Donation ?></td>
    <td><?php echo $SellerID ?></td>
    <td><?php echo $CategoryID ?></td>
    <td><?php echo $Quantity ?></td>
  </tr>
 </table>
<h2>Welcome Admin<h2> 
<form action="doDelete.php" method="post">
Enter The Id of Product you want to delete: <input type="number" name="ID"/>
<br>
<input type="submit" />
</form>