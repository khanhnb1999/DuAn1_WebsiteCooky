<div class="delicious__foods" style="margin-top:7px;">
                <div class="foods__title">
                        <h3>Công thức xem nhiều nhất</h3>
                </div>
        <div class="cates__cook">
                <?php foreach ($data["result"] as $value) : ?>
                <div class="firsts__item">
                        <div class="cooks__detail">
                        <a href="<?= SITE_URL ?>/formula/detailDish/<?= $value["dish_id"] ?>">
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