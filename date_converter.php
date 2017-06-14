<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>


	<form action="" method="POST">

		<input type="text" name="date" placeholder="dd/mm/yyyy">
		<input class='btn btn-danger' type="submit" name="submit" value="show me"><br><br>
		
	</form>


<?php 

	$months = [
	'January',
	'February',
	'March',
	'April',
	'May',
	'June',
	'July',
	'August',
	'September',
	'October',
	'November',
	'December',
	];


	$zodiac = [
	'Capricorn',
	'Aquarius',
	'Pisces',
	'Aries',
	'Taurus',
	'Gemini',
	'Cancer',
	'Leo',
	'Virgo',
	'Libra',
	'Scorpio',
	'Saguittarius',
	];

	$zodiac_start_days = [
	20,
	19,
	21,
	20,
	21,
	21,
	23,
	23,
	23,
	23,
	22,
	22
	];

	// $zodiac_end_days = [
	// 18,
	// 20,
	// 19,
	// 20,
	// 20,
	// 22,
	// 22,
	// 22,
	// 22,
	// 21,
	// 21,
	// 19
	// ];

// 	if(isset($_POST['submit'])){
// 		$input = $_POST['date'];

// 		$input = explode('/', $input);
// 		$dd = $input[0]/1;
// 		$mm = $input[1];
// 		$yyyy = $input[2];

// 		echo $months[$mm-1] . ' ' . $dd . ', ' . $yyyy; 

// }

		if(isset($_POST['submit'])){
		$input = $_POST['date'];

		$input = explode('/', $input);
		$dd = $input[0]/1;
		$mm = $input[1]/1;
		$yyyy = $input[2];

		echo $months[$mm-1] . ' ' . $dd . ', ' . $yyyy; 

		// if ($mm == 01 && $dd >= 20 || $mm == 02 && $dd <= 18 ){
		// 	echo "<br>Zodiac is " . $zodiac[0] . "<br>";
		// }

		if ($dd >= $zodiac_start_days[$mm-1]){

		echo "<br>Zodiac is " . $zodiac[$mm-1] . "<br>";

		} else {
			echo "<br>Zodiac is " . $zodiac[$mm-1] . "<br>";
		}
		// for($i=0;$i<12;i++){
		// 	if ($mm == 01 && $dd >= 20 || $mm == 02 && $dd <= 18 ){
		// 	echo "<br>Zodiac is " . $zodiac[0] . "<br>";
		// 	}
		// }




		

	}




 ?>
	

</body>
</html>