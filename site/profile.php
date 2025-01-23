<?php 
require '../functions-include/functions.include.php'; 
require '../functions-include/databaseConnection.php'; 

 $sql = "SELECT * FROM users";
 $result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if(isset($_SESSION['voters-id']) == $row['student_id']){
    header("Location: ../site/dashboard.php");
    exit();
}
?>