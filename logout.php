<?php
	if(!isset($_SESSION)){
		session_start();
	}
	
	//1. Remove all Session Variables
	session_unset(); 
	//2. Destroy Session Object
    session_destroy();
	
	header("Location: index.php");
	
?>