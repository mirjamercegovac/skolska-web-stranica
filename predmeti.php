<?php 

    session_start();
    if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        $uname=$_COOKIE['username'];
        $pass=$_COOKIE['password'];
    }
    else{
        $uname="";
        $pass="";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Škola za superjunake</title>
    <link rel="icon" href="slike/favicon.png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/subjects.css">
    <style>
        .home{
            background: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65) ),
            url(slike/magic-academy.jpg) no-repeat;
        }
    </style>
</head>
<body>
    <!------------------------Navigation--------------------------->
    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="index.php" class="logo"><i class="fas fa-shield-alt">SJ</i></a>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a href="oskoli.php">O školi</a></li>
                <li><a href="kategorije.php">Kategorije</a></li>
                <li><a class="active" href="#">Predmeti</a></li>
                <li><a href="igre.php">Tjedan igre</a></li>
            </ul>
        </nav>  
        <div id="login" class="fas fa-user-circle">
        </div>
    </header>
    <!------------------------Navigation--------------------------->
    
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>


    <!------------------------Login-Form--------------------------->
    <div class="login-form">
        <form action="login.php" method="post">
            <h3>Prijava</h3>
            <input type="text" name="username" placeholder="username" class="box" value="<?php echo $uname ?>" required>
            <input type="password" name="password" placeholder="password" class="box" value="<?php echo $pass ?>" required>
            <label class="remember" for="rememberme">
                <input type="checkbox" value="" id="rememberme" name="remember"> Zapamti me.</label> <br>
            <a href="register.php">Go to register</a>
            <input type="submit" name="submit" class="btn" value="Login">
            <i class="fas fa-times"></i>
        </form>
    </div>
    <!------------------------Login-Form--------------------------->


    <section class="home" id="home">
        <h1>Predmeti</h1>
    </section>
    
    <section class="subjects">
        <h2 class="h2-subjects">Pedmeti</h2>
        <div class="box-container">
            
            <div class="box">
                <img src="slike/snaga.png" alt="">
                <h3>Snaga</h3>
                <div class="info">
                    <p></p>
                </div>
            </div>

            <div class="box">
                <img src="slike/letenje.png" alt="">
                <h3>Letenje</h3>
                <p></p>
            </div>

            <div class="box">
                <img src="slike/magija.png" alt="">
                <h3>Magija</h3>
                <p>
                </p>
            </div>

            <div class="box">
                <img src="slike/kontrola.png" alt="">
                <h3>Kontrola moći</h3>
                <p></p>
            </div>

            <div class="box">
                <img src="slike/astro-geografija.png" alt="">
                <h3>Astro-geografija</h3>
                <p></p>
            </div>

            <div class="box">
                <img src="slike/matematika.png" alt="">
                <h3>Matematika</h3>
                <p></p>
            </div>

            <div class="box">
                <img src="slike/povijest.png">
                <h3>Povijest superheroja</h3>
                <p></p>
            </div>

            <div class="box">
                <img src="slike/obrana.png" alt="">
                <h3>Obrana</h3>
                <p>
                </p>
            </div>

            <div class="box">
                <img src="slike/fizika.png" alt="">
                <h3>Fizika</h3>
                <p></p>
            </div>

            <div class="box">
                <img src="slike/vozilo.png" alt="">
                <h3>Upravljanje vozilom</h3>
                <p>
                </p>
            </div>

            <div class="box">
                <img src="slike/trening.png" alt="">
                <h3>Trening</h3>
                <p>
                </p>
            </div>

        </div>
    </section>


    <script src="JS/calendar.js"></script>

    <button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>


    <?php
        include("footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/a.js"></script>
    <script src="JS/backTop.js"></script>
</body>
</html>


<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>