<?php session_start(); 
require '../functions-include/databaseConnection.php'; 
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

?>
<header class="navbar">
	<?php $style_url = "http://localhost/Online_Voting/site/layout/";?>
<link rel="stylesheet" href ="<?php echo $style_url.'header.css'?>">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<script src="header.js"></script>
<title>Voting <?php echo isset($title) ? "| ".$title : ""; ?></title>
    <div class="logo">
        <h2>Election<span>IT</span></h2>
    </div>
    <nav>
		<?php $url = "http://localhost/Online_Voting/";?>
        <ul class="nav-links">
            <li><a href="<?php echo  isset($_SESSION['voters-id']) ? $url.'site/dashboard.php' : $url.'voter/login/login.php'?>">Home</a></li>
            <li><a href="<?php echo  isset($_SESSION['voters-id']) ? $url.'site/election.php' : $url.'voter/login/login.php'?>">Elections</a></li>
            <li><a href="<?php echo  isset($_SESSION['voters-id']) ? $url.'site/voting.php' : $url.'voter/login/login.php'?>">Voting</a></li>
            <li><a href="<?php echo  isset($_SESSION['voters-id']) ? $url.'site/result.php' : $url.'voter/login/login.php'?>">Result</a></li>
            <li><a href="<?php echo  isset($_SESSION['voters-id']) ? $url.'site/how.php' : $url.'voter/login/login.php'?>">How It Work!</a></li>
            <li><a href="<?php echo  isset($_SESSION['voters-id']) ? $url.'site/about.php' : $url.'voter/login/login.php'?>">About</a></li>
        </ul>
    </nav>
	<?php 
    
		if(isset($_SESSION['voters-id']) == $row['student_id']){ ?>
        <a href="<?php echo $url.'site/profile_section.php';?>" class="name"><?php if(isset($_SESSION['voters-id'])){ echo $row['full_name'];}?></a>
		<a href="<?php echo $url.'site/logout.php';?>" class="btn">Logout</a>
		<?php }else{ ?>
			<a href="<?php echo $url.'voter/login/login.php';?>" class="btn">Start Voting</a>
<?php } ?>
<div class="burger">
        <div></div>
        <div></div>
        <div></div>
    </div>
</header>
