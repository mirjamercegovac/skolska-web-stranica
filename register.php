<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'uploaded_img/'.$image;

        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO user (username, password, firstname, lastname, userlevel, image)
                        VALUE ('$username', '$passwordenc', '$firstname', '$lastname', 'm', '$image')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: index.php");
            }
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registracija</title>
    <link rel="icon" href="slike/favicon.png" >

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/register.css">
    

</head>
<body>
    
    <div class="register-form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h3>Registracija</h3>
            <input type="text" name="username" class="box" placeholder="Enter your username" required>
            <br>
            <input type="password" name="password" class="box" placeholder="Enter your password" required>
            <br>
            <input type="text" name="firstname" class="box" placeholder="Enter your firstname" required>
            <br>
            <input type="text" name="lastname" class="box" placeholder="Enter your lastname" required>
            <br>
            <input type="file" class="box" accept="image/jpg, image/jpeg, image/png">
            <input type="submit" name="submit" value="Submit" class="btn">
            <a href="index.php">Go back to index</a>
        </form>
    </div>
</body>
</html>