<?php $title = "Home"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/dashboard.css?v=2">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<body>

    <?php include 'layout/header.php'; ?>

    <section class="hero">
        <div class="content">
            <h1>Delivering Superior Services <br><span>IT Solutions.</span></h1>
            <p>Your reliable technology partner to serve your IT needs with customizable and SEO-friendly solutions.</p>
            <div class="btn-group">
                <a href="#" class="btn primary">Get Quote</a>
                <a href="<?php echo $url.'voter/login/login.php';?>" class="btn secondary">Get Started</a>
            </div>
        </div>
        <div class="image">
            <img src="image/homepage.png" alt="Voting">
        </div>
    </section>

    <?php include 'layout/footer.php'; ?>

</body>
</html>
