<?php include("includes/header.php");
include("includes/classes/MiscShips.php");

$miscShips = new MiscShips($conn);
$miscShipArray = $miscShips->getMiscShipList();

?>

<h2>Misc Ships</h2>

<ul class="starshipList">
  <?php foreach($miscShipArray as $miscShip): ?>
    <li role="link" class="starshipRow" onclick="openPage('misc.php?id=<?= $miscShip[1] ?>')"><?= $miscShip[0] ?></li>
  <?php endforeach; ?>
</ul>

<?php include("includes/footer.php") ?>