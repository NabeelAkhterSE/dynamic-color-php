<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>dynamic</title>
</head>
<body>
<form method="POST">
	Enter your fav color
	<input type="text" name="favcolor">
	<input type="submit" name="submit">
</form>
<p> 
	<?php 
		if (isset($_POST['submit'])) {
			$favcolor = $_POST['favcolor'];
			switch ($favcolor) {
	  case "red":
	    echo "Your favorite color is red!";
	    break;
	  case "blue":
	    echo "Your favorite color is blue!";
	    break;
	  case "green":
	    echo "Your favorite color is green!";
	    break;
	  default:
	    echo "Your favorite color is neither red, blue, nor green!";
	}
			}
	 ?>
</p>
</body>
</html>