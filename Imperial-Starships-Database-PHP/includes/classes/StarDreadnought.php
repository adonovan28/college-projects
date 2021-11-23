<?php

class StarDreadnought {
  private $conn;
  private $id;

  public function __construct($conn, $id) {
    $this->conn = $conn;
    $this->id = $id;
  }

  public function getStarDreadnought() {
    $query = mysqli_query($this->conn, "SELECT * FROM starDreadnoughts WHERE id='$this->id'");
    $result = mysqli_fetch_array($query);

    $dreadnought = [$result['id'], $result['name'], $result['length'], $result['image_path']];

    return $dreadnought;
  }

}

?>