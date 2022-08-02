<?php
    require_once "./mvc/views/layouts/header.php";
    
    
?>
<div style="width:1580px; margin: 160px auto" class="border border-5 p-3">
    <form action="<?php echo SITE_URL; ?>/news/add" method="post" enctype="multipart/form-data">
       <div class="row description text-center">
            <div class="col-lg-6 input__fruit">
                <h3>TIÊU ĐỀ</h3>
                <textarea type="text" class="form-control" name="new_title" rows="3" id="editor1"></textarea>
            </div>
            <div class="col-lg-6 input__fruit ">
            <h3>NỘI DUNG TIN TỨC</h3>
                <textarea type="text" class="form-control" name="new_content" rows="7" id="editor2"></textarea>
            </div>
       </div>
        <div class="row news__image mt-3 text-center">
            <div class="col-lg-6 input__fruit">
                <h6>IMAGES</h6>
                <input type="file" class="form-control p-3" name="fileToUpload">
            </div>
            <div class="col-lg-6 input__fruit">
                <h6>NGÀY ĐĂNG TIN</h6>
                <input type="date" class="form-control p-3" name="new_date" placeholder="Enter created date">
            </div>
        </div>
        <div class="input__fruit my-3">
            <button type="submit" class="btn btn-success">Add news</button>
        </div>
    </form>
</div>

<?php require_once "./mvc/views/layouts/footer.php"?>