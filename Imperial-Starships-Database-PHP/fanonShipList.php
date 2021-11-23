<?php include("includes/header.php");
include("includes/classes/FanonShips.php");

$fanonShips = new FanonShips($conn);
$fanonShipArray = $fanonShips->getFanonShipList();

?>

<h2>Fanon Ships</h2>

<ul class="starshipList">
  <?php foreach($fanonShipArray as $fanonShip): ?>
    <li role="link" class="starshipRow" onclick="openPage('fanon.php?id=<?= $fanonShip[1] ?>')"><?= $fanonShip[0] ?></li>
  <?php endforeach; ?>
</ul>

<div class="fanonShipSubmit">
  <span role="link" class="fanonShipSubmitLink" onclick="openPage('fanonShipSubmit.php')">New</span>
</div>

<?php include("includes/footer.php") ?>