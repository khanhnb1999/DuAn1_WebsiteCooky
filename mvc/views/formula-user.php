<?php require_once "./mvc/views/layouts/header.php";?>

<div class="views__formula">
        <div class="formula__your">
                <div class="title__views">
                        <h3>Công thức của bạn</h3>
                </div>
                <div class="products__item">
                        <?php foreach ($data["formulaUser"] as $value) : ?>
                                <div class="pr__item">
                                        <img src="admin/mvc/views/products/image/<?= $value['dish_image'] ?>" alt="">
                                        <p><?= $value['name'] ?></p>
                                        <div class="scroll__dish--block">
                                                <div class="icon__current--dish">
                                                        <div class="icon__views--details">
                                                                <a href="javascript:void()"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                        <div class="icon__update--details">
                                                               <a href="<?= SITE_URL ?>/AddFormula/update/<?= $value["id"] ?>"> <i class="fas fa-edit"></i></a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                         <?php endforeach; ?>       
                </div>
        </div>
</div>

<?php require_once "./mvc/views/layouts/footer.php";?>