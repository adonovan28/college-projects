<?php include("includes/header.php");
include("includes/classes/StarDreadnoughts.php");

$starDreadnoughts = new StarDreadnoughts($conn);
$dreadnoughtArray = $starDreadnoughts->getStarDreadnoughtList();

?>

<h2>Star Dreadnoughts</h2>

<ul class="starshipList">
  <?php foreach($dreadnoughtArray as $starDreadnought): ?>
    <li role="link" class="starshipRow" onclick="openPage('starDreadnought.php?id=<?= $starDreadnought[1] ?>')"><?= $starDreadnought[0] ?></li>
  <?php endforeach; ?>
</ul>

<?php include("includes/footer.php") ?>