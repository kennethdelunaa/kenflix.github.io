<?php
include ("connection.php");
    session_start();
     //another way to connect
    //  $email = $_SESSION['login-email'];
    //  $password = $_SESSION['login-password'];
    
    //     $_SESSION['login-email'] = $email;
    // $_SESSION['login-password'] = $password;
    $_SESSION['email'] = $_POST['login-email'];
    //initalizations
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];
   
   if( ! filter_var($email, FILTER_VALIDATE_EMAIL)){
    die("Enter a valid email");
   }

    if(strlen($password) < 8){
    die("Password must be at least 8 characters long.");
   }

    if( ! preg_match("/[a-z]/i", $password)){
    die("Password must contain at least one letter.");
   }

    if( ! preg_match("/[0-9]/", $password)){
    die("Password must contain at least one number.");
   }

    // //Database connection
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
       $query = "select * from registration where email = '$email' limit 1";
       $result = mysqli_query($conn, $query);
       if($result){
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);

            if($user_data['password'] == $password){
                header("location: loggedinTest.php");
                die;
            }
        }
         echo "<script type='text/javascript'>  alert('wrong email or password') </script>";
        // echo '<script> $("#myModal1").show();</script>';
       }
       else {
         echo "<script type='text/javascript'>  alert('wrong email or password') </script>";
        // echo '<script> $("#myModal1").show();</script>';
       }
    }

    ?>