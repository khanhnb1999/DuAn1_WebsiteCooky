<?php 

class FormulaUserModel extends BaseModel {
        function getFormulaUser($userId) {
                $sql = "SELECT * FROM tbl_dish WHERE user_id='$userId'";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}

?>