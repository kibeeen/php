<?php 

	session_start();

	echo $_SESSION['username'];
	echo $_SESSION['usermatch'];
	
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
			 )); // products database
	
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
	} // <-- end of /create_dropdown


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
	// checks the user if logged in or not

	if(isset($_POST['login'])) {

		$user_match = 'false'; 
		$_SESSION['usermatch'] = $user_match;
		
		foreach ($users as $user) {
		  	if($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
				$username = $_POST['username'];
				$_SESSION['username'] = $username;
				$user_match = 'true';
				$_SESSION['usermatch'] = $user_match;
			} 

			else {

				if($_POST['username'] != 'Guest' && $user_match != 'true'){
					$username = 'Guest';
					$error_msg[0] = "Not a valid combination";
				}

				elseif ($user_match == 'true') {
					$username = $_POST['username'];
					$_SESSION['username'] = $username;
				}
			}

		} // end of foreach


		} else {

			if ($_SESSION['usermatch'] == 'true'){
					$_SESSION['usermatch'];
					$username = $_SESSION['username'];
			}

			else {

			$username = 'Guest';
			$user_match = 'true'; 
			$_SESSION['user_match'] = $user_match;
			
			$_SESSION['username'] = $username;
			$error_msg[0] = '';

			}
		} // <-- end of /user_scanner 

	

	function check_user($username){
		if ($username == 'Guest'){
			echo "<span class='welcome-text'>Hello <b>";
			echo $_SESSION['username']; 
			echo "</b>, Welcome to Chiks EnJoy Delivery! ";
			echo "<a data-toggle='modal' href='#modal-login' class='logme-in'>[ log-in ] </a>";
			echo "<a data-toggle='modal' href='#modal-register' class='logme-in'>[ register ] </a></span>";

			
		} else {
			echo "<span class='welcome-text'>Hello <b>"; 
			echo $_SESSION['username']; 
			echo "</b>, Welcome to Chiks EnJoy Delivery!!";
			echo "<form class='logmeout' action='changepass.php' method='POST'>
						<button>[ change password ] </button>
				  </form>";
			echo "<form class='logmeout' action='logout.php' method='POST'>
						<button>[ logout ]</button>
				  </form></span>";
			 $user_match = $_SESSION['usermatch']; 




		}
	} // <-- end of /user_checker

	function error_login($error_msg){
		echo $error_msg[0];
	}

	// register new user
	function create_account($users){
		$new_user = [];
		$new_user['username'] = $_POST['new_username'];
		$new_user['password'] = $_POST['new_password'];
		$new_user['fullname'] = $_POST['fullname'];
		$new_user['email'] = $_POST['new_email'];
		$users[] = $new_user;

		$fp = fopen('users.json', 'w');
		fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
		fclose($fp);

		header('location:index.php');
	}


 ?>