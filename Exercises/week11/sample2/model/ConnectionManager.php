<?php
class ConnectionManager {

  # Create a connection to a data storage
  #
  # Input:
  #   Nothing 
  #
  # Output: 
  #   A PDO object        
  #
  public function getConnection() {
      $dsn = "mysql:host=localhost;dbname=week11;port=3306";
      $pdo = new PDO($dsn, "root", ""); 
      return $pdo;
  }
}
?>
