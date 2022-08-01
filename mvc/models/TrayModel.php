<?php

class TrayModel extends baseModel {
    function getDish() {
        $sql = "SELECT * FROM dish ORDER BY dish_id DESC LIMIT 7";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getPriceTray() {
        $sql = "SELECT * FROM `trays` INNER JOIN tray_prices 
        ON trays.tray_id = tray_prices.tray_id WHERE trays.tray_id = 12";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>