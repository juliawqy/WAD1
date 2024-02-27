<?php
class ConnectionManager {

  public function getConnection() {
      $dsn = "mysql:host=localhost;dbname=week11";
      $pdo = new PDO($dsn, "root", ""); 
      return $pdo;
  }
}
?>
