<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "comment_system";

    $conn = new mysqli($servername, $username, $password, $dbname);
   
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['post_story'])){

        $name=$_POST['name'];
        $message=$_POST['message'];

        $sql = "INSERT INTO demo (name, message)
        VALUES ('$name', '$message')";
        $query_run=mysqli_query($conn, $sql);

        if ($query_run) {
            $_SESSION['status']="Uspješno priložena priča!";
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } 

    


?>