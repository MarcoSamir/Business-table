<?php
include 'connection.php';
  global $Connection; 
 
 $sql="SELECT * FROM category ";
 $result = mysqli_query($Connection,$sql); 
 $id=""; 
 $name="";
if(mysqli_num_rows($result) > 0)
  {       
     while($row = mysqli_fetch_array($result))
{
	$id=$row ['id'];
	$name=$row ['Name']; 
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
    <th>ID</th>
    <th>Name</th> 
</tr>
<tr>
    <td><?php echo $id ?></td>
    <td><?php echo $name ?></td>
  </tr>
 </table>
<h2>Welcome Admin<h2> 
<form action="doDelete.php" method="post">
Enter The Id of Category you want to delete: <input type="number" name="ID"/>
<br>
<input type="submit" />
</form>