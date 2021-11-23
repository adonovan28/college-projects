<?php

class StarDreadnoughts {
  private $conn;
  private $id;
  private $name;

  public function __construct($conn) {
    $this->conn = $conn;
  }

  public function getStarDreadnoughtList() {
    $query = mysqli_query($this->conn, "SELECT * FROM starDreadnoughts ORDER BY id ASC");

    $dreadnoughtArray = array();

    while ($row = mysqli_fetch_array($query)) {
      array_push($dreadnoughtArray, [$row['name'], $row['id']]);
    }

    return $dreadnoughtArray;
  }

}

?>