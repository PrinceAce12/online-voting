<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <title>Voting | Login</title>
    
</head>
<body>
    <div class="container">
   

        
        <div class="box-left">
           <a href="javascript:history.back()" class="back-button">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M15.41 16.59 10.83 12l4.58-4.59L14 6l-6 6 6 6z"></path>
    </svg>
    Back
</a>


            <?php
            $errorMsg = "";
            if (isset($_GET['error'])) {
                $errors = $_GET['error'];
                if ($errors === "emptyInput") {
                    $errorMsg = "Please Fill All Required Fields!";
                } elseif ($errors === "emptyId") {
                    $errorMsg = "Please Enter your ID!";
                } elseif ($errors === "emptyPassword") {
                    $errorMsg = "Please Enter your Password!";
                } elseif ($errors === "incorrectid") {
                    $errorMsg = "Please Provide Valid ID!";
                } elseif ($errors === "incorrectpassword") {
                    $errorMsg = "Please Provide Valid Password!";
                }
            }
            ?>

            <form action="../../functions-include/login.include.php" method="post" class="form">
                <label class="loginHeader" onselectstart = "return false;">VOTER | LOGIN</label>
                <div class="inputFields">
                    <label for="id" class="idLabel" onselectstart = "return false;">ID</label>
                    <input type="number" name="id" id="id" class="id" placeholder="Enter your ID number..." oninput="limitInput(this)" autofocus>
                </div>
                <div class="inputFields">
                    <label for="password" class="passwordLabel" onselectstart = "return false;">Password</label>
                    <input type="password" name="password" id="password" class="password" placeholder="Enter your password...">
                    <input type="checkbox" id="toggle" name="toggle"> <label for="toggle" onselectstart = "return false;">Show Password</label>
                </div>
                <input type="submit" name="submit" class="btn" value="Login">
                
                <p id="errorMsg" class="errorMsg" onselectstart = "return false;"><?php echo $errorMsg; ?></p>
            </form>
           
        </div>
        <div class="box-right">
            <h2>Welcome to the Voting System</h2>
            <p>Participate in fair and transparent elections through our secure platform. Your voice matters!</p>
            <a href="#">Learn more about the voting process</a>
        </div>
    </div>

    <script>
        function limitInput(element) {
            // limit 11 number only 
            element.value = element.value.replace(/[^0-9]/g, ''); // only digit
            if (element.value.length > 11) {
                element.value = element.value.slice(0, 11); // limit to 11 only
            }
        }
        
        
            const password = document.getElementById('password');
            const checkbox = document.getElementById('toggle');
            
        checkbox.addEventListener('change', function(){
            if(this.checked){
                password.type = "text";
            }else{
                password.type = "password";
            }
        });
        const msg = document.getElementById('errorMsg');
        document.getElementById('id').addEventListener('input', function(){
            msg.style.display = 'none';
        });

        
    </script>
</body>
</html>
