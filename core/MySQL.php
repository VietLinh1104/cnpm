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

    public function recordExists($table,$nameField ,$valueField) {
        try {
            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM $table WHERE :nameField = :valueField");
            $stmt->bindParam(':valueField', $valueField);
            $stmt->bindParam(':nameField', $nameField);
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

    public function getDataByField($table, $field, $value) {
        try {
            $sql = "SELECT * FROM $table WHERE $field = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$value]);

            // Lấy dữ liệu
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch(PDOException $e) {
            throw new PDOException("Query failed: " . $e->getMessage());
        }
    }

    public function deleteData($table, $idField, $idValue) {
        try {
            $sql = "DELETE FROM $table WHERE $idField = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$idValue]);
            echo "Xóa dữ liệu thành công từ bảng $table.";
        } catch(PDOException $e) {
            echo "Lỗi khi xóa dữ liệu từ bảng $table: " . $e->getMessage();
        }
    }


    // Các phương thức khác để thực hiện các thao tác SQL khác có thể được thêm vào sau này

    public function __destruct() {
        $this->conn = null; // Đóng kết nối khi đối tượng bị hủy
    }
}