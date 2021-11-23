<?php include("includes/header.php");

include("includes/classes/FanonShips.php");
include("includes/classes/Constants.php");

$fanonShips = new FanonShips($conn);

include("includes/handlers/submit-handler.php");


function getInputValue($name) {
  if(isset($_POST[$name])) {
    echo $_POST[$name];
  }
}
?>

<h2>Fanon Ship Submission</h2>

<div id="fanonShipFormContainer">
  <form class="fanonShipForm" action="fanonShipSubmit.php" method="POST">
    <p>
      <span class="errorMessage"><?= $fanonShips->getError(Constants::$shipNameLength) ?></span>
      <label for="fanonShipName">Name</label>
      <input id="fanonShipName" name="fanonShipName" type="text" value="<?php getInputValue('fanonShipName') ?>" required>
    </p>

    <p>
      <label for="fanonShipLength">Length</label>
      <input id="fanonShipLength" name="fanonShipLength" type="number" value="<?php getInputValue('fanonShipLength') ?>" required>
    </p>
    
    <button type="submit" name="submitButton" class="button">Submit</button>
  </form>
</div>

<?php include("includes/footer.php"); ?>