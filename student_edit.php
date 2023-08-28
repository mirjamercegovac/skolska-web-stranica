<?php 

    include('connection.php');
    session_start();
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
</head>
<body>
    <style>
        
        .flex{
            height: 100%;
            width: 100%;
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .flex .box{
            width: 100%;
            border-radius: 5px;
            background-color: rgb(192, 192, 192);
            padding: 10px 14px;
            margin-top: 10px;
            font-size: 15px;
        }
        .flex .box:focus{
            border: 1px solid #00BFFF;
            box-shadow: 0 0 5px #00BFFF;
        }
        .flex span{
            text-align: left;
            display: block;
            margin-top: 15px;
        }
        .flex form{
            width: 60%;
            background: white;
            margin: 50px 10px;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 2px 4px #333;
            position: relative;
            
        }
        .flex form span{
            font-size: 15px;
        }
        .flex form a{
           right: 20px;
           position: absolute;
           border-radius: 5px;
           padding: 5px 15px;
           background: red;
           color: white;
           top: 14px;
           font-size: 14px;
        }
        .flex .btn{
            border-radius:10px;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 5px 10px;
        }
    </style>
    
    
      
    

    
    
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
                    <h1>Uredi učenika <a href="admin_page.php">Nazad</a></h1> 
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
   
    
 
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/a.js"></script>
</body>
</html>



