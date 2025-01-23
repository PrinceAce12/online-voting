<?php 


include('databaseConnection.php');
session_start();
//////////////////////////////////////////////////////////////////////////////////////////////

function userLogin($conn, $id, $pass) {
    $loginQuery = "SELECT * FROM users WHERE student_id = ?";
    $stmt = $conn->prepare($loginQuery);
    $stmt->bind_param("s", $id); 
    $stmt->execute();
    $result = $stmt->get_result();
    
    if(empty($id) && empty($pass)){
        header('Location: ../voter/login/login.php?error=emptyInput');
     }elseif(empty($id) && !empty($pass)){
        header('Location: ../voter/login/login.php?error=emptyId');
     }elseif(!empty($id) && empty($pass)){
        header('Location: ../voter/login/login.php?error=emptyPassword');
     }else{
    if ($row = $result->fetch_assoc()) {
        // Checking password
        if ($row['password_hash'] === $pass) {
            //plain password
            $_SESSION['voters-id'] = $row['student_id'];
            header("Location: ../site/profile.php");
        } elseif (password_verify($pass, $row['password_hash'])) {
            // hashed password
            $_SESSION['voters-id'] = $row['student_id'];
            header("Location: ../site/profile.php");
        } else {
            header("Location: ../voter/login/login.php?error=incorrectpassword");
            exit();
        }
    } else {
header("Location: ../voter/login/login.php?error=incorrectid");
exit();
    }
}
}

