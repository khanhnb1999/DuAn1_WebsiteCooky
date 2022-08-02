
<?php require_once "./mvc/views/layouts/header.php" ?>

<div class="form__product">
    <div class="content border border-5 p-3">
        <div class="content__title mb-3 text-center">
            <h2>THÊM MÓN ĂN</h2>
        </div>
        <form action="<?php echo SITE_URL; ?>/product/add" method="post" enctype="multipart/form-data">
            <div class="input__news">
                <div class="item ">
                    <input type="text" class="form-control input__control border border-success border-3"
                    name="dish_name" placeholder="Tên món ăn">
                </div>
                <div class="item">
                    <select name="cate_id" class="form-control input__control border border-success border-3">
                        <option value="">Loại món ăn</option>
                        <?php foreach($data['catalog'] as $cat): ?>
                            <option value="<?= $cat['catalog_id'] ?>"><?= $cat['catalog_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="item">
                    <input type="text" class="form-control input__control border border-success border-3"
                     name="dish_price" placeholder="Giá món ăn">
                </div>
                <div class="item">
                    <input type="file" class="form-control input__control border border-success border-3" 
                    name="fileToUpload">
                </div>
            </div>
            <div class="choice__dish d-flex">
                <div class="dish" style="width: 200px">
                    <select name="tray_id" class="form-control input__control text-center p-1 border border-success border-3">
                        <option>Chọn Loại Bàn Ăn</option>
                        <?php foreach($data['tray'] as $cat): ?>
                            <option value="<?= $cat['tray_id'] ?>"><?= $cat['tray_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="unit" style="width: 200px;">
                    <select name="tray_id" class="form-control input__control text-center p-1 border border-success border-3 mx-3">
                        <option>Chọn Đơn Vị</option>
                        <?php foreach($data['tray'] as $cat): ?>
                            <option value="<?= $cat['tray_id'] ?>"><?= $cat['tray_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row input__fruit intro my-3 text-center mt-5">
                <div class="col-md-6 desc__item">
                    <h4>GIỚI THIỆU MÓN ĂN</h4>
                    <textarea type="text" class="form-control " name="dish_desc" rows="10" id="editor1"></textarea>
                </div>
                <div class=" col-md-6 desc__item">
                    <h4>CÁC BƯỚC THỰC HIỆN</h4>
                    <textarea type="text" class="form-control" name="dish_intro" rows="10" id="editor2"></textarea>
                </div>
            </div>
            <div class="input__fruit my-3">
                <button type="submit" class="btn btn-success">Thêm món ăn</button>
                <button type="submit" class="btn btn-info mx-3" name="add-tray" 
                value="add-tray">Thêm vào bàn ăn</button>
            </div>
        </form>
    </div>
</div>
<?php require_once "./mvc/views/layouts/footer.php" ?>
