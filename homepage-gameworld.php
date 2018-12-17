<?php
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utg-8" />
        <link rel="stylesheet" type="text/css"  href="css/css.css">
</head>
<body>

        <div class="products-container">
                <div id="divlogo">
                        <h1 id="logogameworld">GAMEWORLD.</h1>
                </div>
                <div id="navigation">
                        <nav id="main-nav">
                <ul>
                        <li><a href="homepage-gameworld.php">HOME</a></li>
                        <li><a href="products.php?catId=0">GAMES</a></li>
                        <li><a href="about-us.php">ABOUT US</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                </ul>
                </nav>
                </div>
                <div id="imgbo4">
                
                <img src="img/call-of-duty-blackout-1133191.jpg" width="1100" height="500">
                <h1 id=WelcometoGAMEWORLD>Welcome to GAMEWORLD</h1>
                <h1 id=Themostcompletewebshop>The most complete webshop</h1>
                       
                </div>
                <div id="divconsoles">
                        <div id="divps4" ><a href="products.php?catId=1"><h1  class="textconsoles">ps4</h1></a></div>
                        <div id="divxboxone"><a href="products.php?catId=2"><h2 class="textconsoles">Xbox</h2></a></div>
                        <div id="divpc"><a href="products.php?catId=3"><h3 class="textconsoles">Pc</h3></a></div>
                </div>
                <div id=footerdiv>
                        <?php
                        include("footer.php");
                        ?>
                </div>
        </div>
</body>
</html>