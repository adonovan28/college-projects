<?php include('includes/header.php');

include('includes/classes/MiscShip.php');

if(isset($_GET['id'])) {
  $miscShipId = $_GET['id'];
} else {
  header("Location: miscShipList.php");
}

$miscShipClass = new MiscShip($conn, $miscShipId);
$miscShip = $miscShipClass->getMiscShip();

?>

<h2><?= $miscShip[1] ?></h2>

<div class="starshipImageContainer">
  <span class="starshipImage"><img src="<?= $miscShip[3] ?>"></span>
</div>

<div class="starshipLengthContainer">
  <span class="starshipLength">Length: <?= $miscShip[2] ?>m</span>
</div>

<?php include('includes/footer.php'); ?>