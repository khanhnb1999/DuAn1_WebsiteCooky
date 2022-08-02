<?php
    $value = $data['news'];
    require_once "./mvc/views/layouts/header.php";
    

?>
<session>
<div  style="width:1580px; margin: 160px auto" class="border border-5 p-3">
    <form action="<?php echo SITE_URL; ?>/news/update/<?=$value['new_id']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="new_id" value="<?= $value['new_id'] ?>">
        <div class="row description">
            <div class="col-lg-6 input__fruit text-center">
                <h3>TIÊU ĐỀ</h3>
                <textarea type="text" class="form-control" name="new_title" rows="3"  id="editor1">
                    <?= $value['new_title'] ?>
                </textarea>
            </div>
            <div class="col-lg-6 input__fruit text-center">
                <h3>NỘI DUNG TIN TỨC</h3>
                <textarea type="text" class="form-control" name="new_description" rows="7"  id="editor2">
                    <?= $value['new_description'] ?>
                </textarea>
            </div>
        </div>
        <div class="row news__image mt-3">
            <div class="col-lg-6 input__fruit">
                <input type="hidden" name="fileToUpload" value="<?=$value['image_new']?>">
                <input type="file" class="form-control p-3" name="fileToUpload">
                <div class="my-1">
                    <img class="border border-5" src="<?php echo SITE_URL; ?>/mvc/views/news/image/<?=$value['image_new']?>" width="120px" alt="">
                </div>
            </div>
            <div class="col-lg-6 input__fruit">
                <input type="date" class="form-control p-3" name="new_date" placeholder="Enter created date" value="<?= $value['new_date'] ?>">
            </div>
        </div>
        <div class="input__fruit my-3">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>
</session>
<?php
require_once "./mvc/views/layouts/footer.php";?>