<?php require_once('../functions-include/databaseConnection.php');
session_start();
$studentId = $_SESSION['userId'];
 $fullname = $_SESSION['userFullName'];
 $email = $_SESSION['email'];
 $password = $_SESSION['password'];
 $role = $_POST['role'];
 $age = $_POST['age'];
 $gender = $_POST['userGender'];
 $password_hash = password_hash($password, PASSWORD_DEFAULT);


 $sql = "INSERT INTO users (full_name, email, password_hash, role, gender, age,student_id) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssii", $fullname, $email, $password_hash,$role, $gender, $age,$studentId);

if ($stmt->execute()) {
    session_destroy(); 
    header("Location: admin-dashboard.php");
} else {
    echo "Error: " . $stmt->error;
}
?>