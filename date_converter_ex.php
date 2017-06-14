<?php 

	function date_converter($input,$dd,$mm,$yyyy){
	$input = explode('/', $input);
	$dd = $input[0]/1;
	$mm = $input[1];
	$yyyy = $input[2];

	return $finaldate = $months[$mm-1] . ' ' . $dd . ', ' . $yyyy; 

}



 ?>