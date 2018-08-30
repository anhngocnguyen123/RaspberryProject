<?php 
    session_start();
    require_once('connect_database.php');

    if (isset($_POST['login'])) {

        if (empty($_POST['username']) || empty($_POST['password'])) {

            header("location:login.php?empty= Please enter email and password*");

        } else {

            $query = "SELECT * FROM admin WHERE username='".$_POST['username']."' and password= '".$_POST['password']."'";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_fetch_assoc($result)) {
                
                $_SESSION['admin']=$_POST['username'];
                header("location:index.php");

            } else {
                header("location:login.php?invalid= Please enter correct email and password*");
            }
            
        }
        
    } else {
        echo "Helllo login fail!";
    }
    
?>