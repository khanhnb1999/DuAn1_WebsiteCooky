<?php

class FormulaModel extends BaseModel {
        public function getDish($cateId) {
                $sql = "SELECT * FROM dish WHERE catalog_id = $cateId ORDER BY dish_id DESC LIMIT 12";
                // 
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function getIngredient($ingredientId) {
                $sql = "SELECT * FROM ingredients WHERE dish_id=$ingredientId";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function getDishTop($dishId) {
                $sql = "SELECT * FROM dish where catalog_id=$dishId ORDER BY dish_id DESC LIMIT 5 ";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
}

?>