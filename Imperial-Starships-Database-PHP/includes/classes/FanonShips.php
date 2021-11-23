<?php

class FanonShips {
  private $conn;
  private $id;
  private $name;
  private $errorArray;

  public function __construct($conn) {
    $this->errorArray = array();
    $this->conn = $conn;

    if(isset($_GET['id'])) {
      $this->id = $_GET['id'];
    } else {
      $this->id = false;
    }
  }

  public function getFanonShipList() {
    $query = mysqli_query($this->conn, "SELECT * FROM fanon ORDER BY id ASC");

    $fanonShipArray = array();

    while ($row = mysqli_fetch_array($query)) {
      array_push($fanonShipArray, [$row['name'], $row['id']]);
    }

    return $fanonShipArray;
  }

  public function submit($n, $len) {
    $this->validateFanonShipName($n);

    if (empty($this->errorArray)) {
      
      return $this->insertFanonShip($n, $len);
      
    } else {
      return false;
    }
  }

  public function update($n, $len) {
    $this->validateFanonShipName($n);
    
  }

  public function getError($error) {
    if (!in_array($error, $this->errorArray)) {
      $error = "";
    }
    return $error;
  }

  private function insertFanonShip($n, $len) {
    $result = mysqli_query($this->conn, "INSERT INTO fanon (id, name, length, image_path) VALUES (LAST_INSERT_ID(), '$n', '$len', '')");
    return $result;
  }

  private function updateFanonShip($n, $len) {
    if ($this->id) {
      $result = mysqli_query($this->conn, "UPDATE fanon SET (name='$n', length='$len') WHERE id='$this->id'");
      return $result;
    } else {
      return false;
    }
  }

  public function validateFanonShipName($n) {
    if(strlen($n) > 50) {
      array_push($this->errorArray, Constants::$shipNameLength);
      return;
    }
  }

}

?>