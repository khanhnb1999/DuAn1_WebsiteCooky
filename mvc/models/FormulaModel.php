<?php

class FormulaModel extends BaseModel {
        public function getDish($cateId) {
                $sql = "SELECT * FROM dish WHERE catalog_id = $cateId AND status=1 ORDER BY dish_id DESC LIMIT 12";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function getNewTop6() {
                $sql = "SELECT * FROM news ORDER BY new_id DESC LIMIT 0,6";
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

        function getUser($username) {
                $sql = "SELECT * FROM users WHERE user_name='$username'";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function showComment($id) {
                $sql = "SELECT * FROM comments INNER JOIN users ON comments.user_id=users.user_id
                 WHERE dish_id=$id AND status=1";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function getDishNew() {
                $sql = "SELECT * FROM dish WHERE status=1 ORDER BY dish_id DESC LIMIT 0,12 ";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function getDishView() {
                $sql = "SELECT * FROM dish WHERE status=1 ORDER BY views DESC LIMIT 0,12 ";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}

?>