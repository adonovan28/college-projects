<?php include('includes/header.php');

include('includes/classes/StarDreadnought.php');

if(isset($_GET['id'])) {
  $starDreadnoughtId = $_GET['id'];
} else {
  header("Location: starDreadnoughtList.php");
}

$starDreadnoughtClass = new StarDreadnought($conn, $starDreadnoughtId);
$starDreadnought = $starDreadnoughtClass->getStarDreadnought();

?>

<h2><?= $starDreadnought[1] ?></h2>

<div class="starshipImageContainer">
  <span class="starshipImage"><img src="<?= $starDreadnought[3] ?>"></span>
</div>

<div class="starshipLengthContainer">
  <span class="starshipLength">Length: <?= $starDreadnought[2] ?>m</span>
</div>

<?php include('includes/footer.php'); ?>