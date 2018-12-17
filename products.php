<?php
//
$gamecat = $_GET['catId'];

include 'inc/dbconnection.php';

$sql = "select * from games";
// get color for cat
if ($gamecat == 1)
{
    $sql = "select * from games where ps4='1'";
    $backgroundorder = "blue";
}

if ($gamecat == 2)
{
    $sql = "select * from games where xbox='1'";
    $backgroundorder = "green";
}

if ($gamecat == 3)
{
    $sql = "select * from games where pc='1'";
    $backgroundorder = "white";
}

$result = mysqli_query($conn, $sql);

$games = array();

if (mysqli_num_rows($result) > 0);
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $games[] = $row;
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utg-8" />
        <link rel="stylesheet" type="text/css"  href="css/css.css">
    </head>
    <body>
    <div class="products-container">
        <header>
                <?php
                //link to menu.php

                        include("menu.php");
                ?>
                </nav>
            </div>
        </header>
        
            
        <?php
            foreach($games as $key => $game)
            {
                ?>
                <div class="product-item">
                    <h2><?php echo $game['gameTitle']; ?></h2>
                    <img src="img/<?php echo $game['gameImage']; ?>" />
                    <h3 id=productsprice><?php echo $game['gamePrice']; ?></h3>
                    <div id="orderdiv" style = "background-color: <?php echo $backgroundorder ?>;">
                        <a href="checkout-page.php?product=<?php echo $game['gameId']; ?>" id="orderbutton"><h2>ORDER</h2></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </body>
</html>
