








<!DOCTYPE html>
<html>
<head>
	<title>Get Area</title>
</head>


<body>

<form action="" method="POST">
	<h1>Solve for the area of the rectangle:</h1><br>
	Length: 
		<input type="text" name="length" value="0"><br><br>
	Width:
		<input type="text" name="width" value="0"><br><br>		
		<input type="submit" name="submit" value="Solve for the Area"><br><br>
		
</form>


<?php 

if(isset($_POST['submit'])){
	$n1 = $_POST['length'];
	$n2 = $_POST['width'];

	function get_area($n1, $n2){


	$area = ($n1 * $n2);

	return "The area of the Rectangle is: " . $area;

}

echo get_area($n1, $n2);

} else {
	echo '';
}


phpinfo();


 ?>
</body>
</html>