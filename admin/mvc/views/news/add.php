<?php
    require_once "./mvc/views/layouts/header.php";
    
    
?>
<div style="width:1080px; margin: 160px auto" class="border p-3">
    <form action="?url=news/add" method="post" enctype="multipart/form-data">
       <div class="row description">
            <div class="col-lg-6 input__fruit">
                <h6>TIÊU ĐỀ</h6>
                <textarea type="text" class="form-control" name="new_title" rows="3" id="editor1"></textarea>
            </div>
            <div class="col-lg-6 input__fruit ">
            <h6>NỘI DUNG TIN TỨC</h6>
                <textarea type="text" class="form-control" name="new_content" rows="7" id="editor2"></textarea>
            </div>
       </div>
        <div class="row news__image mt-3">
            <div class="col-lg-6 input__fruit">
                <h6>IMAGES</h6>
                <input type="file" class="form-control" name="fileToUpload">
            </div>
            <div class="col-lg-6 input__fruit">
                <h6>NGÀY ĐĂNG TIN</h6>
                <input type="date" class="form-control" name="new_date" placeholder="Enter created date">
            </div>
        </div>
        <div class="input__fruit my-3">
            <button type="submit" class="btn btn-success">Add news</button>
        </div>
    </form>
</div>

<?php require_once "./mvc/views/layouts/footer.php"?>