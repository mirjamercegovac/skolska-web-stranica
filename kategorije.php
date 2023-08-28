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
    <link rel="stylesheet" href="CSS/quiz.css">
    <link rel="stylesheet" href="CSS/table.css">
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
                <li><a class="active" href="#">Kategorije</a></li>
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
        <h1>Kategorije</h1>
        <p></p>
    </section>

    

    <!-- <section class="categories">
        <div class="box-table">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Kategorija</th>
                        <th>Opis</th>
                        <th>Vještine</th>
                      </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ljudi / bezjaci</td>
                        <td>osoba koja nema bilo kakve magične sposobnosti, a ne rodio u čarobnom obitelji. 
                            Mugli se također mogu opisati kao ljudi koji nemaju nikakvu magičnu krv u sebi.</td>
                        <td>
                            <ul>
                                <li>znanje</li>
                                <li>snalažljivost</li>
                                <li>empatija</li>
                                <li>komunikacija</li>
                                <li>prilagodljivost</li>
                                <li>suosjećanje</li>
                                <li>samosvijest</li>
                            </ul>
                        </td>
                      </tr>
                    <tr>
                        <td>Meta ljudi</td>
                        <td>bilo koje ljudsko biće s izvannormalnim moćima i sposobnostima, bilo kozmičkim, mutantskim, 
                             znanstvenim, mističnim, vještinama ili tehničkim u prirodi. Značajan dio njih su normalna ljudska bića rođena s 
                             genetskom varijantom zvanom "metagen", što ih uzrokuje da stječu moći i sposobnosti tijekom čudnih nesreća ili 
                             vremena intenzivne psihičke nevolje</td>
                        <td>
                            <ul>
                                <li>supersnaga</li>
                                <li>znanje</li>
                                <li>snalažljivost</li>
                                <li>empatija</li>
                                <li>brzina</li>
                                <li>atmokineza</li>
                                <li>replikacija</li>
                                <li>letenje</li>
                                <li>telekineza</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Heroji</td>
                        <td>Superheroj je lik s izvanrednim moćima koje obavlja herojske akcije. Za razliku od policije, vatrogasaca 
                            ili liječnika, koji su svi sami po sebi heroji, superjunake definiraju njihove jedinstvene sposobnosti,
                             poput leta, snage, brzine ili nepobjedivosti (da spomenemo samo neke)</td>
                        <td>
                            <ul>
                                <li>supersnaga</li>
                                <li>znanje</li>
                                <li>brzina</li>
                                <li>letenje</li>
                                <li>oštrina vida</li>
                                <li>samozacjeljivanje</li>
                                <li>nevidljivost</li>
                                <li>promjena oblika</li>
                                <li>liječenje</li>
                                <li>telekineza</li>
                                <li>elementarna kontrola</li>
                                <li>kontrola uma</li>
                            </ul>
                        </td>
                      </tr>
                    <tr>
                        <td>Nadnaravno</td>
                        <td>Legendarno stvorenje je natprirodna životinja ili paranormalni entitet, općenito hibrid, 
                            ponekad djelomično čovjek (čudovišta, demoni, anđeli, božanstva, vile, duhovi, jahači, vampiri, vukodlaci)</td>
                        <td>
                            <ul>
                                <li>magija</li>
                                <li>besmrtnost</li>
                                <li>letenje</li>
                                <li>brzina</li>
                                <li>snaga</li>
                                <li>izdržljivost</li>
                                <li>superosjetila</li>
                                <li>teleportacija</li>
                                <li>telekineza</li>
                                <li>telepatija</li>
                                <li>liječenje</li>
                                <li>uskrsnuće</li>
                                <li>promjena oblika</li>
                                <li>nevidljivost</li>
                                <li>sveznanje</li>
                                <li>čarolija</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Magovi</td>
                        <td>Također poznati kao mađioničari/čarobnjaci, ljudi skloni magiji i obučeni za rukovanje njome. Oni se oslanjaju na elemente — zemlju, zrak, vodu, vatru i prazninu. 
                            Magovi koji su postigli majstorstvo u proučavanju elemenata nazivaju se Majstorima.</td>
                        <td>
                            <ul> 
                                <li>manipulacija i rukovanje drugim oblicima elemenata</li>
                                <li>vjetar i led</li>
                                <li>kovanje metala sa zemljom</li>
                                <li>oblikovanje zraka u iluzije</li>
                                <li>vatra u proročanstvo</li>
                                <li>zemlja u vezivanje</li>
                                <li>voda u iscjeljenje</li>
                                <li>Rijetki mogu pristupiti praznini i stvoriti magiju kaosa</li>
                            </ul>
                        </td>
                      </tr>
                </tbody>
            </table>
        </div>
    </section> -->

    <div class="container-icon">
        <div class="icon">
            <div class="imgBx active" style="--i:1;" data-id="content1">
                <img src="slike/powerofwomen.jpg">
            </div>
            <div class="imgBx" style="--i:2;" data-id="content2">
                <img src="slike/metahumans.webp">
            </div>
            <div class="imgBx" style="--i:3;" data-id="content3">
                <img src="slike/Avengers.jpg">
            </div>
            <div class="imgBx" style="--i:4;" data-id="content4">
                <img src="slike/vampireandwarewolf.jpg">
            </div>
            <div class="imgBx" style="--i:5;" data-id="content5">
                <img src="slike/mages.jpg">
            </div>
        </div>
        <div class="content-icon">
            <div class="contentBx active" id="content1">
                <div class="card">
                    <div class="imgBx">
                        <img src="slike/powerofwomen.jpg">
                    </div>
                    <div class="textBx">
                        <h2>Ljudi / bezjaci</h2>
                        <p>Osoba koja nema bilo kakve magične sposobnosti, a ne rodio u čarobnom obitelji. 
                            Mugli se također mogu opisati kao ljudi koji nemaju nikakvu magičnu krv u sebi.</p>
                        <p style="padding-top: 6px;"><strong>Vještinte:</strong> znanje, snalažljivost, empatija, komunikacija, prilagodljivost, 
                            suosjećanje, samosvijest.</p>
                    </div>
                </div>
            </div>
            <div class="contentBx" id="content2">
                <div class="card">
                    <div class="imgBx">
                        <img src="slike/metahumans.webp">
                    </div>
                    <div class="textBx">
                        <h2>Meta ljudi</h2>
                        <p>Bilo koje ljudsko biće s izvannormalnim moćima i sposobnostima, bilo kozmičkim, mutantskim, 
                             znanstvenim, mističnim, vještinama ili tehničkim u prirodi. Značajan dio njih su normalna ljudska bića rođena s 
                             genetskom varijantom zvanom "metagen", što ih uzrokuje da stječu moći i sposobnosti tijekom čudnih nesreća ili 
                             vremena intenzivne psihičke nevolje</p>
                        <p style="padding-top: 6px;"><strong>Vještinte:</strong> supersnaga, znanje, snalažljivost, empatija, brzina,
                                atmokineza, replikacija, letenje, telekineza.</p>
                    </div>
                </div>
            </div>
            <div class="contentBx" id="content3">
                <div class="card">
                    <div class="imgBx">
                        <img src="slike/Avengers.jpg">
                    </div>
                    <div class="textBx">
                        <h2>Heroji</h2>
                        <p>Superheroj je lik s izvanrednim moćima koje obavlja herojske akcije. Za razliku od policije, vatrogasaca 
                            ili liječnika, koji su svi sami po sebi heroji, superjunake definiraju njihove jedinstvene sposobnosti,
                            poput leta, snage, brzine ili nepobjedivosti (da spomenemo samo neke)</p>
                        <p style="padding-top: 6px;"><strong>Vještinte:</strong> supersnaga, znanje, brzina, letenje, oštrina vida, samozacjeljivanje, 
                                nevidljivost, promjena oblika, liječenje, elementarna kontrola, kontrola uma.</p>
                    </div>
                </div>
            </div>
            <div class="contentBx" id="content4">
                <div class="card">
                    <div class="imgBx">
                        <img src="slike/vampireandwarewolf.jpg">
                    </div>
                    <div class="textBx">
                        <h2>Nadnaravno</h2>
                        <p>Legendarno stvorenje je natprirodna životinja ili paranormalni entitet, općenito hibrid, 
                            ponekad djelomično čovjek (čudovišta, demoni, anđeli, božanstva, vile, duhovi, jahači, vampiri, vukodlaci)</p>
                        <p style="padding-top: 6px;"><strong>Vještinte:</strong> magija, besmrtnost, letenje, brzina, snaga, izdržljivost, superosjetila, 
                                teleportacija, telekineza, telepatija, liječenje, uskrsnuće, promjena oblika, nevidljivost, sveznanje, čarolija.</p>
                    </div>
                </div>
            </div>
            <div class="contentBx" id="content5">
                <div class="card">
                    <div class="imgBx">
                        <img src="slike/mages.jpg">
                    </div>
                    <div class="textBx">
                        <h2>Magovi</h2>
                        <p>Također poznati kao mađioničari/čarobnjaci, ljudi skloni magiji i obučeni za rukovanje njome. Oni se oslanjaju na elemente — zemlju, zrak, vodu, vatru i prazninu. 
                            Magovi koji su postigli majstorstvo u proučavanju elemenata nazivaju se Majstorima.</p>
                        <p style="padding-top: 6px;"><strong>Vještinte:</strong> manipulacija i rukovanje drugim oblicima elemenata, vjetar i led,
                                kovanje metala sa zemljom, oblikovanje zraka u iluzije, vatra u proročanstvo, zemlja u vezivanje,
                                voda u iscjeljenje, rijetki mogu pristupiti praznini i stvoriti magiju kaosa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="quiz">
        <h2>Kviz o moćima i superjunacima</h2><br>
        <img src="https://dbbullseye.com/wp-content/uploads/2017/11/oneearth2.jpg" alt="">
        <div class="home-box custom-box">
            <h3>Provjeri koliko znaš o superjunacima</h3><br>
            <button type="button" class="btn" onclick="startQuiz()">Start Quiz</button>
        </div>

        <div class="quiz-box custom-box hide">
            <div class="question-number">
               
            </div>
            <div class="question-text">
               
            </div>
            <div class="option-container">
                
            </div>
            <div class="next-question-btn">
                <button type="button" class="btn" onclick="next()">Next</button>
            </div>
            <div class="answer-indicator">
                
            </div>
        </div>

        <div class="box-result custom-box hide">
            <h1>Quiz result</h1>
            <table>
                <tr>
                    <td>Pitanja</td>
                    <td><span class="total-question"></span></td>
                </tr>
                <tr>
                    <td>Pokušaj</td>
                    <td><span class="total-attempt"></span></td>
                </tr>
                <tr>
                    <td>Točni</td>
                    <td><span class="total-correct"></span></td>
                </tr>
                <tr>
                    <td>Netočni</td>
                    <td><span class="total-wrong"></span></td>
                </tr>
                <tr>
                    <td>Postotak</td>
                    <td><span class="percentage"></span></td>
                </tr>
                <tr>
                    <td>Vaš ukupni rezultat</td>
                    <td><span class="total-score"></span></td>
                </tr>
            </table>
            <button type="button" class="btn" onclick="tryAgainQuiz()">Try Again</button>
            <button type="button" class="btn" onclick="goToHome()">Go to home</button>
        </div>
    </section>

    <button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>

    <?php
        include("footer.php");
    ?>

    <script>
        let imgBx = document.querySelectorAll('.imgBx');
        let contentBx = document.querySelectorAll('.contentBx');

        for(let i=0; i<imgBx.length; i++){
            imgBx[i].addEventListener('mouseover', function(){
                for(let i=0; i<contentBx.length; i++){
                    contentBx[i].className = 'contentBx';
                }
                document.getElementById(this.dataset.id).className = 'contentBx active';
                for(let i=0; i<imgBx.length; i++){
                    imgBx[i].className = 'imgBx';
                }
                this.className = 'imgBx active';
            })
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/a.js"></script>
    <script src="JS/question.js"></script>
    <script src="JS/app.js"></script>
    <script src="JS/backTop.js"></script>
</body>
</html>


<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>