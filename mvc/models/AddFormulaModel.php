<?php

class AddFormulaModel extends BaseModel {
        public  function getNewFormula() {
                $sql = "SELECT * FROM tbl_dish ORDER BY id DESC LIMIT 0,1";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function getDishIdFinal() {
                $sql = "SELECT * FROM dish ORDER BY dish_id DESC LIMIT 0,1";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}

?>