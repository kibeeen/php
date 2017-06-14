<?php 

session_start();

// echo $_SESSION['username'] = $_POST['username'];
// echo '<br>';
// echo $_SESSION['password'] = $_POST['password'];

$username =htmlspecialchars($_POST['username']);
$password =htmlspecialchars($_POST['password']);

if(authenticate($username,$password)){
	echo 'User is valid';

	$_SESSION["user"] = $username;
} else {
	echo 'Incorrect login details.';
}


function authenticate($username,$password){
	if($username == 'admin' && $password == 'secret'){
		return true;
	} else {
		return false;
	}

}


function logout($username,$password){
	if($username == 'admin' && $password == 'secret'){
		return true;
	} else {
		return false;
	}

}

 ?>
