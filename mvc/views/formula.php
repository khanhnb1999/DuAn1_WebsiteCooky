<?php require_once "./mvc/views/layouts/header.php";?>
<style>
    .banner__carousel {
        display: none;
    }
</style>
<session class="session">
<div class="main_content">
        <div class="content__detail">
                <div class="main__title">
                        <h4>Công thức</h4>
                </div>
                <div class="filter-bar">
                <div class="main__search">
                        <div class="dropdown__selected">
                                <span id="cooky-cate" class="horizontal">Loại món
                                        <i class="far fa-angle-down"></i>
                                </span>
                        </div>
                </div>
                <div class="search__filter">
                        <?php foreach ($data["cate"] as $key => $value) : ?>
                        <div class="filter__item">
                                <div class="form-check">
                                <label class="form-check-label" for="<?= $value["catalog_id"] ?>">
                                <?= $value["catalog_name"] ?>
                                </label>
                                <input type="checkbox" class="form-check-input" id="<?= $value["catalog_id"] ?>"
                                onclick="listCate(<?= $value['catalog_id'] ?>)">
                                </div>
                        </div>
                        <?php endforeach; ?>
                </div>
                </div>
        </div>

    <div class="delicious__foods">
        <div class="foods__title">
            <h3>Món ngon mỗi ngày</h3>
        </div>
        <div class="cates__cook" id="list-cate">
            <?php foreach ($data["getOneDish"] as $value) : ?>
                <div class="firsts__item">
                    <div class="cooks__detail">
                        <a href="">
                            <img src="./admin/mvc/views/products/image/<?= $value['dish_image'] ?>" alt="">
                        </a>
                        <a href="" class="cook__name">
                            <?= $value['dish_name'] ?>
                        </a>
                        <div class="add__dish--table">
                            <span>
                                <a href="tableTray/add/<?= $value["dish_id"] ?>">Thêm</a>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>    
        </div>
    </div>
    <div class="item__iner">
        <div class="item__title">
            <h4>Mẹo vặt vào bếp</h4>
        </div>
        <div class="item__dish--blog">
            <div class="blog__dish">
                <div class="featured-item">
                    <div class="featured__image">
                        <img src="./page/img/meo1.jpg" alt="">
                    </div>
                    <div class="featured__text">
                        <h5><a href="">Mẹo chế biến món nấm thơm ngon tự nhiên cho gia đình</a></h5>
                        <p>Dựa theo mùi thơm và màu sắc của nấm. Nấm tươi thì màu sáng, mùi thơm rơm,
                                không có vết nhăn trên chop hay vết thâm trên
                                thân. Cắt thử nấm không bị chảy ra chất màu trắng sữa
                        </p>
                    </div>
                </div>
                <div class="featured-item">
                    <div class="featured__image">
                    <img src="./page/img/meo2.jpg" alt="">
                    </div>
                    <div class="featured__text">
                        <h5><a href="">Mẹo chế biến món nấm thơm ngon tự nhiên cho gia đình</a></h5>
                        <p>Dựa theo mùi thơm và màu sắc của nấm. Nấm tươi thì màu sáng,
                                mùi
                                thơm rơm,
                                không có vết nhăn trên chop hay vết thâm trên
                                thân. Cắt thử nấm không bị chảy ra chất màu trắng sữa
                        </p>
                    </div>
                </div>
            </div>
            <div class="blog__dish">
                <div class="featured-item">
                    <div class="featured__image">
                    <img src="./page/img/meo3.jpg" alt="">
                    </div>
                    <div class="featured__text">
                        <h5><a href="">Mẹo chế biến món nấm thơm ngon tự nhiên cho gia đình</a></h5>
                        <p>Dựa theo mùi thơm và màu sắc của nấm. Nấm tươi thì màu sáng, mùi thơm rơm,
                                không có vết nhăn trên chop hay vết thâm trên
                                thân. Cắt thử nấm không bị chảy ra chất màu trắng sữa
                            </p>
                    </div>
                </div>
                <div class="featured-item ">
                    <div class="featured__image">
                    <img src="./page/img/meo4.jpg" alt="">
                    </div>
                    <div class="featured__text">
                        <h5><a href="">Mẹo chế biến món nấm thơm ngon tự nhiên cho gia đình</a></h5>
                        <p>Dựa theo mùi thơm và màu sắc của nấm. Nấm tươi thì màu sáng, mùi
                                thơm rơm,
                                không có vết nhăn trên chop hay vết thâm trên
                                thân. Cắt thử nấm không bị chảy ra chất màu trắng sữa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</session>

<?php require_once "./mvc/views/layouts/footer.php";?>