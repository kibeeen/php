<?php 



if(isset($_POST['counter'])) {
	$counter = $_POST['counter'] + 1;

} else {
	$counter = 0;
}



$days = ['1' => 'A Partridge in a Pear Tree',
		'2' => 'Two Turtle Doves',
		'3' => 'Three French Hens',
		'4' => 'Four Calling Birds',
		'5' => 'Five Golden Rings',
		'6' => 'Six Geese a Laying',
		'7' => 'Seven Swans a Swimming',
		'8' => 'Eight Maids a Milking',
		'9' => 'Nine Ladies Dancing',
		'10' => 'Ten Lords a Leaping',
		'11' => 'Eleven Pipers Piping',
		'12' => '12 Drummers Drumming',
		];


$dayz = ['first', 
		 'second', 
		 'third', 
		 'fourth', 
		 'fifth', 
		 'sixth', 
		 'seventh', 
		 'eighth', 
		 'ninth',
    	 'tenth', 
    	 'eleventh', 
    	 'twelfth',
		];

$giff = ['A Partridge in a Pear Tree',
		'Two Turtle Doves',
		'Three French Hens',
		'Four Calling Birds',
		'Five Golden Rings',
		'Six Geese a Laying',
		'Seven Swans a Swimming',
		'Eight Maids a Milking',
		'Nine Ladies Dancing',
		'Ten Lords a Leaping',
		'Eleven Pipers Piping',
		'12 Drummers Drumming',
		];

// $giff1 = ['12 Drummers Drumming',
// 		'Eleven Pipers Piping',
// 		'Three French Hens',
// 		'Four Calling Birds',
// 		'Five Golden Rings',
// 		'Six Geese a Laying',
// 		'Seven Swans a Swimming',
// 		'Eight Maids a Milking',
// 		'Nine Ladies Dancing',
// 		'Ten Lords a Leaping',
// 		'Two Turtle Doves',
// 		'A Partridge in a Pear Tree',
// 		];


// $num1 = 0;

// echo "num1: " . $num1 . "<br>"; 

foreach ($days as $day_num => $gifts) {

	if ($day_num == $counter) {

		echo "<br>On the ". $dayz[$counter-1] . " day of Christmas<br>My true love sent to me: <br><br>";

		$a = 12 - ($counter-1);
		$b = 12 - $a;

		

		for ($i = 0; $i <= $b; $i++) {
			// echo "b = " . $b . "<br>";


			echo "<b>". $giff[$i]. "</b><br>";


		// echo "i = " . $i . "<br>";



		} 



		// $a = 12 - ($counter+1);

		// for ($i = 12; $a <= $i; $i--) {
		// echo "<b>". $giff[$i] . "</b><br>";
	
			
		// }

	

		



		
	} 


}


 ?>


