<?php

class ViewsModel extends BaseModel {
        public function getViews() {
                $sql = "SELECT * FROM dish ORDER BY views DESC LIMIT 10";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}

?>