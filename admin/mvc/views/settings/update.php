<?php 
$value = $data['setting'];
require_once "./mvc/views/layouts/header.php";?>
<div style="width:1700px; margin: 150px auto" class="border border-5  p-3">
    <form action="<?php echo SITE_URL; ?>/setting/update/<?=$value['setting_id']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="setting_id" value="<?= $value['setting_id'] ?>">
        <div class="row store__info mb-3 text-center">
            <div class="col-lg-4 contact mb-3">
                <h5>EMAIL</h5>
                <input type="text" class="form-control p-3 border-success" name="email"   value="<?= $value['email'] ?>">
            </div>
            <div class="col-lg-4 contact mb-3">
                <h5>ADDRESS</h5>
                <input type="text" class="form-control p-3 border-success" name="address" rows="7"  value="<?= $value['address'] ?>">
            </div>
            <div class="col-lg-4 contact mb-3">
                <h5>PHONE NUMBER</h5>
                <input type="text" class="form-control p-3 border-success" name="phone_number" rows="7"  value="<?= $value['phone_number'] ?>">
            </div>
        </div>
        <div class="row form__group mt-3">
            <div class="col-lg-6 description">
                <h5 class="mb-1">GIỚI THIỆU CÔNG TY</h5>
                <textarea type="text" class="form-control" name="description" rows="8" id="editor2">
                        <?= $value['description'] ?>
                </textarea>
            </div>
            <div class="col-lg-6 input__fruit">
                <p class="m-1"><b>BANNER</b></p>
                <input type="hidden" name="banner" value="<?=$value['banner']?>">
                <input type="file" class="form-control border border-success p-3" name="banner">
                <div class="mt-1 border border-5">
                    <img src="<?php echo SITE_URL; ?>/mvc/views/settings/image/<?=$value['banner']?>" width="810px" alt="">
                </div>
            </div>
        </div>
        <div class="input__fruit my-3">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>
<?php require_once "./mvc/views/layouts/footer.php"?>