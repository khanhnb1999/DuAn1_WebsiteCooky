<?php

class AddFormulaModel extends BaseModel {
        public  function getNewFormula() {
                $sql = "SELECT * FROM tbl_dish ORDER BY id DESC LIMIT 0,1";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
        }
}

?>