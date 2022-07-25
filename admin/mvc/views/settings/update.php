<?php 
$value = $data['setting'];
require_once "./mvc/views/layouts/header.php";?>


<div style="width:1500px; margin: 160px auto" class="border p-3">
    <form action="?url=setting/update/<?=$value['setting_id']?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="setting_id" value="<?= $value['setting_id'] ?>">
          <div class="row store__info">
               <div class="col-lg-4 contact">
                    <h5>email</h5>
                    <input type="text" class="form-control" name="email"   value="<?= $value['email'] ?>">
               </div>
               <div class="col-lg-4 contact">
                    <h5>ADDRESS</h5>
                    <input type="text" class="form-control" name="address" rows="7"  value="<?= $value['address'] ?>">
               </div>
               <div class="col-lg-4 contact">
                    <h5>PHONE NUMBER</h5>
                    <input type="text" class="form-control" name="phone_number" rows="7"  value="<?= $value['phone_number'] ?>">
               </div>
               
               <div class="col-lg-12 description">
               <h5 for="">GIỚI THIỆU CÔNG TY</h5>
                    <textarea type="text" class="form-control" name="description" rows="7" id="editor2">
                         <?= $value['description'] ?>
                    </textarea>
               </div>
               
          </div>
          <div class="row form__group mt-3">
               <div class="col-lg-12 input__fruit">
                    <p class="m-1"><b>BANNER</b></p>
                    <input type="hidden" name="banner" value="<?=$value['banner']?>">
                    <input type="file" class="form-control" name="banner">
                    <div class="my-1">
                         <img src="./mvc/views/settings/image/<?=$value['banner']?>" width="400px" alt="">
                    </div>
               </div>
          </div>
          <div class="input__fruit my-3">
               <button type="submit" class="btn btn-success">Update</button>
          </div>
    </form>
</div>
<?php require_once "./mvc/views/layouts/footer.php"?>