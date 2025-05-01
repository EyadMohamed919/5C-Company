<html lang="en">
<?php
session_start();
if(isset($_SESSION["loged"]))
{
    if($_SESSION["loged"] == true)
    {
        header("location: index.php");
    }
}
?>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssSheets/loginStyle.css">
    <title>Five C</title>
</head>
<body>
    
    <form action="backend/UserAuthentication.php" method="post">
        <h1>Login</h1>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="example@5c.com">
        </div>
        <div>
            <label for="email">Password</label>
            <input type="password" name="password" id="password" placeholder="enter your password">
        </div>
        <?php
            if(isset($_SESSION["incorrect_login"]))
            {
    
                if($_SESSION["incorrect_login"] == true)
                {
                    echo "Incorrect email or password";
                }
            }
            
        ?>
        <a class="register" href="#">Create New Account<i class="fa-solid fa-user-plus"></i></a>
        <a class="forgot" href="#">Forgot Password<i class="fa-solid fa-question"></i></a>
        <button class="loginButton" type="submit">Login<i class="fa-solid fa-arrow-right"></i></button>
    </form>
</body>
</html>