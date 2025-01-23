<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "voting_system";
$conn = mysqli_connect($servername,$username,$password,$databasename);
if(!$conn){
    die("Error Connection : " . mysqli_connect_error());
}