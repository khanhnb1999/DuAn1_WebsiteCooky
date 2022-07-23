<?php
    class NewModel extends baseModel{
        public function getAllData() {
            $sql = "SELECT * FROM news";
            $stmt = ($this->conn)->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


    }

?>