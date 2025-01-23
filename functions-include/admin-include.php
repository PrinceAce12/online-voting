?php 
require_once('data-transfer.php');
	if(isset($_POST['submit'])){
		$userId = $_POST['userId'];
		$userFullName = $_POST['userFullName'];
		$userEmail = $_POST['userEmail'];
		$userPassword = $_POST['userPassword'];
		$userStatus = $_POST['userStatus'];
		$userGender = $_POST['genderResult'];
	}
 ?>