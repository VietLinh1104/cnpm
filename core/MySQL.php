<?php

class MySQL {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect();
    }

    private function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function recordExists($table, $dbKey) {
        try {
            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM $table WHERE dbKey = :dbKey");
            $stmt->bindParam(':dbKey', $dbKey);
            $stmt->execute();
            return $stmt->fetchColumn() > 0;
        } catch(PDOException $e) {
            echo "Error checking record: " . $e->getMessage();
        }
    }

    public function insertData($table, $data) {
        try {
            $fields = implode(', ', array_keys($data));
            $placeholders = implode(', ', array_fill(0, count($data), '?'));

            $sql = "INSERT INTO $table ($fields) VALUES ($placeholders)";
            $stmt = $this->conn->prepare($sql);

            $values = array_values($data);
            $stmt->execute($values);
        } catch(PDOException $e) {
            echo "Insert failed: " . $e->getMessage();
        }
    }

    public function updateData($table, $data, $dbKey) {
        try {
            $fields = '';
            foreach ($data as $key => $value) {
                $fields .= "$key = ?, ";
            }
            $fields = rtrim($fields, ', ');

            $sql = "UPDATE $table SET $fields WHERE dbKey = ?";
            $stmt = $this->conn->prepare($sql);

            $values = array_values($data);
            $values[] = $dbKey; // Append dbKey to the end of the array
            $stmt->execute($values);
        } catch(PDOException $e) {
            echo "Update failed: " . $e->getMessage();
        }
    }

    public function updateDataByField($table, $data, $field) {
        try {
            $fields = '';
            foreach ($data as $key => $value) {
                $fields .= "$key = ?, ";
            }
            $fields = rtrim($fields, ', ');
    
            $sql = "UPDATE $table SET $fields WHERE Ma_sinh_vien = ?";
            $stmt = $this->conn->prepare($sql);
    
            $values = array_values($data);
            $values[] = $field; // 
            $stmt->execute($values);
        } catch(PDOException $e) {
            echo "Update failed: " . $e->getMessage();
        }
    }

    public function getData($table, $fields = array('*')) {
        try {
            $fieldsStr = implode(', ', $fields);
            $sql = "SELECT $fieldsStr FROM $table";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error fetching data: " . $e->getMessage();
        }
    }

    public function getDataByField($table, $fields_to_select, $field) {
        try {
            $fields = implode(', ', $fields_to_select);
            $stmt = $this->conn->prepare("SELECT $fields FROM $table WHERE Ma_sinh_vien = :field");
            $stmt->bindParam(':field', $field);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error getting data: " . $e->getMessage();
            return null;
        }
    }

    // Các phương thức khác để thực hiện các thao tác SQL khác có thể được thêm vào sau này

    public function __destruct() {
        $this->conn = null; // Đóng kết nối khi đối tượng bị hủy
    }
}