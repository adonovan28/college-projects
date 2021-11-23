<?php

class MiscShips {
  private $conn;
  private $id;
  private $name;

  public function __construct($conn) {
    $this->conn = $conn;
  }

  public function getMiscShipList() {
    $query = mysqli_query($this->conn, "SELECT * FROM misc ORDER BY id ASC");

    $miscShipArray = array();

    while ($row = mysqli_fetch_array($query)) {
      array_push($miscShipArray, [$row['name'], $row['id']]);
    }

    return $miscShipArray;
  }

}

?>