<?php
//

include 'inc/dbconnection.php';

$id = $_GET['product'];

$sql = "select * from games where gameId = $id";

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
                <?php
                //link to menu.php
                        include("menu.php");
                ?>
                </nav>
                </div>
                <div id="divcheckoutproduct">
                    <table id="tablecheckoutpage">
                        <thead>
                            <tr>
                                <th id="imagethead">Image</th>
                                <th id="gamethead">Game</th>
                                <th id="descriptionthead">description</th>
                                <th id="pricethead">Price</th>
                            </tr>
                        </thead>
                        <?php foreach($games as $key => $game)
                        {
                        ?>
                        <tbody>
                            <tr>
                                <td id="imagetd"><img src="img/<?php echo $game['gameImage']; ?>" class="fotoafmetingen" /></td>
                                <td id="titletd"><?php echo $game['gameTitle']; ?></td>
                                <td id="descriptiontd"><?php echo $game['gameDescription']; ?></td>
                                <td id="pricetd"><?php echo $game['gamePrice']; ?></td>
                            </tr>
                            <tr>
                                <td id="imagetd"><img src="img/<?php echo $game['gameImage']; ?>" class="fotoafmetingen" /></td>
                                <td id="titletd"><?php echo $game['gameTitle']; ?></td>
                                <td id="descriptiontd"><?php echo $game['gameDescription']; ?></td>
                                <td id="pricetd"><?php echo $game['gamePrice']; ?></td>
                            </tr>
                            <tr>
                                <td id="imagetd"><img src="img/<?php echo $game['gameImage']; ?>" class="fotoafmetingen" /></td>
                                <td id="titletd"><?php echo $game['gameTitle']; ?></td>
                                <td id="descriptiontd"><?php echo $game['gameDescription']; ?></td>
                                <td id="pricetd"><?php echo $game['gamePrice']; ?></td>
                            </tr>
                        </tbody>
                        <tfoot>
                                <tr>
                                    <td> </td>
                                </tr>
                        </tfoot>
                        <?php
                        }
                        ?>
                    </table>
                </div>
        </div>
</body>
</html>