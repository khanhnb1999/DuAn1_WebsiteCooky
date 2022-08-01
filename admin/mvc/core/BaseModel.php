<?php
class BaseModel extends ConnectDb {
    public function __construct(){
        parent::__construct();
    }
    
    // Thêm
    public function insert($table, $data){
        if(!empty($table) && (!empty($data))) {
            $field = "";
            $valueInsert = "";
            foreach($data as $fieldName => $value) {
                $field .= $fieldName. ',';
				$valueInsert .= "'".$value."'". ',';
            }
            $field = rtrim($field,',');
			$valueInsert = rtrim($valueInsert,',');
            $sql = "INSERT INTO $table ($field ) VALUES ($valueInsert)";
            $stmt = ($this->conn)->prepare($sql);
            return $stmt->execute();
        }
    }

    // Sửa
    public function update($table, $data, $where){
        if(!empty($table) && (!empty($data)) && (!empty($where))) {
            $stringSql = "";
            foreach($data as $fieldName => $value) {
                $stringSql .= "$fieldName='$value',";
            }
            $stringSql = rtrim($stringSql,',');
            $sql = "UPDATE $table SET $stringSql WHERE $where";
            $stmt = ($this->conn)->prepare($sql);
            return $stmt->execute();
        }
    }

    // Xóa
    public function delete($table, $where){
        if(!empty($table) && !empty($where)){
            $sql = "DELETE FROM $table WHERE $where";
            $stmt = ($this->conn)->prepare($sql);
            return $stmt->execute();
        }
    }
    
    // Lấy 1 dòng dữ liệu 1 điều kiện
    public function getOne($table, $where){
        $sql = "SELECT * FROM $table where $where";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getMany($table, $where){
        $sql = "SELECT * FROM $table where $where";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy 1 dòng dữ liệu với 2 điều kiện
    public function getTwoCondition($table,$where1,$where2) {
        $sql = "SELECT * FROM $table WHERE $where1 AND $where2";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Hàm lấy tất cả dữ liệu
    public function getAll($table){
        $sql = "SELECT * FROM $table";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Hàm lấy theo limit
    public function getAllLimit($table,$tableId,$sort,$condition1,$condition2) {
        $sql = "SELECT * FROM $table ORDER BY $tableId $sort LIMIT $condition1,$condition2";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Hàm tính tổng số bản ghi
    public function totalRecord($table) {
        $sql = "SELECT * FROM $table";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount();
    }

    // Hàm Inner join
    public function innerJoin($column,$table = [], $tableId = []) {
        $sql = "SELECT SUM($column) FROM $table[0] INNER JOIN $table[1] 
        ON $table[0].$tableId[0] = $table[1].$tableId[0] INNER JOIN $table[2]
        ON $table[1].$tableId[1] = $table[2].$tableId[1] WHERE $table[2].$tableId[1] = $tableId[2]";
        $stmt = ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Hàm phân trang
    public function paging($table,$tableId,$pages_one,$page) {
        $start_from = ($page - 1) * $pages_one;
        $sql = "SELECT * FROM $table ORDER BY $tableId ASC LIMIT $start_from,$pages_one";
        $stmt= ($this->conn)->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}