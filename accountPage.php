<html lang="en">
<?php
session_start();
if(!isset($_SESSION["loged"]))
{
   header("location: login.php");
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssSheets/navStyle.css">
    <link rel="stylesheet" href="cssSheets/accountStyle.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <title>5C Entertainment</title>
</head>
<body>
    <div class="header"  id="navAbsolute">
        <img src="cssSheets/defaultImages/5C Final Logo.svg" class="logo" alt="">
        <nav class="navbar">
            <a href="index.html" class="headerLink" id="active"><i class="fa-solid fa-house"></i>Home</a>
            <a href="gamesPage.html" class="headerLink" id="productLink"><i class="fa-solid fa-gamepad"></i>Games</a>
            <a href="#" class="headerLink" id="aboutLink"><i class="fa-solid fa-circle-question"></i>About</a>
            <a href="#" class="headerLink" id="contactLink"><i class="fa-solid fa-envelope"></i>Contact Us</a>
            <a href="#" class="headerLink" id="cartLink"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
            
        </nav>
    </div>

    <header>
        <h1>User Account</h1>
    </header>

    <!-- Border Break -->
    <div id="border"></div>
    <!-- Border Break -->

    <main>
        <aside>
            <h3>Menu</h3>
            <a href="#" id="selected">Profile</a>
            <a href="#">Orders</a>
            <a href="#">Messages</a>
            <a href="backend/Logout.php">Logout</a>
        </aside>

        <div class="profile-container">
            <h1>Profile</h1>
            <table>
                <tr>
                    <td><p>Full Name:</p></td>
                    <td><p>Email:</p></td>
                </tr>
                <tr><p class="info-box">Eyad Mahmoud</p>
                    <td>
                        <!-- User Name -->
                        <?php
                        $firstName = strtoupper(substr($_SESSION["user_fname"], 0, 1)) . substr($_SESSION["user_fname"], 1);
                        $lastName = strtoupper(substr($_SESSION["user_lname"], 0, 1)) . substr($_SESSION["user_lname"], 1);
                        echo "<p class=\"info-box\">". $firstName . " " .  $lastName . "</p>"
                        ?>
                    </td>
                    <td><p class="info-box">eyad.mo06@gmail.com</p></td>
                </tr>
                <tr>
                    <td><p>Phone Number:</p></td>
                    <td><p>Address:</p></td>
                </tr>
                <tr>
                    <td><p class="info-box">+201150790985</p></td>
                    <td><p class="info-box">230 W, Hadayek El Ahram, Giza, Egypt</p></td>
                </tr>
            </table>
            
        </div>
    </main>
</body>
</html>