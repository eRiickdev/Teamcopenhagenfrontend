<?php
session_start();
	
	$username = "";
 	$email = "";
 	$password = "";
 	$password = md5($password);
 	$errors = array();

$db = mysqli_connect("localhost", "root", "", "copenhagen");
if(!$db){
	die("unable to connect: " . mysqli_error($db));
}

	

// signup
if(isset($_POST['submitBtn'])){

	$username = $_POST['username'];
 	$email = $_POST['email'];
 	$password = $_POST['password'];
 	$password = md5($password);

 	$s = mysqli_query($db, "SELECT * FROM users WHERE username = '{$username}'");
	if(!$s){
	die("unable to connect: " .mysqli_error($db));
}


$num = mysqli_num_rows($s);
if($num == 1){
	array_push($errors, "Username exists");
} else{
	$reg = mysqli_query($db, "INSERT INTO users(username, email, password) 
		VALUES('$username', '$email', '$password')");
	if(!$reg){
		die("unable to connect: " . mysqli_error($db));
	}
		header("Location: index.php");
}

}

// login

if(isset($_POST['loginBtn'])){
	$username = $_POST['uname'];
 	$password = $_POST['loginPassword'];

 	if(empty($username)){
 		array_push($errors, "Username is required");
 	}

 	if(empty($password)){
 		array_push($errors, "Password is required");
 	}

 	if(count($errors) == 0){
 		$password = md5($password);
 		$query = mysqli_query($db, "SELECT * FROM users 
 			WHERE username = '$username' AND password = '$password' ");

 		if(mysqli_num_rows($query) == 1){
 			$_SESSION['username'] = $username;
 			$_SESSION['success'] = "You are now logged in";
 			header("Location: home.php");
 		} else{
 			array_push($errors, "Wrong Username/Password");
 		}
 	}
}


if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("Location: index.php");
}
 
?>