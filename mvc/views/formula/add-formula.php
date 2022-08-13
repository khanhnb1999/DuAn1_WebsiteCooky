<?php require_once "./mvc/views/layouts/header.php";?>

<style>
        .banner__carousel {
                display: none;
        }
</style>

<div class="model__open" id="current-content">
        <div class="model__hidden">
                <div class="has__content--show">
                        <div class="button__current">
                                <button onclick="currentBox()"><i class="far fa-times"></i></button>
                        </div>
                        <div class="box__head">
                                <p> <i class="fas fa-check-double"></i> Bạn đã thêm công thức thành công</hp>
                        </div>
                        <div class="box__body">
                                <div class="box__body--small">
                                <!-- <div class="body-image">
                                        <img src="admin/mvc/views/products/image/ba chỉ luộc han quốc.jpg" alt="">
                                </div> -->
                                <!-- <div class="body-intro">
                                        <p id="name_dm"></p>
                                        <span>Bộ sưu tập của bạn gồm 3 món ăn</span>
                                </div> -->
                                <p>Tên công thức</p>
                                <span  id="name_dish"></span>
                                </div>
                        </div>
                        <div class="box__footer">
                                <div class="view-formula">
                                <a href="<?= SITE_URL ?>/formulaUser">Xem công thức của bạn</a>
                                </div>
                        </div>
                </div>
        </div>
</div>

<session class="session">
        <form action="" id="form-1" method="POST" enctype="multipart/form-data" >
                <div class="grid__app">
                        <div class="add__formula">
                                <div class="title__add-formula">
                                        <p>Tạo công thức mới</p>
                                </div>
                                <div class="step">
                                        <div class="introduction__step">
                                                <p> <span>Bước 1: </span> Hãy mô tả "<strong>Tên món ăn</strong>" của bạn nhé! </p>
                                        </div>
                                        <div class="input__step--dish">
                                                <textarea type="text" name="dish_intro" style="width:800px" id="filter-intro" data-tab="intro-error"
                                                class="form-control border mb-1" rows="5" placeholder="Mô tả tên món ăn..." ></textarea>
                                                <span class="my-1" id="intro-error"></span>
                                        </div>
                                </div>
                                <div class="step">
                                        <div class="introduction__step">
                                                <p>
                                                <span>Bước 2:</span>&nbsp;Hãy nhập "<strong>Tên món ăn</strong>" và nhớ chọn "<strong>Ảnh đại diện</strong>" là một hình thành phẩm thật hấp dẫn nhé!
                                                </p>
                                        </div>
                                        <div class="both__name">
                                                <div class="dish-name mb-3">
                                                        <strong>2.1 - Tên món ăn</strong>
                                                        <input type="text" id="filter-names" name="dish_name" data-tab="name-error"
                                                        class="form-control border p-3 mb-1" placeholder="Tên món ăn...">
                                                        <span class="my-1" id="name-error"></span>
                                                </div>
                                                <div class="dish-images">
                                                        <strong>2.2 - Chọn ảnh</strong>
                                                        <input type="file" id="filter-image" name="fileToUpload" onchange="validateTypeAndSize(this)"
                                                        data-tab="image-error" class="form-control p-3 mb-1 border">
                                                        <span id="image-error"></span>
                                                </div>
                                        </div>
                                </div>
                                <div class="step">
                                        <div class="introduction__step">
                                                <p> <span>Bước 3 :</span>&nbsp;Nhập thông tin nguyên vật liệu cần chuẩn bị cho món ăn của bạn.</p>
                                        </div>
                                        <div class="add__contents">
                                                <div class="add__fields content_row info__ingredient">
                                                        <div class=" space-1">
                                                                <input type="text" name="ingredient[0][name]" id="igr-name" data-tab="igr-name-error"
                                                                class="form-control p-3 border" placeholder="Tên nguyên liệu...">
                                                                <span id="igr-name-error"></span>
                                                        </div>
                                                        <div class=" space-2">
                                                                <input type="text" name="ingredient[0][quantity]" id="igr-quantity" data-tab="igr-quantity-error"
                                                                class="form-control p-3 border" placeholder="Số lượng...">
                                                                <span id="igr-quantity-error"></span>
                                                        </div>
                                                        <div class=" space-3">
                                                                <input type="text" name="ingredient[0][unit]" id="igr-unit" data-tab="igr-unit-error"
                                                                class="form-control p-3 border" placeholder="Đơn vị...">
                                                                <span id="igr-unit-error"></span>
                                                        </div>
                                                        <div class=" space-4">
                                                                <input type="text" name="ingredient[0][note]" id="igr-note"
                                                                class="form-control p-3" placeholder="Ghi chú...">
                                                        </div>
                                                </div>    
                                        </div>
                                        <div class="product-add">
                                                <button type="button" id="btn-click" class="btn btn-success mb-3">
                                                        <i class="fas fa-plus"></i>
                                                </button>
                                        </div>
                                </div>

                                <div class="step">
                                        <div class="introduction__step">
                                                <p>
                                                        <span>Bước 4 :</span>&nbsp;Nhập các bước thực hiện món ăn.Nhớ kèm theo hình ảnh minh họa nhé!
                                                </p>
                                        </div>
                                        <div class="input__step--dish">
                                                <span id="description-error"></span>
                                                <textarea type="text" name="dish_desc" id="editor1"  class="form-control  border "
                                                 rows="10"  data-tab="description-error"></textarea>
                                        </div>
                                </div>

                                <div class="post__dish">
                                        <strong>Bây giờ, bạn hãy chia sẻ công thức của bạn ngay nhé!</strong><br>
                                        <button type="submit" id="add-ingredient" class="btn btn-success my-3">Đăng công thức</button>
                                </div>
                        </div>
                </div>
        </form>    
</session>

<?php require_once "./mvc/views/layouts/footer.php";?>
