<?php include("includes/header.php");

include('includes/classes/FanonShip.php');
include("includes/classes/FanonShips.php");
include("includes/classes/Constants.php");

if(isset($_GET['id'])) {
  $fanonShipId = $_GET['id'];
} else {
  header("Location: fanonShipList.php");
}

$fanonShips = new FanonShips($conn);

$fanonShipClass = new FanonShip($conn, $fanonShipId);
$fanonShip = $fanonShipClass->getFanonShip();

include("includes/handlers/edit-handler.php");

?>

<h2>Fanon Ship Edit</h2>

<div id="fanonShipFormContainer">
  <form class="fanonShipForm" action="fanonShipSubmit.php" method="POST">
    <p>
      <span class="errorMessage"><?= $fanonShips->getError(Constants::$shipNameLength) ?></span>
      <label for="fanonShipName">Name</label>
      <input id="fanonShipName" name="fanonShipName" type="text" value="<?= $fanonShip[1] ?>" required>
    </p>

    <p>
      <label for="fanonShipLength">Length</label>
      <input id="fanonShipLength" name="fanonShipLength" type="number" value="<?= $fanonShip[2] ?>" required>
    </p>
    
    <button type="submit" name="submitButton" class="button">Submit</button>
  </form>
</div>

<?php include("includes/footer.php"); ?>