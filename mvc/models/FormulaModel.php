<?php

class FormulaModel extends BaseModel {
    public function getDish($cateId) {
        $sql = "SELECT * FROM dish WHERE catalog_id = $cateId ORDER BY dish_id DESC LIMIT 12";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>