<?php
	//1. Collect Form Data from Fields
	$title = $_POST["title"];
	$initials = $_POST["initials"];
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$dob = $_POST["dob"];

	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$status = $_POST["status"];
	$mbphone = $_POST["mbphone"];
	$ldphone = $_POST["ldphone"];

	$email = $_POST["email"];
	$nic = $_POST["nic"];
	/*$height = $_POST["height"];
	$weight = $_POST["weight"];*/
	$password = $_POST["password"];
	$photo = $_POST["photo"];

	//2. Process Data
	//a. Validation 
	$errors = "";
	if(!$fname){
		$errors .="Name should Enter.<br/>";
	}
	if(strlen($fname) < 4){
		$errors .= "Name should have at least four characters.<br/>";
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors.= "Invalid Email format.<br/>";
	}
	if($errors){
		header("Location: register.php?errors=".$errors);
	}
	//b. Non Fillable Data
	//$reg_date = date('Y-m-d');	//Generated Value
	$status1 = '1';
	$role = 'u';

	// File Uploading
	$destFile = "uploads/".date('Ymdhis'). basename( $_FILES["photo"]["name"]);
	$sourceFile = $_FILES["photo"]["tmp_name"];

	if (move_uploaded_file($sourceFile, $destFile)) {
		$photo = $destFile;
	} else {
		header("Location: register.php?errors=File Upload Failed");
	}
	
	//3. Store Data
	require_once('includes/db.php');
	$sql = "INSERT INTO abcregister ".
			"(title, initials, password, fname, lname, status1, role, dob, age, gender,status,mbphone,ldphone,email,nic,photo) ".
			" VALUES ('$title','$initials',md5('$password'),'$fname','$lname','$status1', '$role', '$dob','$age', '$gender','$status','$mbphone','$ldphone','$email','$nic','$photo')";
	
	if(mysqli_query($con, $sql)){

		//Add mail server
		// the message
		//$msg = "Thank You for Register";

		// use wordwrap() if lines are longer than 70 characters
		//$msg = wordwrap($msg,70);

		// send email
		//echo mail($mail,"Welcome to CarSales",$msg);*/

		//SMS Sending
		//$user = "94766222182";
		//$password = "7555";
		//$text = urlencode("Hi $name,Thank You for Register");
		//$to = "94".$mobile;
		
		//$baseurl ="http://www.textit.biz/sendmsg";
		//$url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
	//	$ret = file($url);
		
		//$res= explode(":",$ret[0]);
		
		/*if (trim($res[0])=="OK")
		{
			echo "Message Sent - ID : ".$res[1];
		}
		else
		{
			echo "Sent Failed - Error : ".$res[1];
		}*/

		header("Location: thankyou.php");
	}else{ 
		echo  "Fail: ".mysqli_error($con);
	}
	
	
?>