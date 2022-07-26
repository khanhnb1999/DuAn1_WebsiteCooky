<?php 
    require_once "./mvc/views/layouts/header.php";
    $value = $data["newDetail"];
?>
<style>
    .banner__carousel {
        display: none;
    }
</style>

<session class="session">  
    <div class="main__detail">
        <div class="title">
            <h4>Blog</h4>
        </div>
        <div class="group__main--content">
            <div class="row">
                <div class="col-xl-8 group__detail">
                    <?= $value["new_description"] ?>
                </div>
                <div class="col-xl-4 ">
                    <div class="detail__hot">
                        <div class="detail__hot-title">
                            <h4>Xem nhiều nhất</h4>
                        </div>
                        <div>
                            <div class="detail__product">
                                <div class="detail__product--image">
                                    <img src="./img/blog4.jpg" alt="">
                                </div>
                                <div class="detail__product--text">
                                    <p><a href="">Cooky Market - Nơi bạn có thể</a></p>
                                    <span>
                                        <a href="">26.9k lượt xem</a>
                                    </span>
                                </div>
                            </div>
                            <div class="detail__product">
                                <div class="detail__product--image">
                                    <img src="./img/blog4.jpg" alt="">
                                </div>
                                <div class="detail__product--text">
                                    <p><a href="">Cooky Market - Nơi bạn có thể</a></p>
                                    <span>
                                        <a href="">26.9k lượt xem</a>
                                    </span>
                                </div>
                            </div>
                            <div class="detail__product">
                                <div class="detail__product--image">
                                    <img src="./img/blog4.jpg" alt="">
                                </div>
                                <div class="detail__product--text">
                                    <p><a href="">Cooky Market - Nơi bạn có thể</a></p>
                                    <span>
                                        <a href="">26.9k lượt xem</a>
                                    </span>
                                </div>
                            </div>
                            <div class="detail__product">
                                <div class="detail__product--image">
                                    <img src="./img/blog4.jpg" alt="">
                                </div>
                                <div class="detail__product--text">
                                    <p><a href="">Cooky Market - Nơi bạn có thể</a></p>
                                    <span>
                                        <a href="">26.9k lượt xem</a>
                                    </span>
                                </div>
                            </div>
                            <div class="detail__product">
                                <div class="detail__product--image">
                                    <img src="./img/blog4.jpg" alt="">
                                </div>
                                <div class="detail__product--text">
                                    <p><a href="">Cooky Market - Nơi bạn có thể</a></p>
                                    <span>
                                        <a href="">26.9k lượt xem</a>
                                    </span>
                                </div>
                            </div>
                            <div class="detail__product">
                                <div class="detail__product--image">
                                    <img src="./img/blog4.jpg" alt="">
                                </div>
                                <div class="detail__product--text">
                                    <p><a href="">Cooky Market - Nơi bạn có thể</a></p>
                                    <span>
                                        <a href="">26.9k lượt xem</a>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</session>

<?php require_once "./mvc/views/layouts/footer.php";?>