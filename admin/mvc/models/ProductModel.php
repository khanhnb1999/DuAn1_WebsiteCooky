<?php

class ProductModel extends BaseModel {
    public function sumPrice($where) {
        $sql = "SELECT SUM(dish_price) FROM tray_details INNER JOIN dish 
        ON tray_details.dish_id = dish.dish_id INNER JOIN trays
        ON tray_details.tray_id = trays.tray_id WHERE trays.tray_id = $where";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>