<?php

class HomeModel extends BaseModel {
        function getAllStatus() {
                $sql = "SELECT * FROM dish WHERE status=1 ORDER BY dish_id DESC LIMIT 8";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function getAllTop50() {
                $sql = "SELECT * FROM dish WHERE status=1 ORDER BY dish_id DESC LIMIT 50";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}

?>