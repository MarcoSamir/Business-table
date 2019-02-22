<html>


<h1>Foundations</h1>

<h4>Please choose a type of foundation: </h4>
<form>

	  <select>
	  <?php 
	  	$Connection = mysqli_connect("localhost","root","","softwaretask2");
		$Query = "SELECT * FROM foundations";
		$Result = mysqli_query($Connection, $Query);
		while($row = mysqli_fetch_array($Result)){
		echo "<option>" . $row['Name'] . "</option>";
		}
	  ?>
	  </select>
<br>
<h4>Enter total number of quantity: </h4>
<input type="number" name="TotalQuantity"></input>



<input type="submit"></input>



</form>



</html>