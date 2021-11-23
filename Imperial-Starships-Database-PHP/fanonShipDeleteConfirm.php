<?php include("includes/header.php");

include('includes/classes/FanonShip.php');

if(isset($_GET['id'])) {
  $fanonShipId = $_GET['id'];
} else {
  header("Location: fanonShipList.php");
}

$fanonShipClass = new FanonShip($conn, $fanonShipId);
$fanonShip = $fanonShipClass->getFanonShip();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if ($fanonShipClass->delete()) {
    header("Location: fanonShipList.php");
  }
}

?>

<h2>Delete article</h2>

<form method="post">
  <p id="deletePageConfirm">Are you sure?</p>

  <button>Delete</button>
  <a href="fanon.php?id=<?= $fanonShip[0]; ?>">Cancel</a>
</form>

<?php include("includes/footer.php") ?>