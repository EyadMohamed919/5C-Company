<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssSheets/homePageStyle.css">
    <link rel="stylesheet" href="cssSheets/navStyle.css">
    <title>Five C</title>
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
            <?php
                session_start();
                if(isset($_SESSION["loged"]))
                {
                    if($_SESSION["loged"] == true)
                    {
                        echo "<a href=\"accountPage.php\" class=headerLink id=loginLink><i class=\"fa-solid fa-right-from-bracket\"></i></a>";
                    }
                    else
                    {
                        echo "<a href=login.php class=headerLink id=loginLink><i class=\"fa-solid fa-user\"></i> login</a>";
                    }
                }
                else
                {
                    echo "<a href=login.php class=headerLink id=loginLink><i class=\"fa-solid fa-user\"></i> login</a>";
                }
            ?>
        </nav>
    </div>


    <section class="home">
        <div class="home-content">
            <img class="welcomeImg" src="cssSheets/defaultImages/Welcome.svg" alt="">
            <h3>Learn.Play.Enjoy</h3>
            <div class="btn-box">
                <a href="#" class="learnMore">Learn More</a>
                <a href="#" class="seeProducts">See Products</a>
            </div>
        </div>
    </section>


    <!-- Border Break -->
    <div id="border"></div>
    <!-- Border Break -->

    
    <!-- Third Section: Introducing Products -->
    
    <section class="products-section">
        <h1 class="productsTitle">Games</h1>
        <h1 class="productsSubtitle">Check out our collection of family games</h1>
        <div class="card-container">
            <div class="card" id="firstCard">
                <img src="cssSheets/defaultImages/Taffy El Kobs Pack With Cards1.jpg" alt="">
                <h2>Taffy El Kobs</h2>
                <p>A fun card game that helps</p>
                <a href="#" id="i-card1">Take a Look<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            
            <div class="card" id="secondCard">
                <img src="cssSheets/defaultImages/Taffy El Kobs Pack With Cards1.jpg" alt="">
                <h2>Taffy El Kobs</h2>
                <p>A fun card game that helps</p>
                <a href="#" id="i-card2">Take a Look<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div> 
            
            <div class="card" id="thirdCard">
                <img src="cssSheets/defaultImages/Taffy El Kobs Pack With Cards1.jpg" alt="">
                <h2>Taffy El Kobs</h2>
                <p>A fun card game that helps</p>
                <a href="#" id="i-card3">Take a Look<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
        </div>

        <a href="gamesPage.html" class="products-button">See Games</a>
    </section>
    
    <!-- Border Break -->
    <div id="border"></div>
    <!-- Border Break -->
    

    <!-- Brief Facts About 5C -->

    <div class="ProposeSection">
        <div class="proposeTitle">
            <h1 class="briefTitle">What is</h1>
            <img src="cssSheets/defaultImages/5C Final Logo.svg" id="cLogo" alt="">
        </div>
        <p id="ProposeP1">We have successfully transformed numerous individual safety cultures through comprehensive education and training programs.</p>
        
        <div class="sliderFrame">
            <div class="slideImages">
                <div class="imgContainer">
                    <img src="cssSheets/defaultImages/photo1.svg" id="photo1">
                </div>
                <div class="imgContainer">
                    <img src="cssSheets/defaultImages/photo2.svg" id="photo2">
                </div>
                <div class="imgContainer">
                    <img src="cssSheets/defaultImages/photo1.svg" id="photo3">
                </div>
            </div>
        </div>

        <p id="ProposeP2">In addition, we have implemented HSE management systems within a variety of organizations, adding value by organizing distinctive, dynamic, and interactive safety culture games.</p> 
            <div class="ProposeImages">
                
            </div>
        <p id="ProposeP3">These initiatives have effectively shifted the culture of well-established large companies towards a <br>proactive and generative approach to safety.</p>
        <button class="learnMoreBtn">Learn More</button>
    </div> 

    <section class="second-section">


        <div class="splitter" id="split">
            <div class="infoContainer">
                <div class="title">
                    <h3>Culture</h3>
                    <h3>Managment</h3>
                    <h3>Cycle</h3>
                </div>
                
                <p><br>Consultation 
                    <br>Concotion 
                    <br>Construction
                    <br>Control
                    <br>Continiuous Improvement
                </p>
            </div>
        </div>


        <div class="splitter" id="split1">
            <div class="infoContainer">
                <div class="title">
                    <h3>Culture</h3>
                    <h3>Managment</h3>
                    <h3>Cycle</h3>
                </div>
                
                <p><br>Consultation 
                    <br>Concotion 
                    <br>Construction
                    <br>Control
                    <br>Continiuous Improvement
                </p>
            </div>
        </div>


        <div class="splitter" id="split2">

            <div class="infoContainer" id="title2">
                <div class="title">
                    <h3>Five </h3>
                    <h3>chairpersons</h3>
                </div>
                
                <p id="safetyP">
                    <br>Pathological 
                    <br>Reactive 
                    <br>Systematic
                    <br>Proactive
                    <br>Generative
                </p>
            </div>
        </div>

        <div class="splitter" id="split3">

            <div class="infoContainer" id="title2">
                <div class="title">
                    <h3>Safety</h3>
                    <h3>Culture</h3>
                    <h3>Ladder</h3>
                </div>
                
                <p id="safetyP">
                    <br>Pathological 
                    <br>Reactive 
                    <br>Systematic
                    <br>Proactive
                    <br>Generative
                </p>
            </div>
        </div>

        <div class="splitter" id="split4">
            <div class="infoContainer" id="title2">
                <div class="title">
                    <h3>The</h3>
                    <h3>5Cs of</h3>
                    <h3>Leadership</h3>
                </div>
                
                <p id="safetyP">
                    <br>Pathological 
                    <br>Reactive 
                    <br>Systematic
                    <br>Proactive
                    <br>Generative
                </p>
            </div>
        </div>  
    </section>

    <!-- Border Break -->
    <div id="border"></div>
    <!-- Border Break  -->

    <section class="fourth-section">
        <h1>Get in Touch!</h1>
        <p>Contact us now to know more about our offers and serivces</p>
        <div class="emailBox">
            <input type="email" placeholder="Type your email">
            <button class="sendBtn">Send</button>
        </div>
    </section>

    <section class="fifth-section">
        <div class="footerContainer">
            <p class="footerTitle">Links</p>
            <div class="footerLinks">
                <a href="#">Home</a>
                <a href="#">Products</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </div>
    
            <p class="footerTitle">Follow Us</p>
            <div class="footerFollow">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div> 
        
    </section>
</body>
</html>