<?php 

class FormulaModel extends baseModel {
       public function getManyFormula() {
                $sql = "SELECT * FROM total_formulas INNER JOIN users ON total_formulas.user_id = users.user_id ORDER BY total DESC LIMIT 0,5";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}

?>