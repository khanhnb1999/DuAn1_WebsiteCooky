<?php require_once "./mvc/views/layouts/header.php";?>

<session class="session">   
    <div class="main__content">
        <div class="list__link">
            <div class="first__title">
                <h3>Vào Bếp</h3>
            </div>
            <div class="slider__bar">
                <div class="horizontal__scrollbar" id="slider">
                    <?php foreach ($data['home'] as $value) :?>
                        <div class="item">
                            <div class="avatar__cate">
                                <img src="./admin/mvc/views/catalogs/image/<?= $value['catalog_image'] ?>" alt="">
                            </div>
                            <div class="name__cate">
                                <span>
                                    <?= $value['catalog_name'] ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- end list link -->

        <div class="delicious__foods">
            <div class="food__title">
                <h3><i class="fas fa-utensils"></i> Món ngon mới nhất</h3>
            </div>
            <div class="cate__cook">
                <?php foreach ($data["dish"] as $value) : ?>
                    <div class="first__item">
                        <div class="cook__detail">
                            <a href="">
                                <img src="./admin/mvc/views/products/image/<?= $value['dish_image'] ?>" alt="">
                            </a>
                            <a href="" class="cook__name">
                                <?= $value['dish_name'] ?>
                            </a>
                            <div class="shows">
                                <div class="views">
                                    <i class="fas fa-eye"></i> 12
                                </div>
                                <div class="likes">
                                    <i class="fas fa-thumbs-up"></i> 22
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- end delicious foods -->

        <div class="outstanding__foods">
            <div class="food__title">
                <h3><i class="far fa-star"></i> Món ngon mỗi ngày</h3>
            </div>
            <div class="slider__food--outstanding">
                <div class="slider__horizontal" id="slider-food">
                    <?php foreach ($data["outstanding"] as $value) : ?>
                        <div class="list__cate">
                            <a href="">
                                <img src="./admin/mvc/views/products/image/<?= $value['dish_image'] ?>" alt="">
                            </a>
                            <a href="" class="cook__name">
                                <?= $value['dish_name'] ?>
                            </a>
                            <div class="shows">
                                <div class="views">
                                    <i class="fas fa-eye"></i> 12
                                </div>
                                <div class="likes">
                                    <i class="fas fa-thumbs-up"></i> 22
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End outstanding food -->

        <div class="news__food">
            <div class="food__title">
                <h3><i class="fas fa-newspaper"></i> Tin tức mới nhất</h3>
            </div>
            <div class="blogs">
                <?php foreach ($data["news"] as $value) : ?>
                    <div class="latest__news">
                        <div class="info__image">
                            <a href="">
                                <img src="./admin/mvc/views/news/image/<?= $value['image_new'] ?>" alt="">
                            </a>
                        </div>
                        <div class="details">
                            <a href="">
                                <?= $value['new_title'] ?>
                            </a>
                            <em>14/09/2022</em>
                            <p>Dựa theo mùi thơm và màu sắc của nấm. Nấm tươi thì màu sáng,
                                mùi thơm rơm, không có vết nhăn trên chop hay vết thâm trên thân.
                                Cắt thử nấm không bị chảy ra chất màu trắng sữa
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?> 
            </div>
        </div>
        <!-- end main content -->
    </div>
</session>

<?php require_once "./mvc/views/layouts/footer.php";?>