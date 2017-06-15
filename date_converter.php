<!DOCTYPE html>
<html>
<head>
	<title>Alamin ang iyong Kapalaran</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Pangolin' rel='stylesheet' type='text/css'>

<style>
body {
	background-image: url('zodiac.jpg');
	background-size: cover;

	
}

.wrapper {
	margin-top: 30px;
	text-align: center;
}

h3 {
	font-family: Raleway;
	font-size: 50px;
	color: white;
	margin-right: 29px;
}

h3 + br + span + br + br + input{
	text-align: center;
	height: 50px;
	width: 200px;
	border-radius: 5px;
	border: 2px solid midnightblue;
	margin-right: 29px;
}

.btn {
	padding: 5px 20px;
	margin-right: 29px;
	font-size: 20px;
	font-family: 'Raleway';
	border-color: transparent;
	background-color: transparent;
	font-weight: bolder;
	color: white;
}

.btn:hover, btn:focus {
	padding: 5px 20px;
	margin-right: 29px;
	font-family: 'Raleway';
	border-color: transparent;
	background-color: transparent;
	font-weight: bolder;
	color: white;
}



.names {
	font-family: 'Gochi Hand';
	font-size: 50px;
	letter-spacing: 2px;
}

.and {
	font-family: 'Gochi Hand';
	font-size: 20px;
	letter-spacing: 2px;
	padding: 15px;
}

.flames {

	font-family: 'Gochi Hand';
	font-size: 50px;
	letter-spacing: 2px;
	color: salmon;
}

.caption {

	margin-right: 29px;
	font-family: 'Raleway';
	letter-spacing: 2px;
	color: white;
}

.date {

	margin-right: 29px;
	font-family: 'Raleway';
	color: white;
	font-size: 20px;
}


.ans {
	margin-right: 29px;
	font-family: 'Raleway';
	font-size: 80px;
	font-weight: bolder;
	color: white;
}

h3 {
	margin-bottom: 0;
}

b {
	color: gold;
}


</style>
</head>

<body>
<div class='container'>
	<div class='wrapper'>

	<form action="" method="POST">
	<h3> Anong Hayop Ako? </h3>
		<br>
		<span class='caption'>Ilagay ang araw ng kapanganakan</span><br><br>
		<input type="text" name="date" placeholder="dd/mm/yyyy"><br><br>
		<input class='btn btn-default' type="submit" name="submit" value="Alamin!"><br>
		
		
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
	'Sagittarius',
	'Capricorn',
	];

	$img = [
	'zodiacs/1.jpg',
	'zodiacs/2.jpg',
	'zodiacs/3.jpg',
	'zodiacs/4.jpg',
	'zodiacs/5.jpg',
	'zodiacs/6.jpg',
	'zodiacs/7.jpg',
	'zodiacs/8.jpg',
	'zodiacs/9.jpg',
	'zodiacs/10.jpg',
	'zodiacs/11.jpg',
	'zodiacs/12.jpg',
	'zodiacs/1.jpg',
	];

	$zodiac_start_days = [
	20, // Aquarius 	: Jan 20 - Feb 18
	19,	// Pisces   	: Feb 19 - Mar 20
	21,	// Aries    	: Mar 21 - Apr 19
	20, // Taurus		: Apr 20 - May 20
	21, // Gemini 		: May 21 - Jun 20
	21, // Cancer 		: Jun 21 - Jul 22
	23, // Leo 			: Jul 23 - Aug 22
	23, // Virgo 		: Aug 23 - Sep 22
	23, // Libra 		: Sep 23 - Oct 22
	23, // Scorpio		: Oct 23 - Nov 21
	22, // Sagittarius 	: Nov 22 - Dec 21
	22, // Capricorn   	: Dec 22 - Jan 19
	];

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
		$dd = $input[0]/1; // removes 0 from the day
		$mm = $input[1]/1; // removes 0 from the month
		$yyyy = $input[2];

		echo "<br><span class='date'>Pinanganak ka noong: <b>" . $months[$mm-1] . ' ' . $dd . ', ' . $yyyy . "</b></span>"; 

		// if ($mm == 01 && $dd >= 20 || $mm == 02 && $dd <= 18 ){
		// 	echo "<br>Zodiac is " . $zodiac[0] . "<br>";
		// }

		if ($dd >= $zodiac_start_days[$mm-1]){

		echo "<br><span class='ans'>Ikaw ay isang " . $zodiac[$mm] . "</span><br>";
		echo "<body style='background-image: url($img[$mm]); background-size: 130%; background-repeat: no-repeat;'>";

		} else {
			echo "<br><span class='ans'>Ikaw ay isang " . $zodiac[$mm-1] . "</span><br>";
			echo "<body style='background-image: url($img[$mm]); background-size: 130%; background-repeat: no-repeat;''>";
		}
		// for($i=0;$i<12;i++){
		// 	if ($mm == 01 && $dd >= 20 || $mm == 02 && $dd <= 18 ){
		// 	echo "<br>Zodiac is " . $zodiac[0] . "<br>";
		// 	}
		// }




		

	}




 ?>
	</div>
	</div>

</body>
</html>