<?php include("includes/header.php");
include("includes/classes/Cruisers.php");

$cruisers = new Cruisers($conn);
$cruiserArray = $cruisers->getCruiserList();

?>

<h2>Cruisers</h2>

<ul class="starshipList">
  <?php foreach($cruiserArray as $cruiser): ?>
    <li role="link" class="starshipRow" onclick="openPage('cruiser.php?id=<?= $cruiser[1] ?>')"><?= $cruiser[0] ?></li>
  <?php endforeach; ?>
</ul>

<?php include("includes/footer.php") ?>