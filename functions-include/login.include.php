<?php 

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$pass = $_POST['password'];
	
	require_once 'databaseConnection.php' ;
	require_once 'functions.include.php' ;
	userLogin($conn,$id,$pass);
}else{
	header('Location: voterLogin/login.php');
}

