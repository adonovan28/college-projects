<?php

class StarDestroyers {
  private $conn;
  private $id;
  private $name;

  public function __construct($conn) {
    $this->conn = $conn;
  }

  public function getStarDestroyerList() {
    $query = mysqli_query($this->conn, "SELECT * FROM starDestroyers ORDER BY id ASC");

    $destroyerArray = array();

    while ($row = mysqli_fetch_array($query)) {
      array_push($destroyerArray, [$row['name'], $row['id']]);
    }

    return $destroyerArray;
  }

}

?>