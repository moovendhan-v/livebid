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
        <img src="loginlogo.svg" alt="" width="100%" height="auto">
    </div>
    <div class="loginform">
        <h1>Login Here</h1>

        <form name="myform"  action="php/signin.php" method="POST" >
            <p>Mali id</p>
            <input type="text" name="email" placeholder="Enter registered mail id " required="">
            <br>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required="">
            <br>
            <input type="submit" name="" value="Login" style="cursor: pointer;">
            <br><br>
            <a href="index.php">Register for new account ?</a>
        </form> 
    </div>

</body>
</html>