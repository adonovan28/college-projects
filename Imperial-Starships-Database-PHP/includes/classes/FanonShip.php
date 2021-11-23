<?php

class FanonShip {
  private $conn;
  private $id;

  public function __construct($conn, $id) {
    $this->conn = $conn;
    $this->id = $id;
  }

  public function getFanonShip() {
    $query = mysqli_query($this->conn, "SELECT * FROM fanon WHERE id='$this->id'");
    $result = mysqli_fetch_array($query);

    $fanonShip = [$result['id'], $result['name'], $result['length'], $result['image_path']];

    return $fanonShip;
  }

  public function delete() {
    $query = mysqli_query($this->conn, "DELETE FROM fanon WHERE id='$this->id'");

    return true;
  }

}

?>