<?php 

$SEA = [
	'Brunei' => 'Bandar Seri Begawan',
	'Thailand' => 'Bangkok',
	'East Timor' => 'Dili',
	'Vietnam' => 'Hanoi',
	'Indonesia' => 'Jakarta',
	'Malaysia' => 'Kuala Lumpur',
	'Philippines' => 'Manila',
	'Myanmar' => 'Naypyidaw',
	'Cambodia' => 'Pnom Penh',
	'Singapore' => 'Singapore',
	'Laos' => 'Vientiane'
	];

	$genderr = ['Male' => 'Male',
			   'Female' => 'Female',
			   'Gay' => 'Gay'];

	function create_dropdown($name,$options) {

		// foreach ($SEA as $country => $capital) {
		// 	echo "<option value='$country'>$capital</option>";
		// }
		echo "<select name='$name'>";

		foreach ($options as $country => $capital) {

			echo "<option value='$country'>$capital</option>";

		}

		echo "</select>";
	}

	// function create_dropdown($options,$name) {

	// 	echo "<select name='$name'>";

	// 	foreach ($gender as $options => $name) {

	// 		echo "<option value='$options'>$name</option>";

	// 	}

	// 	echo "</select>";
	// }



	if(isset($_POST['submit'])){
		$country = $_POST['capital'];
		$gender = $_POST['gender'];

		echo "selected country is: " . $country . "<br>";
		echo "selected gender is: " . $gender . "<br>";
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dropdown</title>
</head>

<body>

<!-- <form method="POST" action="">
	Gender
	<select name="gender">
		<option value="G">Girl</option>
		<option value="B">Boy</option>
		<option>Bakla level: 1</option>
		<option>Bakla level: 2</option>
		<option>Bakla level: 3</option>
		<option >Bakla level: GOD</option>
	</select>
	
	<input type="submit" name="submit" value="Submit">

</form> -->

<h1>Sample Select Box</h1>
<form method="POST" action="">

	Capital: 
	<?php create_dropdown('capital',$SEA); ?>
	<br>
	Gender: 
	<?php create_dropdown('gender',$genderr); ?>
	<input type='submit' name='submit' value='Submit'>



</form>

	

</body>
</html>