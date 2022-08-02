<?php

class NewModel extends baseModel {
    function getNew() {
        $sql = "SELECT * FROM news ORDER BY new_id DESC LIMIT 6";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>