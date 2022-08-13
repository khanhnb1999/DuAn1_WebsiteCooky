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

        public function getUserName($getId) {
                $sql = "SELECT * FROM dish INNER JOIN users ON dish.user_id=users.user_id WHERE users.user_type='Customer' AND dish.user_id = $getId";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function countFormula($getId) {
                $sql = "SELECT COUNT(dish_id) FROM dish INNER JOIN users ON dish.user_id=users.user_id WHERE users.user_type='Customer' AND dish.user_id = $getId";
                $stmt = ($this->conn)->prepare($sql);
                return $stmt->execute();
        }
}

?>