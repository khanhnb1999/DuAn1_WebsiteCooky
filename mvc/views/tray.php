<?php require_once "./mvc/views/layouts/header.php";?>
<style>
    .banner__carousel {
        display: none;
    }
</style>
<session class="session">
    <div class="main__content">
        <div class="main__tray">
            <div class="tray__home">
                <div class="tray__titles">
                    <h3>Mâm cơm Gia Đình</h3>
                </div>
                <div class="content__intro">
                    <div class="side__left">
                        <div class="filter__group">
                            <div class="title__head">
                                <h6>MÂM CƠM GIA ĐÌNH</h6>
                            </div>
                            <div class="horizontals-scroll">
                                <?php foreach ($data["tray"] as $value) : ?>
                                    <div class="aside__content">
                                        <input type="checkbox" class="form-check-input" id="<?= $value["tray_id"] ?>">
                                        <label class="form-check-label mx-3 list-name" for="<?= $value["tray_id"] ?>">
                                            <?= $value["tray_name"] ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>    
                            </div>
                        </div>
                        <div class="floating__enabled">
                            <div class="title__head">
                                <h6>MÓN ĂN NỔI BẬT</h6>
                            </div>
                            <?php foreach ($data["dish"] as $value) : ?>
                                <div class="item__product">
                                    <div class="item__avatar">
                                        <a href="">
                                            <img src="./admin/mvc/views/products/image/<?= $value["dish_image"] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="item__introduction">
                                        <?= $value["dish_name"] ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>    
                        </div>
                    </div>
                    <div class="side__right">
                        <div class="info-family">
                            <?php foreach ($data["tray-price"] as $value) : ?>
                                <div class="tray__items">
                                    <div class="tray__image">
                                        <div class="router">
                                            <a href=""><img src="./page/img/demo1.jpg" alt=""></a>
                                        </div>
                                        <div class="router">
                                            <a href=""><img src="./page/img/demo1.jpg" alt=""></a>
                                        </div>
                                        <div class="router">
                                            <a href=""><img src="./page/img/demo1.jpg" alt=""></a>
                                        </div>
                                        <div class="router">
                                            <a href=""><img src="./page/img/demo1.jpg" alt=""></a>
                                        </div>
                                        <div class="router">
                                            <a href=""><img src="./page/img/demo1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tray__price">
                                        <div class="current-price">
                                            <h5><?= number_format($value["price"],0) ?><sup>đ</sup></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</session>
<?php require_once "./mvc/views/layouts/footer.php";?>