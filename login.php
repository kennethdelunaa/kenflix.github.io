<?php 
    include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <title>Log In and Sign Up Form</title>
    <link rel="website icon" type="png" href="netflix logo.png">
</head>
<body>
    <a class="navbar-brand" href="test.php">KENFLIX</a>
    <div class="container-form">

        <!-- LOG IN/ SIGN IN FORM -->
        <form action="sign-in.php" method="POST" class="login active" autocomplete="off">
            <h1 class="title">Sign In</h1>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" name="login-email" id="login-email" placeholder="Email address" required>
                    <i class="bx bx-envelope"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <div class="input-group">
                    <input type="password" pattern=".{8,}" name="login-password" id="login-password" placeholder="Password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <span class="help-text">At least 8 characters</span>
            </div>
            <button type="submit" class="btn-submit" id="loginbtn" data-toggle="modal" data-target=".bd-example-modal-sm">Login</button>
            <a href="#">Forgot password?</a>
            <p>I don't have an account. <a href="#" onclick="switchForm('register', event)">Register now</a></p>
        </form>
        <!-- END LOG IN/ SIGN IN FORM -->

            <!-- REGISTER ACCOUNT FORM -->
        <form action="register-db.php" method="POST" class="register">
            <h1 class="title">Register your Account</h1>
            <div class="form-group">
                <label for="email">Name</label>
                <div class="input-group">
                    <input type="text" name="name" id="name" placeholder="Name">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email address">
                    <i class="bx bx-envelope"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <div class="input-group">
                    <input type="password" name="reg-password" id="reg-password" pattern=".{8,}" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <span class="help-text">At least 8 characters</span>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <div class="input-group">
                    <input type="password" name="confirmpass" id="confirmpass" pattern=".{8,}" placeholder="Enter password again">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <span class="help-text">Must be same with password</span>
            </div>
            <button type="submit" class="btn-submit" id="registerbtn">Register</button>
            <p>I already have an account. <a href="#" onclick="switchForm('login', event)">Login</a></p>
        </form>
        <!-- END REGISTER ACCOUNT FORM -->
    </div>
    
    
    <script src="login.js"></script>
</body>
</html>