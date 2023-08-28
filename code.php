<?php

    session_start();
    require_once "connection.php";

    if(isset($_POST['delete_storie']))
    {
        $storieid = $_POST['delete_storie'];
    
        $query = "DELETE FROM demo WHERE id='$storieid' ";
        $con = mysqli_connect("localhost", "root", "", "comment_system");
        $result = mysqli_query($con, $query);
    
        if($result)
        {
            $_SESSION['success'] = "Uspješno obrisana priča.";
            header("Location: admin_page.php");
            exit(0);
        }
        else
        {
            $_SESSION['error'] = "Priča nije obrisana";
            header("Location: admin_page.php");
            exit(0);
        }
    }


    if(isset($_POST['delete_student']))
    {
        $userid = $_POST['delete_student'];
    
        $query = "DELETE FROM user WHERE id='$userid' ";
        $result = mysqli_query($conn, $query);
    
        if($result)
        {
            $_SESSION['success'] = "User uspješno obrisan";
            header("Location: admin_page.php");
            exit(0);
        }
        else
        {
            $_SESSION['error'] = "User nije obrisan";
            header("Location: admin_page.php");
            exit(0);
        }
    }

    if (isset($_POST['update_student'])){

        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $userlevel = $_POST['userlevel'];

        $query = "UPDATE user SET username='$username', firstname='$firstname', lastname='$lastname', userlevel='$userlevel' WHERE id='$userid'";
        $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['success'] = "User uspješno uređen.";
            header("Location: admin_page.php");
            exit(0);
        }else{
            $_SESSION['error'] = "User nije uspješno uređen.";
            header("Location: admin_page.php");
            exit(0);
        }
    }

    if(isset($_POST['save_student'])){

        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $userlevel = $_POST['userlevel'];
        $password = $_POST['password'];
    

        $query = "INSERT INTO user (username, password, firstname, lastname, userlevel) VALUE ('$username', '$password', '$firstname', '$lastname', '$userlevel')";
        $result = mysqli_query($conn, $query);

        if($result){
            $_SESSION['success'] = "User uspješno stvoren";
            header("Location: admin_page.php");
            exit(0);
        }else{
            $_SESSION['error'] = "User nije stvoren";
            header("Location: admin_page.php");
            exit(0);
        }
    }
?>