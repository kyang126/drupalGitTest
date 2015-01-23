<?php
include('db.php');
include ('player.php');
/* Hello */
if($_POST)
{
$q=$_POST['search'];
$query = $connection->query("SELECT * FROM tblNBA WHERE playerName LIKE '%$q%' ORDER BY playerName ASC");
 $playerArray = array();
  foreach ($query as $row) {
    $player = new Player($row['PlayerName'],$row['GP'],$row['FGP'],$row['TPP'],$row['FTP'],$row['PPG']);
    array_push( $playerArray, $player);
  }

  foreach( $playerArray as $player ) {  ?>
  <tr>
    <td> <img src="http://i.cdn.turner.com/nba/nba/.element/img/2.0/sect/statscube/players/large/<?php echo $player->getimgName() ?>.png" height = "100" width = "100"> </td>
    <td> <?php echo $player->getName() ?></td>
    <td> <?php echo $player->getGP(); ?></td>
    <td> <?php echo $player->getFGP() ?></td>
    <td> <?php echo $player->getTPP() ?></td>
    <td> <?php echo $player->getFTP() ?></td>
    <td> <?php echo $player->getPPG() ?></td>   

  </tr>
  <?php }
}
?>
