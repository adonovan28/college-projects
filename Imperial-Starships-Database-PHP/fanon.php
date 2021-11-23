<?php include('includes/header.php');

include('includes/classes/FanonShip.php');

if(isset($_GET['id'])) {
  $fanonShipId = $_GET['id'];
} else {
  header("Location: fanonShipList.php");
}

$fanonShipClass = new FanonShip($conn, $fanonShipId);
$fanonShip = $fanonShipClass->getFanonShip();

?>

<h2><?= $fanonShip[1] ?></h2>

<div class="starshipImageContainer">
  <span class="starshipImage"><img src="<?= $fanonShip[3] ?>"></span>
</div>

<div class="starshipLengthContainer">
  <span class="starshipLength">Length: <?= $fanonShip[2] ?>m</span>
</div>

<div class="fanonShipSubmit">
  <span role="link" class="fanonShipSubmitLink" onclick="openPage('fanonShipEdit.php?id=<?= $fanonShip[0] ?>')">Edit</span>
</div>

<div class="fanonShipSubmit">
  <span role="link" class="fanonShipSubmitLink" onclick="openPage('fanonShipDeleteConfirm.php?id=<?= $fanonShip[0] ?>')">Delete</span>
</div>

<?php include('includes/footer.php'); ?>