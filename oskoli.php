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
    <a href="index.php"><link rel="icon" href="slike/favicon.png"></a>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/gallery.css">
    <link rel="stylesheet" href="CSS/comment.css">
    <style>
        .home{
            background: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65) ),
            url(slike/magic-academy.jpg) no-repeat;
        }
    </style>
</head>
<body>
    <!------------------------Navigation--------------------------->
    <header class="hide">
        <div id="menu" class="fas fa-bars"></div>
        <a href="index.php" class="logo"><i class="fas fa-shield-alt">SJ</i></a>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a class="active" href="#">O školi</a></li>
                <li><a href="kategorije.php">Kategorije</a></li>
                <li><a href="predmeti.php">Predmeti</a></li>
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
        <h1>O školi</h1>
    </section>
    
    <section class="notice" id="notice">
        <h2 class="h2-notice">Povijest</h2>
        <div class="box-container">
            
            <div class="box">
                <div class="content">
                    <p>Škola je osnovana početkom 21. stoljeća 2002. godine na Zemlji S, što je poprilično kasno jer su se superheroji pojavili puno ranije. Točnije prije nove ere. Ljudi u početku nisu znali da postoje, ali kada su i saznali nisu ih prihvaćali. 
                        Iako sada naša škola nije samo za superheroje nego i za "obične" ljude. Tako i oni mogu razviti vještine i moći iako nisu rođeni sa posebnim moćima i vještinama. 
                        Naša škola tako je osnovala kategorije, tj. skupine za sve koji žele učiti, razvijati i kontrolirati svoje vještine. 
                        U početku malo je njih znalo o školi jer je moralo biti u tajnosti, tako je tek 2012. godine prvi puta otkrivena javnosti.
                        Školu su osnovali skupina od 5 heroja zajedno sa nadnaravnima. Kasnije su nam se pridružili i bezjaci i meta ljudi. Najzanimljivija činjenica je ta da ne samo sa naše planete,
                        nego i sa drugih planeta multisvemira nam dolaze svi koji žele pohađati školu. Jedan od najstarijih superjunaka kojemu identitet niti naša škola ne zna, najmoćniji je i najsnažniji superjunak u povijesti, ali i u bodućnosti. Sve što znamo o njemu je
                        da na njega nema utjecaj vrijeme i prostor. Pretopstavke koje trenutno imamo su da je on stvoritelj prošlih, današnjih ali i budućih heroja.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="box-container">
            
            <div class="box">
                <i class="fa fa-phone"></i>
                <h3>Kontakt telefon:<br> +123-456-7890</h3>
                <div class="info">
                </div>
            </div>
            <div class="box">
                <i class="fa fa-envelope"></i>
                <h3>E-adresa: <br>s.superjunaka@gmail.com</h3>
                <div class="info">
                </div>
            </div>
            <div class="box">
                <i class="fa fa-clock"></i>
                <h3>Radno vrijeme: <br> 9:00 - 15:00</h3>
                <div class="info">
                </div>
            </div>
            <div class="box">
                <i class='fas fa-map-marker-alt'></i>
                <h3>Adresa: <br> Magična ulica 4A</h3>
                <div class="info">
                </div>
            </div>
        </div>
    </section>

    <section class="comment">
    <p style="margin-left:2rem; font-size: 1.4rem; margin-bottom: 4rem;">Ukoliko ste novi i želite da se o vašoj povijesti zna ovdje možete staviti vaše priče: </p>
        
        <div class="wrapper">
            <form action="" method="post" class="form">
                <input type="text" class="name" name="name" placeholder="Ime i prezime"><br>
                <textarea name="message" cols="30" rows="10" class="message" placeholder="Tekst"></textarea><br>
                <button type="submit" class="button" name="post_story"> Postavi priču </button>
            </form>
            <?php include("comment.php"); ?>
        </div>
        <?php
            if(isset($_SESSION['status']))
            {
                ?>
                <p style="background: rgb(169, 241, 169);
                          border-radius: 10px; 
                          padding: 8px;
                          font-size: 1.5rem;
                          margin-top: 12px;"><?php echo $_SESSION['status']; ?></p>  
                <?php
                unset($_SESSION['status']);
            } 
        ?>
    </section>
   

    <!-------------------------Gallery---------------------------->
    <section class="gallery" id="gallery">
        <h2 class="h2-gallery">Galerija slika</h2>
        <div class="box-container">
            <div class="image"><img src="slike/gallery-1.jpg" alt=""></div>
            <div class="image"><img src="slike/gallery-2.jpg" alt=""></div>
            <div class="image"><img src="slike/gallery-3.jpg" alt=""></div>
            <div class="image"><img src="slike/gallery-4.jpg" alt=""></div>
            <div class="image"><img src="slike/gallery-5.jpg" alt=""></div>
            <div class="image"><img src="slike/gallery-6.jpg" alt=""></div>
            <div class="image"><img src="slike/gallery-7.jpg" alt=""></div>
            <div class="image"><img src="slike/My project.jpg" alt=""></div>
        </div>
        <div class="preview-box">
            <div class="details">
                <span class="title"><p class="current-img"></p>/<p class="total-img"></p></span>
                <span class="icon fas fa-times"></span>
            </div>
            <div class="image-box">
                <div class="slide prev"><i class="fas fa-angle-left"></i></div>
                <div class="slide next"><i class="fas fa-angle-right"></i></div>
                <img src="" alt="">
            </div>
        </div>
        <div class="shadow"></div>
    </section>
    <!-------------------------Gallery---------------------------->

    <script src="JS/calendar.js"></script>

    <button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>


    <?php
        include("footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/a.js"></script>
    <script src="JS/galerija.js"></script>
    <script src="JS/backTop.js"></script>
</body>
</html>


<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>