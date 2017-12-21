<?php
    session_start();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "gameworld";

		$conn = new mysqli($servername, $username, $password, $dbname);

    $totalPrice = 0;
		if ($conn->connect_error) {
		  die("Connection failed:" . $conn->connect_error);
		}

    $rows = array();
    foreach ($_SESSION["mySelectedIds"] as $value)
    {

      $sql = "select * from games where gameId = " . $value;

      //die($sql);

    	$result = $conn->query($sql);
    	$rows[] = $result->fetch_all(MYSQLI_ASSOC);

    }
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
    </div>
    <div id="table-box">
           <table>
           <thead>
             <tr>
               <th>image</th>
               <th>Name</th>
               <th>Description</th>
               <th>Price</th>
             </tr>
           </thead>
           <tbody>
             <?php
             if(count($rows) < 1)
             {
               ?>
               <tr>
                 <td colspan="4">Your cart is empty</td>
               </tr>
               <?php
             }
             else
             {
                foreach($rows as $game)
                {
                ?>
                <tr>
                <td><img src="./<?php echo $game[0]["gameImage"]; ?>.jpg"></td>
                <td><?php echo $game[0]["gameTitle"]; ?></td>
                <td><?php echo $game[0]["gameDescription"]; ?></td>
                <td>€<?php echo $game[0]["gamePrice"]; ?></td>
              </tr>
                <?php
                }
            }
                ?>

           </tbody>
           <tr>
             <td><form action="inc/clear.php" method="post">
             <input type="submit" name="clearSession" value="Clear cart" style="height: 50px;"/>
             </form></td>
             <td></td>
             <td class="total-price1">Total price:</td>
             <?php
                foreach($rows as $game)
                {
                    $totalPrice += $game[0]['gamePrice'] ;
                }

                ?>
                <td id="Total-price">€<?php echo $totalPrice?></td>
           </tr>
         </table>
</div>

    </body>
    <?php include("footer.php")
     ?>
</html>
