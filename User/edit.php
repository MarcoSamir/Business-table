

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php


echo "<form method='POST' action='".edit($ID)."'>

<textarea  name='Name' value='>".$Name."</textarea>
<textarea  name='Email' value='>".$Email."</textarea>
<textarea  name='Password' value='>".$Password."</textarea>
<button type='submit' name='signupbtn'>Edit</button>
</form>";
?>

</body>
</html>