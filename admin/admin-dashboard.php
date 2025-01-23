<?php require_once('../functions-include/databaseConnection.php');
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
</head>
<body>
<table border = "1">
    
    <thead>
        <tr>
        <td>ID</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Role</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Student ID</td>
        <td>Date Created</td>
        </tr>
    </thead>

    <tbody>
    <?php
    
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
        
            <td><?php echo $row["user_id"]; ?></td>
            <td><?php echo $row["full_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["password_hash"]; ?></td>
            <td><?php echo $row["role"]; ?></td>
            <td><?php echo $row["age"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["student_id"]; ?></td>
            <td><?php echo $row["created_at"]; }?></td>
        </tr>
    </tbody>
</table>
</body>
</html>