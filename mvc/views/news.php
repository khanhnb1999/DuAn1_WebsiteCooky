<?php require_once "./mvc/views/layouts/header.php";?>
<style>
    .banner__carousel {
        display: none;
    }
</style>

<session class="session">
        <div class="grid__app">
                <div class="main_blog">
                        <div class="blog1">
                                <div class="row">
                                        <div class="col-xl-7">
                                                <?php foreach ($data["getTop1"] as $value) : ?>
                                                        <div class="blog1_image">
                                                        <a href=""><img src="./admin/mvc/views/news/image/<?= $value['image_new'] ?>" alt=""></a>
                                                        </div>
                                                        <div class="blog1_text">
                                                                <h5>
                                                                        <a href="news/newDetail/<?= $value['new_id'] ?>"><?= $value['new_title'] ?></a>
                                                                </h5>
                                                        </div>
                                                 <?php endforeach; ?>       
                                        </div>
                                        <div class="col-xl-5">
                                                <?php foreach ($data["getTop"] as $value) : ?>
                                                        <div class="item__small">
                                                                <div class="item--image">
                                                                        <img src="./admin/mvc/views/news/image/<?= $value['image_new'] ?>" alt="">
                                                                </div>
                                                                <div class="items--text">
                                                                        <h6 ><a href="news/newDetail/<?= $value['new_id'] ?>"><?= $value["new_title"] ?></a></h6>
                                                                </div>
                                                        </div>
                                                <?php endforeach; ?>       
                                        </div>
                                </div>
                        </div>
                        <!-------------end blog1------------>

                        <div class="blog2">
                                <div class="blog-headline">
                                        <div class="blog2_text">
                                                <h5>Bí quyết - mẹo vặt nấu nướng</h5>
                                        </div>
                                        <div class="blog2_input">
                                                <form action="" class="search__title">
                                                        <div class="blog-search-box">
                                                                <div class="search_icon">
                                                                        <button type="submit" class="btn_search">
                                                                                <i class="fas fa-search"></i>
                                                                        </button>
                                                                </div>
                                                                <div class="search__input">
                                                                        <input type="text" name="keyword" class="form__control" placeholder="Tìm kiếm chuyên đề">
                                                                </div>
                                                        </div>
                                                </form>
                                        </div>
                                </div>
                        </div>
                        <!-- -----------end blog2-------------- -->
                        <div class="blog-box">
                                <div class="group">
                                        <?php foreach ($data["news"] as $value) : ?>
                                                <div class="group-item">
                                                        <a href="news/newDetail/<?= $value['new_id'] ?>">
                                                                <img src="./admin/mvc/views/news/image/<?= $value['image_new'] ?>" alt="">
                                                        </a>
                                                        <h4>
                                                                <a href="news/newDetail/<?= $value['new_id'] ?>">
                                                                <?= $value["new_title"] ?>
                                                                </a>
                                                        </h4>
                                                        <strong>
                                                                <i class="fal fa-user-edit"></i> Khanhnb
                                                        </strong>
                                                        <span><?= $value["new_date"] ?></span>
                                                </div>
                                        <?php endforeach; ?>
                                </div>
                        </div>
                </div>
        </div>
</session>

<?php require_once "./mvc/views/layouts/footer.php";?>
