<?php

### ONLY MODIFY THIS FILE IF NECESSARY 
### (e.g., you are using MAMP, you are using a different port number, etc) ###

class ConnectionManager
{
    public function getConnection()
    {
        // VERIFY THE VALUES BELOW
        
        $host     = 'localhost';
        $port     = '3306';
        $dbname   = 'star_helper_agency';
        $username = 'root';
        $password = '';

        $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        return $pdo;
    }
}
?>
