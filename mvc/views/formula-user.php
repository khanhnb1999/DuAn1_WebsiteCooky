<?php require_once "./mvc/views/layouts/header.php";?>

<div class="views__formula">
        <div class="formula__your">
                <div class="title__views">
                        <h3>Công thức của bạn</h3>
                </div>
                <div class="products__item">
                        <?php foreach ($data["formulaUser"] as $value) : ?>
                                <div class="pr__item">
                                        <img src="./mvc/views/formula/image/<?= $value['image'] ?> " alt="">
                                        <p><?= $value['name'] ?></p>
                                </div>
                         <?php endforeach; ?>       
                </div>
        </div>
</div>

<?php require_once "./mvc/views/layouts/footer.php";?>