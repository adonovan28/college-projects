<?php

class MiscShip {
  private $conn;
  private $id;

  public function __construct($conn, $id) {
    $this->conn = $conn;
    $this->id = $id;
  }

  public function getMiscShip() {
    $query = mysqli_query($this->conn, "SELECT * FROM misc WHERE id='$this->id'");
    $result = mysqli_fetch_array($query);

    $miscShip = [$result['id'], $result['name'], $result['length'], $result['image_path']];

    return $miscShip;
  }

}

?>