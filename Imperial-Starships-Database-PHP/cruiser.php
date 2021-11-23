<?php include('includes/header.php');

include('includes/classes/Cruiser.php');

if(isset($_GET['id'])) {
  $cruiserId = $_GET['id'];
} else {
  header("Location: cruiserList.php");
}

$cruiserClass = new Cruiser($conn, $cruiserId);
$cruiser = $cruiserClass->getCruiser();

?>

<h2><?= $cruiser[1] ?></h2>

<div class="starshipImageContainer">
  <span class="starshipImage"><img src="<?= $cruiser[3] ?>"></span>
</div>

<div class="starshipLengthContainer">
  <span class="starshipLength">Length: <?= $cruiser[2] ?>m</span>
</div>

<?php include('includes/footer.php'); ?>