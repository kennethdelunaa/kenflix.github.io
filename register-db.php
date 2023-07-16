<?php
    
    include ("connection.php");

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    //another way to connect

    
    //initalizations
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['reg-password'];
    $confirmpass = $_POST['confirmpass'];
   


    if( (! preg_match("/[a-z]/i", $_POST['name'])) && ( preg_match("/[0-9]/i", $_POST['name']))){
        die("Please enter valid name.");
    }

   if( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    die("Enter a valid email");
   }

   if(strlen($_POST['reg-password']) < 8){
    die("Password must be at least 8 characters long.");
   }

   if( ! preg_match("/[a-z]/i", $_POST['reg-password'])){
    die("Password must contain at least one letter.");
   }

   if( ! preg_match("/[0-9]/", $_POST['reg-password'])){
    die("Password must contain at least one number.");
   }

   if($_POST['reg-password'] !== $_POST['confirmpass']){
    die("Password must match.");
   }

   $select = "select * from registration where email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
    die("user already exist!");
   }
    else{
        $stmt = $conn->prepare("insert into registration(name, email, password) values(?,?,?)");
        $stmt->bind_param("sss",$name, $email, $password);
        $stmt->execute();
        echo "registration Successfully!";
        $stmt->close();
        $conn->close();
    }

    
//    $password_hash = password_hash($_POST['reg-password'], PASSWORD_DEFAULT);

//    var_dump($password_hash);


    // //Database connection
    //declaration for use to connect
    // $serverName = "localhost";
    // $userName = "root";
    // $password = "";
    // $dbName = "kenflix";

    //create connection
    // $con = mysqli_connect($serverName, $userName, $password, $dbName); 
    
    // if(mysqli_connect_errno()){
    //      echo "Failed to connect!";
    //      exit();
    // }
    // echo "Connection success!";
?>