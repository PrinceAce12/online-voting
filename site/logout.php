<?php 
require '../functions-include/functions.include.php'; 
require '../functions-include/databaseConnection.php'; 
session_destroy();
header('Location: dashboard.php');
exit();
?>