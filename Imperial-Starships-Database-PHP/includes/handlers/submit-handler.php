<?php

function sanitizeShipName ($inputText) {
  $inputText = strip_tags($inputText);
  return $inputText;
}

if(isset($_POST['submitButton'])) {
  $shipName = sanitizeShipName($_POST['fanonShipName']);
  $shipLength = $_POST['fanonShipLength'];

  $wasSuccessful = $fanonShips->submit($shipName, $shipLength);

  if($wasSuccessful) {
    header("Location: fanonShipList.php");
  } else {
    header("Location: fail.php");
  }
}

?>