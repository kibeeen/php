<?php 

	function check_match($name1,$name2){

		$name1_array = str_split(strtolower($name1));
		$name2_array = str_split(strtolower($name2));
		$count = 0;

		// NAME 1
		for ($i=0;$i<count($name1_array);$i++) {

			$has_match = 'false';
			// echo "<br><b> Searching letter " . $name1_array[$i] . " in " . $name2 . "..</b><br>";

			for ($j=0;$j<count($name2_array);$j++) {
			// echo "      Comparing " . $name1_array[$i] . " and " . $name2_array[$j]  . " -- matched? :: nope<br>";

				if($name1_array[$i] == $name2_array[$j]) {
					$has_match = 'true';
					// echo "      Comparing " . $name1_array[$i] . " and " . $name2_array[$j]  . " -- <b>MATCHED!!</b><br>";
					
				}
			}
			if ($has_match == 'false'){
				$count++;
				// echo "<br>[ " . $name1_array[$i] . " ] is NOT found in the name " . $name2 . "<br>";
			}
		}

		return $count;
	}





 ?>