<?php

class Cruisers {
  private $conn;
  private $id;
  private $name;

  public function __construct($conn) {
    $this->conn = $conn;
  }

  public function getCruiserList() {
    $query = mysqli_query($this->conn, "SELECT * FROM cruisers ORDER BY id ASC");

    $cruiserArray = array();

    while ($row = mysqli_fetch_array($query)) {
      array_push($cruiserArray, [$row['name'], $row['id']]);
    }

    return $cruiserArray;
  }

}

?>