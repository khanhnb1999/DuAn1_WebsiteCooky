<?php

class UserModel extends BaseModel {
        public function getUser($username, $password) {
                $sql = "SELECT * FROM users WHERE user_name='$username' AND user_password='$password' AND user_type='Customer'";
                $stmt = ($this->conn)->prepare($sql);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
        }
}

?>