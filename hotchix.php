<?php 

	session_start();

	// users array
	// $users = [
	// 	['username' => 'admin',
	// 	 'password' => 'admin',
	// 	 'fullname' => 'admin',
	// 	 'email' => 'admin@echiksenjoy.com'],

	// 	['username' => 'kibeeen',
	// 	 'password' => 'qwe123',
	// 	 'fullname' => 'kevin chavez',
	// 	 'email' => 'kevincchavez@echiksenjoy.com'],
	// ];

	//initial run :: create *.json file
	// $fp = fopen('users.json', 'w');
	// fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
	// fclose($fp);

	//retrieve data form *.json file
	$string = file_get_contents('users.json');
	$users = json_decode($string, true);

	// register new user
	if (isset($_POST['register'])) {

		$new_user = [];
		$new_user['username'] = $_POST['new_username'];
		$new_user['password'] = $_POST['new_password'];
		$new_user['fullname'] = $_POST['fullname'];
		$new_user['email'] = $_POST['new_email'];
		$users[] = $new_user;

		$fp = fopen('users.json', 'w');
		fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
		fclose($fp);
	}

	//log in
	if(isset($_POST['login'])){
		foreach ($users as $user) {
			if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){

				$username = $_POST['username'];
				$_SESSION['username'] = $username;

				// header('location:hotchix.php');	

			} else {
				$username = '';

			}
		}
	} else {
		$username = 'Guest';
		$_SESSION['username'] = $username;
	}
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

	function check_user($username){
		if ($username == 'Guest'){
			echo "<span class='welcome-text'>Hello <b>";
			echo $_SESSION['username']; 
			echo "</b>, Welcome to Jollibee Chiks EnJoy! ";
			echo "<a data-toggle='modal' href='#modal-login' class='logme-in'>[ log-in ] </a>";
			echo "<a data-toggle='modal' href='#modal-register' class='logme-in'>[ register ] </a></span>";

			
		} else {
			echo "<span class='welcome-text'>Hello <b>"; 
			echo $_SESSION['username']; 
			echo "</b>, Welcome to Jollibee Chiks EnJoy!";
			echo "<form class='logmeout' action='logout.php' method='POST'>
						<button>[ logout ]</button>
				  </form></span>";
		}
	}

	// function logmeout(){
	// 	session_destroy();
	// }

 ?>

<!DOCTYPE html>
<html>
<head>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="hotchix.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title></title>


	<div class="container">
		<div class="top-wrapper">
			<img class='logo' src='items/logo.png'>
			


			<?php check_user($username)?>



		</div>

		<nav class="navbar navbar-inverse">
		  <div class="container">
	<!-- 	    <div class="navbar-header">
		      <a class="navbar-brand" href="#">WebSiteName</a>
		    </div> -->
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="#">Value Meals</a></li>
		      <li><a href="#">Group Deals</a></li>
		      <li><a href="#">Live Streaming</a></li>
		      <li><a href="#">Chiks Delivery!</a></li>
		    </ul>
		  </div>
		</nav>	
	</div>

</head>


<body>
	<div class='container'>

		<div class='searchbox-wrapper'>

			<?php // 

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




		<?php // submit scanner
			foreach ($items as $item) {
				if (!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All') {
						display_chix($item);
					}} 
		?>

	</div><!--  div container -->

	


	<div  id='modal-login' class="modal fade" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->

	      <div class="modal-content">
	        <div class="modal-header">
	          	<button type="button" class="close" data-dismiss="modal">&times;</button>
	         	 <h4 class="modal-title">Log-in to your account</h4>
	        </div>
	        <div class="modal-body">

	         	 <form action="" method="POST">
					Username:<br>
						<input type="text" name='username'><br>
					Password:<br>
						<input type="password" name='password'><br><br>		
						<input type="submit" name="login" value="Log-in"><br><br>
				</form>

	        </div>
	      </div>
	      </div>
	      </div>


	<div id='modal-register' class="modal fade" role="dialog">
	    <div class="modal-dialog">

	      <div class="modal-content">
	        <div class="modal-header">
	          	<button type="button" class="close" data-dismiss="modal">&times;</button>
	         	 <h4 class="modal-title">Register</h4>
	        </div>
	        <div class="modal-body">

	         	 <form action="" method="POST">
		         	Full Name:<br>
						<input type="text" name='fullname'><br>
					Email Address:<br>
						<input type="text" name='new_email'><br>
					Username:<br>
						<input type="text" name='new_username'><br>
					Password:<br>
						<input type="password" name='new_password'><br><br>		
						<input type="submit" name="register" value="Register"><br><br>
				</form>

	        </div>
	      </div>
      
	    </div>
  	</div>

</body>
</html>