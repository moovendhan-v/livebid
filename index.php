<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="php/login-signup.css">
    <title>Document</title>
</head>

<body>
    <div class="headers">
        <div class="container">
            <div class="livebidlive">
                <div class="logo">
                    <img src="assets/images/logo.svg">
                </div>
                    <nav>
                        <div class="menubar">
                            <ul>
                                <li><a href="livebid.html" style="color: blueviolet;">Become a seller</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
    <div class="logins">
        <img src="php/loginlogo.svg" alt="" width="100%" height="auto">
    </div>
    <div class="loginform">
        <h1>Signup Here</h1>

        <form name="myform"  action="php/registration.php" method="POST" novalidate>
        <div class="fn">
            <p>First Name</p>
            <input type="text" name="fname" placeholder="Enter First Name" required="">
            <br>
        </div>
        <p>Mail Id</p>
        <input type="text" name="email" placeholder="Enter your email" required="">
        <br>

        <p>Address</p>
        <input type="text" name="address" placeholder="Enter your correct address" required="">
        <br>

        <p>Contact</p>
        <input type="text" name="phone" placeholder="Enter your Contact Number" required="">
        <br>

            <p>Password</p>
            <input type="password" name="password" placeholder="Mail id password" required="">
            <br>

            <br>
            <input type="file" name="logo" required="">
            <br>
    
            <input type="submit" name="submits" value="Create Account" style="cursor: pointer;">
            <br><br>
            <a href="login.php">Login Here</a>
    </div>

</body>
</html>