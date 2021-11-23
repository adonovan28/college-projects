<?php include("includes/header.php");
include("includes/classes/StarDestroyers.php");

$starDestroyers = new StarDestroyers($conn);
$destroyerArray = $starDestroyers->getStarDestroyerList();

?>

<h2>Star Destroyers</h2>

<ul class="starshipList">
  <?php foreach($destroyerArray as $starDestroyer): ?>
    <li role="link" class="starshipRow" onclick="openPage('starDestroyer.php?id=<?= $starDestroyer[1] ?>')"><?= $starDestroyer[0] ?></li>
  <?php endforeach; ?>
</ul>

<?php include("includes/footer.php") ?>