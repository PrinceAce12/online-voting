<?php require_once('../functions-include/databaseConnection.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
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
            background: linear-gradient(135deg, #1e3c72, #2a5298);
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
            color: white;
            text-decoration: underline;
            font-size: 1rem;
        }
        .inputFields {
            margin-top: 20px;
            position: relative;
        }
        input[type="number"]::-webkit-inner-spin-button {
            appearance: none;
        }
        #role,#age {
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
            background: #1e3c72;
        }
        .loginHeader {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
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
            <form action="final.php" method="post" class="form">
                <label class="loginHeader" >ADMIN | REGISTER VOTER</label>
                <div class="inputFields">
                    <label for="role" class="role">Role</label>
                    <input type="text" name="role" id="role" class="role" placeholder="Voter | Admin?" autofocus>
                    <label for="age" class="age">Age</label>
                    <input type="number" name="age" id="age" class="age" placeholder="Enter your Age!" >
                </div>
                <div class="inputFields">
                    <label for="userGender" class="userGender">Gender</label><br>
                    <br>
                    <input type="radio" name="userGender" id="userGenderMale" class="userGenderMale" value="Male"><label for="userGenderMale" > Male</label>
                    <input type="radio" name="userGender" id="userGenderFemale" class="userGenderFemale" value="Female"><label for="userGenderFemale" > Female</label>
                    
                </div>
                <input type="submit" name="submit2" class="btn" value="Register"><br>
                <a href="second-register.php" style="text-decoration:none;">Back</a>
            </form>
        </div>
        <div class="box-right">
            <h2>Welcome to the Voting System</h2>
            <p>Participate in fair and transparent elections through our secure platform. Your voice matters!</p>
            <a href="#">Learn more about the voting process</a>
        </div>
    </div>
    <script type="text/javascript">
      
    </script>
</body>
</html>
