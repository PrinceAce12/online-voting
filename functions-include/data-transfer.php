<?php 
	require_once('admin-include.php');
	 $id = "";
	 $name = "";
	 $email = "";
	 $pass = "";
	 $status = "";
	 $gender = "";
	function addUser($userId,$userFullName){
		$id = $userId;
		$name = $userFullName;
	}
	function addUser1($userEmail,$userPassword){
		$email = $userEmail;
		$pass = $userPassword;
	}
	function addUser2($userStatus,$userGender){
		$status = $userStatus;
		$gender = $userGender;
	}
	function adminAdd1(){
		$userId1 = $id;
		$userFullName1 = $name;
	    $userEmail1 = $email;
		$userPassword1 = $pass ;
		$userStatus1 = $status;
		$userGender1 = $gender;

	}
 ?>