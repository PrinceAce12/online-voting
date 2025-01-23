
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Voter</title>
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
        #userId, #userFullName {
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
    <title>Login</title>
    
</head>
<body>
    <div class="container">
       <?php 
       $errorMsg = "";
       if(isset($_GET['error'])){
        $error = $_GET["error"];
       if($error == "emptyid"){
        $errorMsg = "Please Enter your ID!";
        }
        elseif($error == "emptyname"){
            $errorMsg = "Please Enter your Full Name!";
        }else{
            $errorMsg = "";
        }}
        ?>
        
        <div class="box-left">
            <form action="second-register.php" method="post" class="form">
                <label class="loginHeader">ADMIN | REGISTER VOTER</label>
                <div class="inputFields">
                    <label for="userId" class="idLabel">ID</label>
                    <input type="number" name="userId" id="userId" class="userId" placeholder="Enter ID number..." oninput="limitInput(this)" autofocus>
                </div>
                <div class="inputFields">
                    <label for="userFullName" class="userFullName">Full Name</label>
                    <input type="text" name="userFullName" id="userFullName" class="userFullName" placeholder="Enter User Full Name...">
                </div>
                <input type="submit" name="submit" class="btn" value="Next">
                <p name="errorMsg" id="errorMsg" class="errorMsg"> <?php echo $errorMsg; ?></p>
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
        
    </script>
</body>
</html>



