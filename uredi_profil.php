<?php 
    include('connection.php');
    session_start();

    $userid = $_SESSION['userid'];
    if (isset($_POST['update_profile'])) {
        $update_username = $_POST['update_username'];
        $update_firstname = $_POST['update_firstname'];
        $update_lastname = $_POST['update_lastname'];
   
        $query= "UPDATE user SET username ='$update_username', firstname = '$update_firstname', lastname = '$update_lastname' WHERE id = '$userid'";
        $result = mysqli_query($conn, $query);

        $old_password = $_POST["old_password"];
        $update_password = md5($_POST['update_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);
    
        if(!empty($update_password) || !empty($new_password) || !empty($confirm_password)){
            if($update_password != $old_password){
                $message['error'] = "Old password not matched!";
            }elseif($new_password != $confirm_password){
                $message['error'] = "Confirm password not matched!";
            }else{
                $update_pass= "UPDATE user SET password ='$confirm_password' WHERE id = '$userid'";
                $result_pass = mysqli_query($conn, $update_pass);
                $message['success'] = "Password updated successfully!";
            }
        }
        $update_image = $_FILES['update_image']['name'];
        $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
        $update_image_folder = 'uploaded_img/'.$update_image;

        if(!empty($update_image)){
            $update_image_query = "UPDATE user SET image = '$update_image' WHERE id = '$userid'";
            $result_image = mysqli_query($conn, $update_image_query);
            if($result_image){
                move_uploaded_file($update_image_tmp_name, $update_image_folder);
            }
            $message['success'] = "Image updated successfully!";
        }
    }else{

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi profil</title>
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
                <li><a href="igre.php">Tjedan igre</a></li>
                <li><a class="active" href="#">Profil</a></li>
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
        <h1>Uredi profil</h1>
    </section>

    
    <div class="update-profile hide" style="display: none;">
        <?php
            $query = "SELECT * FROM user WHERE id = '$userid'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                $fetch = mysqli_fetch_assoc($result);
            }
            
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <?php 
                if ($fetch['image'] == ''){
                    echo '<img src="slike/default-avatar.png">';
                }else{
                    echo '<img src="uploaded_img/'.$fetch['image'].'">';
                }
                if (isset($message['success'])){
                    echo '<div class="success">'.$message['success'].'</div>';
                } 
                if (isset($message['error'])){
                    echo '<div class="error">'.$message['error'].'</div>';
                }   
                
            ?>
            
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
                    <span>Potvrdi lozinka: </span>
                    <input type="password" name="confirm_password" class="box" placeholder="Potvrdi lozinku">
                </div>
            </div>
            <input type="submit" name="update_profile" value="Ažuriraj profil" class="btn" style="background: green;">
            <a href="profil.php" class="btn" style="background: red;">Go back</a>
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

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>