<?php
	if(!isset($_SESSION)){
		session_start();
	}
	
	
	//1. Collect Form Data from Fields
	$email = $_POST["email"];
	$password = $_POST["password"];
	//2. Process Data
	//a. Validation 
	$errors = "";
	if(strlen($password) < 4){
		$errors .= "Password should have at least four characters.<br/>";
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors.= "Invalid Email format.<br/>";
	}
	if($errors){
		header("Location: login.php?errors=".$errors);
	}
	
	//DB Connection
	require_once("includes/db.php");
	$sql = "SELECT * FROM abcregister WHERE email='$email' AND password=md5('$password')";
	
	$result = mysqli_query($con, $sql);
	if($row = mysqli_fetch_array($result)){
		//Login Success (Authorized)
		$_SESSION["MID"] = $row["id"];
		$_SESSION["NAME"] = $row["lname"];
		$_SESSION["ROLE"] = $row["role"];
		$_SESSION["EMAIL"] = $row["email"];
		
		header("Location: index.php");
	}else {
		//Login Fail (Non-Authorized)
		header("Location: login.php?errors=Username or Password is Incorrect!");
	}
	
	
	
	
?>