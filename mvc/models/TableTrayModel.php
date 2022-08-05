<?php

class TableTrayModel extends BaseModel {
    function getAllDish($dishTray) {
        $sql = "SELECT * FROM dish WHERE dish_id IN ($dishTray)";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getIntroDish($getId) {
        $sql = "SELECT * FROM dish WHERE dish_id=$getId";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getIngredient($ingredientId) {
        $sql = "SELECT * FROM ingredients WHERE dish_id=$ingredientId";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>