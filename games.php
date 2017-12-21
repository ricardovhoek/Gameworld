
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gameworld";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}

if (isset($_GET["gameCategoryId"])) {

  $sql =

        $categoryId = $_GET["gameCategoryId"];
        $selectedGamesQuery = "

    SELECT
    *
    FROM
    gameCategory,
    games
    WHERE
    gamecategory.categoryId = games.gameCategoryId
    AND
    gamecategory.categoryId = ".$categoryId."
    ";
    }
    else {
      $selectedGamesQuery = "SELECT * FROM games where gameCategoryId = 1 ";
    }
      $result = $conn->query($selectedGamesQuery);
  $conn->close();

 ?>

 <!DOCTYPE html>
<html>
  <head><meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php include("header.php")
    ?>
    <div id="products-container">
      <?php
                             if ($result->num_rows > 0) {
                                     //Output data of each row
                                    while($row = $result->fetch_assoc()) {

                             ?>
      <div class="product-item">
        <div class="product-item">
        <img img src="./<?php echo $row["gameImage"]; ?>.jpg">
        <div class="price">€<?php echo $row["gamePrice"]; ?></div>
        <div class="name"><?php echo $row["gameTitle"]; ?></div>
        <div class="order-button">
<h5>Order here</h5><input id="checkbox-css" type="checkbox" name="selectedGameIds[]" value="<?php echo $row["gameId"]; ?>" />
</div>
    </div>
  </div>

    <?php
  }

  }

        else {
            echo "No results";
        }

    ?>
    <form>
<input id="addToCartButton" type="submit" name="myButton" value="Add to cart" />
</form>
</div>
    </div>
    <div class="clearfix"></div>
    </body>
    <?php include("footer.php")
     ?>
</html>
