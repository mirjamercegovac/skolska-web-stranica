<?php 

    session_start();
    $userid = $_SESSION['userid'];
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
    <title>Uredi korisnika</title>
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

        header #logout .fa-sign-out-alt{
            color: white;
            font-size: 2.5rem;
        }

        header #logout .fa-sign-out-alt:hover{
            color: rgb(0, 115, 192);

        }
    </style>
    <!------------------------Navigation--------------------------->
    <header>
        <div id="menu" class="fas fa-bars"></div>
        <a href="#" class="logo"><i class="fas fa-shield-alt">SJ</i></a>
        <nav class="navbar">
            <ul>
                <li><a class="active" href="#">Rezultati glasanja</a></li>
                <li><a href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=comment_system">phpMyAdmin</a></li>
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
        <div class="success close-btn" onclick="style.display = 'none';">&times;
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
    
    
    <div class="update-profile">
        <?php
            $query = "SELECT * FROM user WHERE id = '$userid'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                $fetch = mysqli_fetch_assoc($result);
            }
            
        ?>
        <form action="code.php" method="post" enctype="multipart/form-data">
            <div class="flex">
                <div class="inputBox">
                    <span>Username: </span>
                    <input type="text" name="update_username" class="box" value="<?php echo $fetch['username'] ?>">
                    <span>Ime: </span>
                    <input type="text" name="update_firstname" class="box" value="<?php echo $fetch['firstname'] ?>">
                    <span>Prezime: </span>
                    <input type="text" name="update_lastname" class="box" value="<?php echo $fetch['lastname'] ?>">
                    <span>Ažuriraj svoju sliku: </span>
                    <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png">
                </div>
                <div class="inputBox">
                <input type="hidden" name="old_password" class="box" value="<?php echo $fetch['password'] ?>">
                    <span>Stara lozinka: </span>
                    <input type="password" name="update_password" class="box" placeholder="Unesi staru lozinku">
                    <span>Nova lozinka: </span>
                    <input type="password" name="new_password" class="box" placeholder="Unesi novu lozinku">
                    <span>Potvrdi lozinku: </span>
                    <input type="password" name="confirm_password" class="box" placeholder="Potvrdi lozinku">
                </div>
            </div>
            <input type="submit" name="edit_profile" value="Ažuriraj profil" class="btn" style="background: green;">
        </form> 
    </div>  
    
 

    <?php
        include("footer.php");
    ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/a.js"></script>
</body>
</html>


<?php } ?>