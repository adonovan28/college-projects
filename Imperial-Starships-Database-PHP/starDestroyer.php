<?php include('includes/header.php');

include('includes/classes/StarDestroyer.php');

if(isset($_GET['id'])) {
  $starDestroyerId = $_GET['id'];
} else {
  header("Location: starDestroyerList.php");
}

$starDestroyerClass = new StarDestroyer($conn, $starDestroyerId);
$starDestroyer = $starDestroyerClass->getStarDestroyer();

?>

<h2><?= $starDestroyer[1] ?></h2>

<div class="starshipImageContainer">
  <span class="starshipImage"><img src="<?= $starDestroyer[3] ?>"></span>
</div>

<div class="starshipLengthContainer">
  <span class="starshipLength">Length: <?= $starDestroyer[2] ?>m</span>
</div>

<?php include('includes/footer.php'); ?>