<div class="delicious__foods">
    <div class="cates__cook">
        <?php foreach ($data["getOneDish"] as $value) : ?>
            <div class="firsts__item">
                <div class="cooks__detail">
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