<?php require_once('../functions-include/databaseConnection.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["userId"])){
        header("Location: first-register.php?error=emptyid");
    }elseif(empty($_POST["userFullName"])){
        header("Location: first-register.php?error=emptyname");
    }else{
    $_SESSION["userId"] = $_POST["userId"];
    $_SESSION["userFullName"] = $_POST["userFullName"];
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
    
    @font-face {
            font-family: 'font';
            src: url('./font/NolascoSans.ttf') format('truetype');
            font-style: normal;
            font-weight: normal;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'font',sans-serif;
            font-weight: bold;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
        }
        .container {
            display: flex;
            width: 90%;
            max-width: 900px;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .box-left {
            flex: 1;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
        }
        .box-right {
            flex: 1;
            background: linear-gradient(to top right ,dodgerblue,blue);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
        }
        
        .box-right h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .box-right p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
        .box-right a {
            position: relative;
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }.box-right a::after {
	    content: '';
	    position: absolute;
	    left: 0;
	    bottom: -10px;
	    width: 100%;
	    height: 3px;
	    background-color: white;
	    transform: scaleX(0);
	    transition: transform 0.5s ease-out;
	    border-radius: 30px;
        }
        .box-right a:hover::after {
	    transform-origin: bottom left;
	    transform: scaleX(1);
	    border-radius: 30px;
}
        .inputFields {
            margin-top: 20px;
            position: relative;
        }
        input[type="number"]::-webkit-inner-spin-button {
            appearance: none;
        }
        #email, #password{
            display: block;
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 15px;
            width: 100%;
            font-size: 1rem;
            margin-bottom: 20px;
            outline: none;
        }
        .eye img{
            position: absolute;
            top:54.5%;
            height: 4%;
            left:44%;
        }
        .btn {
            display: block;
            border: none;
            background: #2575fc;
            color: white;
            border-radius: 10px;
            height: 50px;
            width: 100%;
            font-size: 1.25rem;
            cursor: pointer;
            margin-top: 20px;
            text-transform: uppercase;
        }
        .btn:hover {
            background:rgb(44, 58, 255);
         
        }
        .loginHeader {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        .errorMsg {
            color: red;
            text-align: center;
            margin-top: 10px;
            font-size: 1rem;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
            }
            .box-left, .box-right {
                flex: unset;
                width: 100%;
            }
            .box-right {
                padding: 20px;
            }
        }
    
   </style>
    <title>Register | Voter</title>
    
</head>
<body>
    <div class="container">

        
        <div class="box-left">
            <form action="third-register.php" method="post" class="form">
                <label class="loginHeader" onselectstart = "return false;">ADMIN | REGISTER VOTER</label>
                <div class="inputFields">
                    <label for="email" class="idLabel" onselectstart = "return false;">Email</label>
                    <input type="email" name="email" id="email" class="email" placeholder="Enter your Email..." oninput="limitInput(this)" autofocus>
                </div>
                <div class="inputFields">
                    <label for="password" class="passwordLabel" onselectstart = "return false;">Password</label>
                    <input type="password" name="password" id="password" class="password" placeholder="Enter your password...">
                    <input type="checkbox" id="toggle" name="toggle"> <label for="toggle" onselectstart = "return false;">Show Password</label>
                </div>
                <input type="submit" name="submit" class="btn" value="Next">
                
                
            </form>
        </div>
        <div class="box-right">
            <h2>Welcome to the Voting System</h2>
            <p>Participate in fair and transparent elections through our secure platform. Your voice matters!</p>
            <a href="#">Learn more about the voting process</a>
        </div>
    </div>

    <script>
       
        
        
            const password = document.getElementById('password');
            const conf = document.getElementById('confirm');
            const checkbox = document.getElementById('toggle');
            
        checkbox.addEventListener('change', function(){
            if(this.checked){
                password.type = "text";
            }else{
                password.type = "password";
            }
        });
        const msg = document.getElementById('errorMsg');
        document.getElementById('email').addEventListener('input', function(){
            msg.style.display = 'none';
        });
        conf.addEventListener("click", function(){
            if(conf === "" || conf !== password){
                msg.style.display = 'hide';
            }
        });

        
    </script>
</body>
</html>
