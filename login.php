<?php 

    include('connection.php');
    session_start();

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            
            if(isset($_POST["remember_me"])) {
                setcookie ("username",$_POST["username"],time()+ 5600);
                setcookie ("password",$_POST["password"],time()+ 3600);
                echo "Cookies Set Successfuly";
            } else {
                setcookie("username","");
                setcookie("password","");
                echo "Cookies Not Set";
            }


            if ($_SESSION['userlevel'] == 'a') {
                header("Location: admin_page.php");
            }

            if ($_SESSION['userlevel'] == 'm') {
                header("Location: user_page.php");
            }
        } else {
            echo "<script>alert('Username or password incorrect');</script>"; 
        }

    } else {
        header("Location: index.php");
    }


?>



    