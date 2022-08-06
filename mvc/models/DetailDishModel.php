<?php
    class DetailDishModel extends BaseModel{
        function top5($dishDetail){
            $sql = "SELECT * FROM dish where catalog_id=$dishDetail ORDER BY dish_id DESC LIMIT 5 ";
            // var_dump($sql);die;
            $stmt = ($this->conn)->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        // function getCat($id){
        //     $sql ="SELECT catalog_id from dish where dish_id = ".$id."";
        //     $stmt = ($this->conn)->prepare($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // }
        public function showcmt($id){
            $sql = "SELECT A.comment_id,A.content,A.date,B.user_name FROM comments A  INNER JOIN   users B ON A.user_id =B.user_id WHERE  A.dish_id = $id AND A.status =1";
            $stmt = ($this->conn)->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
       
    }
?>