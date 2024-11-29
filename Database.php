<?php
class Database {
    private $host = "localhost"; // Database host
    private $username = "root";  // Database username
    private $password = "";      // Database password
    private $dbname = "users"; // Database name
    private $conn; // Database connection object

    // Method to connect to the database
    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Optional: Close the connection
    public function close() {
        $this->conn = null;
    }
}
?>
