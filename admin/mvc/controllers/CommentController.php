<?php
    class Comment extends Controller{
        // SHOW COMMENT
        public function index($id){
            $getModel = $this->model("CommentModel");
            $result = $getModel->paging('comments','comment_id',5,$id);
            $totalRecord = $getModel->totalRecord("comments");
            $this->view("Comments/index" ,
            [
                "Comment" =>$result,
                "totalRecord" =>$totalRecord,
                "page" =>$id,
                "page_one"=>5
            ]);
        }
        // hàm sửa  
        public function update($id){
            $getModel = $this->model('CommentModel');
            $result=$getModel->getOne("comments","comment_id=$id");
            if(isset($_POST['check-comment'])) {
                $data=[
                    'comment_id' => $_POST['comment-id'] ?? '' ,
                    'status' => $_POST['status'] ?? 0
                ];
                $where ="comment_id = $id";
                $getModel->update("comments",$data,$where);
                // print_r($where);die;  
                header("Location: ".SITE_URL."/comment/index/1");
            }
            $this->view("comments/update",[
                "comment" => $result
            ]);
            


        }
        // DELETE COMMENT
        public function delete($id){
            $getModel =$this->model("CommentModel");
            if(isset($id)){
                $where = "comment_id=$id";
                $getModel->delete("comments",$where);
                header("Location: ".SITE_URL."/comment/index/1");
            }
        }
        // Delete all cmt
        public function deleteAll(){
            $ids = $_POST['ids']??0;
            if(!empty($ids)){
                $getModel = $this->model("CommentModel");
                foreach($ids as $id){
                    $where = "comment_id = $id";
                    $getModel->delete("comments",$where);
                };
                header("Location: ".SITE_URL."/comment/index/1");
            }
        }
        
        
    }
        ?>