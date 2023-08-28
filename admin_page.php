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
    <title>Dashboard</title>
    <link rel="icon" href="slike/favicon.png" >

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/quiz.css">
    <style>
        .home{
            background: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.65) ),
            url(slike/magic-academy.jpg) no-repeat;
        }
    </style>
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
        .close-btnS, .close-btnE{
            display:none;
        }

        header #logout .fa-sign-out-alt{
            color: white;
            font-size: 2.5rem;
        }

        header #logout .fa-sign-out-alt:hover{
            color: rgb(0, 115, 192);

        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 15px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px 5px rgba(0, 0, 0, 0.15);
        }

        th, td {
            text-align: left;
            padding: 16px;
        }

        thead tr{
            border-bottom: 2px solid black;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
    <!------------------------Navigation--------------------------->
    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="#" class="logo"><i class="fas fa-shield-alt">SJ</i></a>
        <nav class="navbar">
            <ul>
                <li><a class="active" href="#">Dashboard</a></li>
                <li><a href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=comment_system" target="_blank">phpMyAdmin</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
        </nav>  
        
        <div id="logout">
            <h3>Hi, admin <?php echo $_SESSION['user']; ?></h3>
            <a href="logout.php" class="fas fa-sign-out-alt"></a>
        </div>
    </header>
    <!------------------------Navigation--------------------------->
    

    <section class="home" id="home">
        <h1>Admin</h1>
        <p></p>
    </section>


    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success"><span class="closebtn">&times;</span>  
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php unset($_SESSION['success']);
        endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error"><span class="closebtn">&times;</span>  
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php unset($_SESSION['error']);
        endif; ?>


    <div id="result-box">
        <form action="admin_page.php" method="post">
            <p style="padding: 2rem; margin-top: 2rem; margin-left:2rem; font-size: 2rem;height: 100px;">
                Rezultati glasanja:  
                <input type="submit" name="result" value="Result" class="btn">
            </p>
        </form>
        <?php
            include("vote.php");
        ?>
    </div>
    
    
    <section class="students"> 
        <div class="box-container">
            <h2 class="h2-users">Detalji učenika
                <a class="add" onclick="togglePopupS()"><i class="fa fa-plus"></i> Dodaj učenika</a>
            </h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Uloga</th>
                        <th>Opcija</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM user";
                        $result = mysqli_query($conn, $query);
                    
                        if(mysqli_num_rows($result) > 0){
                            foreach($result as $user){
                                ?>
                                <tr>
                                    <td data-title="ID"><?= $user['id']; ?></td>
                                    <td data-title="Username"><?= $user['username']; ?></td>
                                    <td data-title="First name"><?= $user['firstname']; ?></td>
                                    <td data-title="Last name"><?= $user['lastname']; ?></td>
                                    <td data-title="User level"><?= $user['userlevel']; ?></td>
                                    <td data-title="Action">
                                        <a class="edit" href="student_edit.php?id=<?= $user['id']; ?>"><i class="fas fa-edit"></i> Uredi</a>
                                        <!--<a value="" onclick="togglePopupE()">Uredi</a>-->
                                        <form action="code.php" method="POST">
                                            <button type="submit" name="delete_student" class="btnD" value="<?= $user['id']; ?>"><i class="fa fa-trash"></i> Obriši</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        }else{
                            echo "<h5>nema pronađenih zapisa</h5>";
                        }
                    ?> 
                    
                </tbody>
            </table>
        </div>
    </section>
      
    
    <section class="stories"> 
        <div class="box-container">
            <h2 class="h2-stories">Priče</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime i prezime</th>
                        <th>Priča</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM demo";
                        $con = mysqli_connect("localhost", "root", "", "comment_system");
                        $result = mysqli_query($con, $query);
                    
                        if(mysqli_num_rows($result) > 0){
                            foreach($result as $demo){
                                ?>
                                <tr>
                                    <td data-title="ID"><?= $demo['id']; ?></td>
                                    <td data-title="Name"><?= $demo['name']; ?></td>
                                    <td data-title="Message"><?= $demo['message']; ?></td>
                                    <td data-title="Action">
                                        <form action="code.php" method="POST">
                                        <button type="submit" name="delete_storie" class="btnD" value="<?= $demo['id']; ?>"><i class="fa fa-trash"></i> Obriši</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        }else{
                            echo "<h5>nema pronađenih zapisa</h5>";
                        }
                    ?> 
                    
                </tbody>
            </table>
        </div>
    </section>


    <div class="popup" id="popup-2">
        <div class="overlay">
            <div class="content">
                <div class="close-btn" onclick="togglePopupS()">&times;</div>
                    <h1>Dodaj učenika</h1>
                    <div class="flex">
                        <form action="code.php" method="POST">

                            <span>Username: </span>
                            <input type="text" name="username" class="box">
                        
                            <span>Ime: </span>
                            <input type="text" name="firstname" class="box">
                        
                            <span>Prezime: </span>
                            <input type="text" name="lastname" class="box">
                        
                            <span>Uloga: </span>
                            <input type="text" name="userlevel" class="box">

                            <span>Lozinka: </span>
                            <input type="password" name="password" class="box">
                        
                            <button type="submit" name="save_student" class="btn">Spremi</button>

                        </form>
                    </div>
            </div>
        </div>
     </div>

    <div class="popup" id="popup-3">
    <div class="overlay">
        <div class="content">
            <div class="close-btn" onclick="togglePopupE()">&times;</div>
                <h1>Uredi učenika</h1>
                <div class="flex">
                    <?php 
                        if(isset($_GET['id'])){
                            $userid = $_GET['id'];
                            $query = "SELECT * FROM user WHERE id='$userid' ";
                            $result = mysqli_query($conn, $query);

                            if(mysqli_num_rows($result) > 0){
                                $user = mysqli_fetch_array($result);
                                ?>
                                <form action="code.php" method="POST">

                                    <input type="text" name="userid" value="<?= $user['id']; ?>" class="box">

                                    <span>Username: </span>
                                    <input type="text" name="username" value="<?= $user['username']; ?>" class="box">

                                    <span>Ime: </span>
                                    <input type="text" name="firstname" value="<?= $user['firstname']; ?>" class="box">

                                    <span>Prezime: </span>
                                    <input type="text" name="lastname" value="<?= $user['lastname']; ?>" class="box">

                                    <span>Userlevel: </span>
                                    <input type="text" name="userlevel" value="<?= $user['userlevel']; ?>" class="box">

                                    <button type="submit" name="update_student" class="btn">Spremi</button>

                                </form>
                                <?php
                            }else{
                                echo "<h4>Ne postoji takav id</h4>";
                            }
                        }
                    ?>
                    
                </div>
        </div>
    </div>
    </div>
    
 
    <button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>
    
    
    <?php
        include("footer.php");
    ?>

    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
        }
        function togglePopupS(){
            document.getElementById("popup-2").classList.toggle("active");
        }
        function togglePopupE(){
            document.getElementById("popup-3").classList.toggle("active");
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/a.js"></script>
    <script src="JS/backTop.js"></script>
</body>
</html>


<?php } ?>

