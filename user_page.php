<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Škola za superjunake</title>
    <link rel="icon" href="slike/favicon.png" >

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/table.css">
    <link rel="stylesheet" href="CSS/games.css">

</head>
<body>
        <style>
            header #logout h3{
                font-size: 1.8rem;
                color: white;
                display: flex;
                float: left;
                padding-right: 1rem;
            }

            header #logout .fa-sign-out-alt{
                color: white;
                font-size: 2.5rem;
            }

            header #logout .fa-sign-out-alt:hover{
                color: rgb(0, 115, 192);

            }

            .box-container.hide{
                display: none;
            }
            .number{
            border-radius: 50%;
            padding: 10px 12px 10px 15px;
            font-size: 2rem;
            background-image: linear-gradient(to bottom right, rgb(0, 217, 255), rgb(255, 0, 212));  
            }
            .game{
                text-align: justify;
            }
            .home{
                background: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65) ),
                url(slike/magic-academy.jpg) no-repeat;
            }
        </style>

    <!------------------------Navigation--------------------------->
    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="#" class="logo"><i class="fas fa-shield-alt">SJ</i></a>
        <nav class="navbar">
            <ul>
                <li><a class="active" href="#">Tjedan igre</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
        </nav>  
        </div>

        <div id="logout">
            <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
            <a href="logout.php" class="fas fa-sign-out-alt"></a>
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
            <input type="text" name="username" placeholder="username" class="box" required>
            <input type="password" name="password" placeholder="password" class="box" required>
            <a href="register.php">Go to register</a>
            <input type="submit" name="submit" class="btn" value="Login">
            <i class="fas fa-times"></i>
        </form>
    </div>
    <!------------------------Login-Form--------------------------->


    <section class="home" id="home">
        <h1>Tjedan igre</h1>
    </section>
    
    <section class="games" id="games">
        <h2 class="h2-notice">Popis igara</h2>
        <p>UPUTE: tjedan igre kreće od 8.5 i traje do 12.5, prva tri dana su pripreme. Nakon toga u idućih 48 sati je potrebno izvršiti igre. što znači 
            da tijekom igre postoje i stanke, tj. kraći odmori.Kako bi došli do cilja potrebno je proći ove 4 prepreke, tj. igre. 
            Ovdje su ukratko opisane upute za pojedinu igru:</p>
        <div class="box-container">
            <div class="box">
                <span>1</span>
                <img src="slike/gallery-7.jpg" alt="">
                <div class="content">
                    <h3>Labirint</h3>
                    <p>Ulaskom u labirint treba pronaći pravi izlaz koji vodi do iduće igre. Pronalazak izlaza u labirintu
                        ograničen je vremenom. Ukoliko uspijete pronaći izlaz prije isteka vremena dobivate 5 nagradnih bodova, 
                        u suprotnom dobivate kaznene bodove, što znači onoliko koliko duže ostanete u labirintu nakon isteka vremena 
                        za toliko će te dobiti kaznenih bodova.</p>
                </div>
            </div>
            <div class="box">
                <span>2</span>
                <img src="slike/forest.jpg" alt="">
                <div class="content">
                    <h3>Pronađi predmete</h3>
                    <p>Završetkom labirinta ulazite u šumu u kojoj je skriveno po 5 predmeta za svaku grupu. Svaki tim pronalazi dijelove slagalice koju moraju složiti 
                        kako bi otključali svoja vrata koja vode do sljedeće igre. VAŽNO je zapamtiti da neće biti lako pronaći predmete. Pronalaskom
                        pojedinog predmeta morat ćete riješiti zagonetke. Nakon što pronađete sve predmete izlaskom iz šume doći će te do vrata.</p>
                </div>
            </div>
            <div class="box">
                <span>3</span>
                <img src="slike/door.jpg" alt="">
                <div class="content">
                    <h3>Vrata</h3>
                    <p>Kada dođete do vrata svaka grupa mora posložiti predmete za svoja vrata kako bi ih mogla otključati. Svaki predmet
                        koji stavite na pravo mjesto dobit ćete nagradni bod. Ukoliko samo jedan predmet stavite na krivo mjesto možete dobiti ćete kazneni bod.
                        Nakon što sve predmete posložite otključat će se vrata.</p>
                </div>
            </div>
            <div class="box">
                <span>4</span>
                <img src="slike/simulation.jpg" alt="">
                <div class="content">
                    <h3>Simulacija</h3>
                    <p>Nakon što se vrata otključaju ulazite u posljednju igru, a to je simulacija. SVaki član tima borit će se protiv svoje simulacije. Ta simulacija
                        može biti bilo što, a to ćete vi znati kada dođete do toga. Onaj tko prvi završi simulaciju dobiva određene bodove. Pobjednik je onaj tim u kojemu su 
                        svi prošli simulaciju.</p>
                </div>
            </div>
        </div>
    </section>
    

    <section class="students">
        <h2>Popis učenika</h2>
        <div class="box-container">
            <form action="user_page.php" method="post">
                <table class="table">
                    <thead>
                        <tr> 
                            <th>Br.</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Kategorija</th>
                            <th>Glasaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Anna</td>
                            <td>Smerzy</td>
                            <td>Ljudi</td>
                            <td><input type="submit" name="annaL" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>John</td>
                            <td>Smith</td>
                            <td>Ljudi</td>
                            <td><input type="submit" name="johnL" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Mei</td>
                            <td>Senin</td>
                            <td>Ljudi</td>
                            <td><input type="submit" name="meiL" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>So</td>
                            <td>Ludvir</td>
                            <td>Ljudi</td>
                            <td><input type="submit" name="soL" value="Vote" class="btn"></td>
                        </tr>
                        <tr class="line">
                            <td>5.</td>
                            <td>Jen</td>
                            <td>Lie</td>
                            <td>Ljudi</td>
                            <td><input type="submit" name="jenL" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Filip</td>
                            <td>Hero</td>
                            <td>Meta ljudi</td>
                            <td><input type="submit" name="filipML" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Steve</td>
                            <td>Pratt</td>
                            <td>Meta ljudi</td>
                            <td><input type="submit" name="steveML" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Leea</td>
                            <td>Marquez</td>
                            <td>Meta ljudi</td>
                            <td><input type="submit" name="leeaML" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Sara</td>
                            <td>Kelly</td>
                            <td>Meta ljudi</td>
                            <td><input type="submit" name="saraML" value="Vote" class="btn"></td>
                        </tr>
                        <tr class="line">
                            <td>5.</td>
                            <td>Sindi</td>
                            <td>King</td>
                            <td>Meta ljudi</td>
                            <td><input type="submit" name="sindiML" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Ella</td>
                            <td>Lance</td>
                            <td>Heroji</td>
                            <td><input type="submit" name="ellaH" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Chloe</td>
                            <td>Deck</td>
                            <td>Heroji</td>
                            <td><input type="submit" name="chloeH" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Dani</td>
                            <td>Duncan</td>
                            <td>Heroji</td>
                            <td><input type="submit" name="daniH" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Joe</td>
                            <td>Vert</td>
                            <td>Heroji</td>
                            <td><input type="submit" name="joeH" value="Vote" class="btn"></td>
                        </tr>
                        <tr class="line">
                            <td>5.</td>
                            <td>Johny</td>
                            <td>Hoshi</td>
                            <td>Heroji</td>
                            <td><input type="submit" name="johnyH" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Sam</td>
                            <td>Light</td>
                            <td>Nadnaravno</td>
                            <td><input type="submit" name="samN" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Suzzi</td>
                            <td>Cross</td>
                            <td>Nadnaravno</td>
                            <td><input type="submit" name="suzziN" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Kira</td>
                            <td>Colt</td>
                            <td>Nadnaravno</td>
                            <td><input type="submit" name="kiraN" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Markus</td>
                            <td>Raymond</td>
                            <td>Nadnaravno</td>
                            <td><input type="submit" name="markusN" value="Vote" class="btn"></td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Noel</td>
                            <td>Nans</td>
                            <td>Nadnaravno</td>
                            <td><input type="submit" name="noelN" value="Vote" class="btn"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
           <?php
            include("vote.php");
           ?>
        </div>
    </section>

    <section class="card-box">
        <h2 class="h2-card">Rezultati i nagrade</h2>
        <div class="card">
        <div class="card1">
                <div class="card-image">
                    <img src="slike/silver.jpg" alt=""></div>
                <div class="card-text">
                  <span class="date">12.5.2021.</span>
                  <h2>2. Heroji</h2>
                  <p>Nagrada za osvojeno 2. mjesto: tjedan dana odmora.</p>
                </div>
            </div>
            <div class="card2">
                <div class="card-image">
                    <img src="slike/gold.jpg" alt=""></div>
                <div class="card-text">
                  <span class="date">12.5.2021.</span>
                  <h2>1. Nadnaravni</h2>
                  <p>Nagrada za osvojeno 1. mjesto: odlazak na drugi planet i upoznavanje nove kulture.</p>
                </div>
            </div>
            <div class="card3">
                <div class="card-image">
                    <img src="slike/bronze.jpg" alt=""></div>
                <div class="card-text">
                  <span class="date">12.5.2021.</span>
                  <h2>3. Ljudi</h2>
                  <p>Nagrada za osvojeno 3. mjesto: čarobno biće.</p>
                </div>
            </div>
        </div>
    </section>


    <script src="JS/calendar.js"></script>


    <?php
        include("footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/a.js"></script>
</body>
</html>
<?php } ?>

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>