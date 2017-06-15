<?php 

	$items = array (

			 array('title' => 'Hotchix 1',
			 	   'name' => 'Petra Mahalimuyak',
				   'desc' => '...',
				   'price' => 'Php 350,000',
				   'category' => "student",
				   'image' => "<img src='items/student1.jpg'>",
				   
			 ),

			 array('title' => 'Hotchix 2',
			 	   'name' => 'Petra Mahalimuyak',
				   'desc' => '...',
				   'price' => 'Php 1,000,000',
				   'category' => "fine dining",
				   'image' => "<img src='items/fine1.jpg'>",
				   
			 ),

			 array('title' => 'Ala Carte',
			 	   'name' => 'Petra Mahalimuyak',
				   'desc' => '...',
				   'price' => 'Php 150,000',
				   'category' => "ala carte",
				   'image' => "<img src='items/fine2.jpg'>",
				   
			 ),

			 array('title' => 'Value Meals',
			 	   'name' => 'Petra Mahalimuyak',
				   'desc' => '...',
				   'price' => 'Php 300,000',
				   'category' => "ala carte",
				   'image' => "<img src='items/fine3.jpg'>",
				   
			 ),

			 array('title' => 'Snacks',
			 	   'name' => 'Petra Mahalimuyak',
				   'desc' => '...',
				   'price' => 'Php 750,000',
				   'category' => "fine dining",
				   'image' => "<img src='items/student2.jpg'>",
			 ),

			 array('title' => 'Barkada Package',
			 	   'name' => 'The Power Puff Girls',
				   'desc' => "Chix Enjoy's deliciously healthy Group Meals are specially made to stuff your whole #squad. Our variety of offerings will definitely make your group burp with great meal experience.",
				   'price' => 'Php 2,000,000',
				   'category' => "group meals",
				   'image' => "<img src='items/groupmeals1.jpg'>",
			 ));

	$category = array_column($items, 'category');
	//print_r($category);

	function create_dropdown($name,$options){
		$output = "<select name='$name'>";
		$output .= "<option value='All'>All</option>";
		foreach ($options as $value) {
			if(isset($_POST[$name]) && $_POST[$name] == $value){
				$output .= "<option selected value='$value'>$value</option>";
			} else {
				$output .= "<option value='$value'>$value</option>";
			}	
		}

		$output .= "</select>";
		return $output;
	}




 ?>

<!DOCTYPE html>
<html>
<head>

	<title></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>

		<style>

		* {
			box-sizing: border-box;
			padding: 10px;
		}

		body {
			background-image: url('items/gradient.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			
		}

		img {
			width: 100%;
			padding: 0px;
		}

		.item-wrapper {
			height: 200px;
			width: 500px;
			box-sizing: border-box;
			margin: 5px;
			border-radius: 10px;
			background-color: #f8aa00;
			padding: 0px;

		}

		.searchbox-wrapper {
			text-align: center;
		}

		.searchbox-wrapper > form + input {
			height: 20px;
		}

		.img {
	/*		border: 3px dashed blue;*/
			width: 40%;
			padding: 0;
			margin-right: 5px;
			overflow: hidden;
			height: 100%;
			border-radius: 10px 0 0 10px;

		}

		.desc {
	/*		border: 3px double gold;*/
			float: right;
			width: 60%;
			padding-top: 0;
		}

		.title {
			padding-left: 0;
			margin-top: 0;
			font-size: 30px;
			color: #632913;
			font-family: Nunito;
			font-weight: bolder;

		}


	</style>
</head>


<body>
	<div class='container'>

		<div class='searchbox-wrapper'>

			<?php 

				$category = array_unique($category);
				echo "<form method='POST' action=''>";
				echo create_dropdown('category',$category);
				echo "<input type='submit' name='submit' value='Search'></form>";

				function display_chix($item){

					echo "<div class='item-wrapper col-md-6 col-sm-6'>";

					foreach ($item as $key => $value) {

						 if ($key == 'title') {
							echo "<div class='desc'>";
							echo "<h1 class='title'>" . $value . "</h1>";

							} elseif ($key == 'image'){
								echo "</div>"; // ::closing:: div class = desc

								echo "<div class='img'>";
								echo  $value;

							 	echo "</div>"; // ::closing:: div class = image 

								} else {
									echo $value . "<br>";
								}

					} 

					echo "</div>"; // ::closing:: div class = item-wrapper

				} // display_chix ::end

			 ?>

		 </div>


	<?php 
		foreach ($items as $item) {
			if (!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All') {
					display_chix($item);
				}} 
	?>

	  </div><!--  div container -->

</body>
</html>