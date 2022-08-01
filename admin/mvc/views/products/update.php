
<?php require_once "./mvc/views/layouts/header.php" ?>
<?php $value = $data['product'] ?>
<div class="form__product">
    <div class="content border border-5 p-3">
        <div class="content__title mb-3 text-center">
            <h2>THÊM MÓN ĂN</h2>
        </div>
        <form action="<?php echo SITE_URL; ?>/product/update/<?= $value['dish_id'] ?>" method="post" enctype="multipart/form-data">
            <div class="input__news">
                <input type="hidden" name="dish_id" value="<?= $value['dish_id'] ?>">
                <div class="item ">
                    <input type="text" class="form-control input__control" name="dish_name" value="<?= $value['dish_name'] ?>">
                </div>
                <div class="item">
                    <select name="cate_id" class="form-control input__control">
                        <option value="">Loại món ăn</option>
                        <?php foreach($data['catalog'] as $cat): ?>
                            <?php if($cat['catalog_id'] == $value['catalog_id']) : ?>
                                <option selected value="<?= $cat['catalog_id'] ?>"><?= $cat['catalog_name'] ?></option>
                            <?php else: ?>
                                <option value="<?= $cat['catalog_id'] ?>"><?= $cat['catalog_name'] ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="item">
                    <input type="text" class="form-control input__control" name="dish_price" value="<?= $value['dish_price'] ?>">
                </div>
                <div class="item">
                    <input type="hidden" name="fileToUpload" value="<?=$value['dish_image']?>">
                    <input type="file" class="form-control input__control" name="fileToUpload">
                </div>
            </div>
            <div class="avatar d-flex justify-content-end">
                <span class="border border-5">
                    <img src="<?php echo SITE_URL; ?>/mvc/views/products/image/<?=$value['dish_image'] ?>" width="100px; height: 100px" alt="">
                </span>
            </div>
            <div class="row input__fruit intro my-3 text-center">
                <div class="col-md-6 desc__item">
                    <h4>GIỚI THIỆU MÓN ĂN</h4>
                    <textarea type="text" class="form-control " name="dish_desc" rows="10" id="editor1">
                        <?= $value['dish_desc'] ?>
                    </textarea>
                </div>
                <div class=" col-md-6 desc__item">
                    <h4>CÁC BƯỚC THỰC HIỆN</h4>
                    <textarea type="text" class="form-control" name="dish_intro" rows="10" id="editor2">
                        <?= $value['dish_intro'] ?>
                    </textarea>
                </div>
            </div>
            <div class="content-box mb-5">
                <div class="product-add">
                    <button type="button" id="btn-click" class="btn btn-info my-3 border border-3">Thêm Nguyên Liệu</button>
                </div>
                <div class="add__content">
                    <?php foreach ($data['ingredient'] as $key => $value){
                        ?>
                        <div class="add__fields content_row" id="current_<?php echo $key; ?>">
                            <div class="ingredient"> 
                                <input type="text" name="ingredient[<?php echo $key; ?>][name]" value="<?= $value['name'] ?? "" ?>" class="form-control p-3" placeholder="Tên nguyên liệu...">
                                <input type="hidden" id="ingredient_<?php echo $key; ?>" name="ingredient[<?php echo $key; ?>][id]" value="<?= $value['id'] ?? "" ?>">
                            </div>
                            <div class="quantity">
                                <input type="text" name="ingredient[<?php echo $key; ?>][quantity]" value="<?= $value['quantity'] ?? "" ?>" class="form-control p-3"  placeholder="Số lượng...">
                            </div>
                            <div class="unit">
                                <input type="text" name="ingredient[<?php echo $key; ?>][unit]" value="<?= $value['unit'] ?? "" ?>" class="form-control p-3" placeholder="Đơn vị...">
                            </div>
                            <div class="note">
                                <input type="text" name="ingredient[<?php echo $key; ?>][note]"value="<?= $value['note'] ?? "" ?>" class="form-control p-3" placeholder="Ghi chú...">
                            </div>
                            <div class="delete-input">
                                <button type="button" class="btn btn__danger"  onclick="deleteNl('<?php echo $key; ?>')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
            <div class="input__fruit my-3">
                <button type="submit" class="btn btn-success">UPDATE</button>
            </div>
        </form>
    </div>
</div>
<?php require_once "./mvc/views/layouts/footer.php" ?>

