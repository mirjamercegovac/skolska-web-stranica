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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/calendar.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/post.css">
    <style>
        .home{
            background: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65) ),
            url(slike/magic-academy.jpg) no-repeat;
        }
    </style>
   
</head>
<body onload="RenderDate()">

    
    <!------------------------Navigation--------------------------->
    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="index.php" class="logo"><i class="fas fa-shield-alt"></i>SJ</a>
        <nav class="navbar">
            <ul>
                <li><a class="active" href="#">Početna</a></li>
                <li><a href="oskoli.php">O školi</a></li>
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
            <label>
                <input type="checkbox" name="remember_me"> Zapamti me.
            </label> <br>
            <!--<a href="forgot_pass.php" id="forgot">Zaboravljena lozinka?</a> <br>-->
            <p>Nemaš račun?<a href="register.php"> Registriraj se</a></p>
            <input type="submit" name="submit" class="btn" value="Login">
            <i class="fas fa-times"></i>
        </form>
    </div>
    <!------------------------Login-Form--------------------------->


    <section class="home" id="home">
        <p>Dobrodošli</p>
        <h1>Škola za superjunake</h1>
        <p>“Heroes are made by the paths they choose, not the power they are graced with.” – Brodi Ashton</p>
        <p>so,<br> which path did you choose?</p>
    </section>
    
    <section>
        <h2 class="h2-post">Obavijesti</h2>
        <div class="post-container owl-carousel">
            <div class="post">
                <div class="image">
                    <img src="https://leverageedu.com/blog/wp-content/uploads/2020/05/Online-Education-1.png" alt="">
                </div>
                <div class="content">
                    <div class="date"><i class="fas fa-calendar-alt"></i> 20.08.2021.
                    <i class="fas fa-user"></i> autor
                    <i class="fas fa-border-all"></i> kategorija</div>
                    <h3>Upisi</h3>
                    <p>Upisi će se održati 1., 2. i 3. rujna 2021. godine od 9:00 do 12:00 sati na drugom katu. Učenici će na ulazu popuniti magičnu karticu na kojoj će biti ponuđene kategorije (smjerovi u kojoj grupu se žele prijaviti) i broj kojim će biti prozvani. Daljne upute dobiti će kada dođu na upis.</p>
            </div>
            </div>
            <div class="post">
                <div class="image">
                    <img src="https://ddx5i92cqts4o.cloudfront.net/images/1cv7crm62_steven-kent-lomtong-anime-classroom-lo.jpg" alt="">
                </div>
                <div class="content">
                    <div class="date"><i class="fas fa-calendar-alt"></i> 5.09.2021.</div>
                    <h3>Nastava</h3>
                        <p>Nastava će se održavati u 3 smjene. Prva smjena kreće od 7:00 sati i traje do 12:00, druga kreće od 13:00 i traje do 18:00 i treća kreće od 19:00 i traje do 22:00. Prvi, drugi i treći razredi kreću s prvom smjenom, četvrti, peti, šesti s drugom smjenom, a sedmi, osmi i deveti s trećom smjenom. </p>
                </div>
            </div>
            <div class="post">
                <div class="image">
                    <img src="slike/house2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="date"><i class="fas fa-calendar-alt"></i> 20. Kolovaz 2021. godine</div>
                    <h3>Velika kuća</h3>
                    <p>Velika kuća je mjesto gdje žive učenici. Nalazi se unutar kruga škole. Raspoređeni su po spavaonicama i dobnim grupama, te spolovima. Doručak je u 09:00 sati za sve učenike, ručak u 12:00, a večera u 18:00 sati.</p>
                </div>
            </div>
            <div class="post">
                <div class="image">
                    <img src="slike/superheroes.jpg" alt="">
                </div>
                <div class="content">
                    <div class="date"><i class="fas fa-calendar-alt"></i> 20. Kolovaz 2021. godine</div>
                    <h3>Kviz</h3>
                        <p>Ako želiš provjeriti svoje znanje o supermoćima, magičnim stvorenjima i magiji riješi kviz i saznaj koliko poznaješ ovaj svijet. Kviz možeš pronaći na stranici kategorije ili na ovom <a href="kategorije.php">"linku"</a>.</p>
                </div>
            </div>
            <div class="post">
                <div class="image">
                    <img src="slike/mag.jpg" alt="">
                </div>
                <div class="content">
                    <div class="date"><i class="fas fa-calendar-alt"></i> 01. Rujan 2022. godine</div>
                    <h3>Novi - Magovi</h3>
                    <p>Ove godine stvorili smo novu kategoriju koja će se zvati "Magovi". Širimo naš krug različitost i veselimo se novim učenicima.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="events">
        <h2 class="h2-events">Događanja</h2>
        <div class="box-container">
            
            <div class="box">
                <div class="image">
                    <img src="slike/competetion.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Natjecanje</h3>
                    <p>Svake godine od 8.5 do 12.5 u našoj školi održava se natjecanje između učenika. Učenici su podjeljeni po kategorijama. 
                        Svaka grupa se sastoji od 10 učenika sa vođom tima. Tako i ove godine bira se najboljih 5 učenika za svaku grupu 
                        i glasa se za vođu tima. Više o kategorijama i izabranim učenicima i vođama pronađite <a href="kategorije.php">"ovdje"</a>.</p>
                    <a href="javascript:void();" class="box-btn">Više</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="slike/superheroes.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Izbor učenika</h3>
                    <p>Mjesec je dana prije početka tjedana igre. U igrama mogu sudjelovati učenici od 5. do 9. razreda. Kreću izbori za 
                        učenike i njihove vođe tima. Učenike će izabrati profesori, a izbor vođe će birati učenici tako što će glasati za 
                        jednog od ponuđenih na ovoj <a href="igre.php">"stranici"</a>.</p>
                    <a href="javascript:void();" class="box-btn">Više</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="slike/ball.png" alt="">
                </div>
                <div class="content">
                    <h3>Školski bal</h3>
                    <p>Jedan od najljepših događanja u našoj školi je školski bal. Održat će se 20.6 od 18:00 sati. Svi ste dobrodošli. 
                        Svako od naših učenika dobit će i jednu dodatnu pozivnicu gdje može pozvati nekoga tko nije iz naše škole.
                    </p>
                    <a href="javascript:void();" class="box-btn">Više</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="slike/ball.png" alt="">
                    <div class="voting">
                        <button id="likeBtn"><i class="fa fa-thumbs-up"></i></button>
                        <input type="number" id="input1" value="0" name=""> 
                        <button id="dislikeBtn"><i class="fa fa-thumbs-down"></i></button>
                        <input type="number" id="input2" value="0" name="">
                    </div>
                </div>
                <div class="content">
                    <h3>Školski bal</h3>
                    <p>Jedan od najljepših događanja u našoj školi je školski bal. Održat će se 20.6 od 18:00 sati. Svi ste dobrodošli. 
                        Svako od naših učenika dobit će i jednu dodatnu pozivnicu gdje može pozvati nekoga tko nije iz naše škole.
                    </p>
                    <a href="javascript:void();" class="box-btn">Više</a>
                </div>
            </div>
            
        </div>
    </section>

    <div class="wrapper">
            <div class="calendar">
                <div class="month">
                    <div class="prev" onclick="moveDate('prev')"><span>&#10094</span></div>
                    <div>
                        <h2 id="month"></h2>
                        <p id="date_str"></p>
                    </div>
                    <div class="next" onclick="moveDate('next')"><span>&#10095</span></div>
                </div>
              <div class="weekdays">
                
                  <div>Pon</div>
                  <div>Uto</div>
                  <div>Sri</div>
                  <div>Čet</div>
                  <div>Pet</div>
                  <div>Sub</div>
                  <div>Ned</div>
              </div>
              <div class="days"></div>
            </div>
            
            <div class="calendar-events">
                <h4>13.9</h4> <li>Početak školske godine</li>
                <h4>20.10</h4> <li>Dan škole</li>
                <h4>8.5.-12.5</h4> <li>Održavanje igara</li>
                <h4>30.6</h4> <li>Završetak škole</li>
            </div>
            
    </div>

    <script src="JS/calendar.js"></script>

    <script>
        let likeBtn = document.querySelector('#likeBtn');
        let dislikeBtn = document.querySelector('#dislikeBtn');
        let input1 = document.querySelector('#input1');
        let input2 = document.querySelector('#input2');

        likeBtn.addEventListener('click', ()=>{
            input1.value = parseInt(input1.value) + 1;
            input1.style.color = "#12ff00";
        })

        dislikeBtn.addEventListener('click', ()=>{
            input2.value = parseInt(input2.value) + 1;
            input2.style.color = "#ff0000";
        })
    </script>


    <button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>


    <?php
        include("footer.php");
    ?>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script src="JS/a.js"></script>
    <script src="JS/backTop.js"></script>
</body>
</html>



<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>