<?php 

class FormulaUserModel extends BaseModel {
        function getFormulaUser($userId) {
                $sql = "SELECT * FROM dish WHERE user_id='$userId'";
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
}

?>