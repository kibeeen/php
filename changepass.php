<?php 
session_start();

if(isset($_POST['changepass']))
	change_pass();

function change_pass(){

	$string = file_get_contents("users.json");
	if ($string)
			$array = json_decode($string, true);

		$username = $_POST['username'];
		$old_password = $_POST['oldpass'];
		$new_password = $_POST['newpass'];
		$confirm_password = $_POST['confirmpass'];

		$index;

		foreach ($array as $key => $value) {
			if($value['username'] == $username
				&& $value['password'] == $old_password
				&& $new_password == $confirm_password){

				$index = $key;
				echo "password changed" . "<br>";
				// echo $index;

				$array[$index]['password'] = $new_password;
				$fp = fopen('users.json', 'w');
				fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));
				fclose($fp);


			}
		}


}

 ?>

<form method="POST" id="changepass" action=''>

Username: <input type='text' name='username'><br>
Old Password: <input type='password' name='oldpass'><br>
New Password: <input type='password' name='newpass'><br>
Confirm Password: <input type='password' name='confirmpass'><br>
<input type='submit' name='changepass' value='Submit'><br>

</form>