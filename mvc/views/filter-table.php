<div class="show__content--details">
        <div class="formula__details" >
                <div class="ingredient__title">
                        <h4>Thành phần</h4>
                </div>
                <div class="intro__ingredient">
                        <?php foreach ($data['ingredient'] as $value) : ?>
                                <div class="ingredient__name">
                                <span>
                                        <?= $value['name']?> <?=$value['quantity'] ?> <?=  $value['unit']?>
                                </span>
                                </div>
                        <?php endforeach; ?>    
                </div>
                <div class="ingredients__title">
                        <h4>Các bước thực hiện</h4>
                </div>
                <div class="title__head--dish">
                        MÓN ĂN : <?= $data['intro']['dish_name'] ?>
                </div>
                <?= $data['intro']['dish_intro'] ?>
        </div>
</div>