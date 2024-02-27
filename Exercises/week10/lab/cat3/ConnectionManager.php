<?php

class ConnectionManager {

    public function connect() {
        #remember how to configure these 4:
        $servername = 'localhost'; #usually is localhost
        $username = 'root'; #default is root
        $password = ''; #default is empty
        $dbname = 'animals'; #name of db used
        
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if fail, exception will be thrown

        // Return connection object
        return $conn;
    }

}