<?php require_once "./mvc/views/layouts/header.php";?>
<style>
    .banner__carousel {
        display: none;
    }
</style>

<session class="session">
    <div class="grid__app">
        <div class="add__formula">
            <div class="title__add-formula">
                <p>Tạo công thức mới</p>
            </div>
            <div class="step">
                <div class="introduction__step">
                    <p>
                        <span>Bước 1: </span> Hãy mô tả "<strong>Tên món ăn</strong>" của bạn nhé!
                    </p>
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
                        <span>Bước 2:</span>&nbsp;Hãy nhập "<strong>Tên món ăn</strong>" và 
                        nhớ chọn "<strong>Ảnh đại diện</strong>" là một hình thành phẩm thật hấp dẫn nhé!
                    </p>
                </div>
                <div class="input__group--dish">
                    <div class="dish-name mb-3">
                        <strong>2.1 - Tên món ăn</strong>
                        <input type="text" id="filter-name" name="dish_name" data-tab="name-error"
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
                    <p>
                        <span>Bước 3 :</span>&nbsp;Nhập thông tin nguyên vật liệu cần chuẩn bị cho món ăn của bạn.
                    </p>
                </div>
                <div class="add__contents">
                    <div class="add__fields content_row info__ingredient">
                        <div class=" space-1">
                            <input type="text" name="ingredient[' + 1 +'][name]" id="igr-name" data-tab="igr-name-error"
                            class="form-control p-3 border" placeholder="Tên nguyên liệu...">
                            <span id="igr-name-error"></span>
                        </div>
                        <div class=" space-2">
                            <input type="text" name="ingredient[' + 1 +'][quantity]" id="igr-quantity" data-tab="igr-quantity-error"
                            class="form-control p-3 border" placeholder="Số lượng...">
                            <span id="igr-quantity-error"></span>
                        </div>
                        <div class=" space-3">
                            <input type="text" name="ingredient[' + 1 +'][unit]" id="igr-unit" data-tab="igr-unit-error"
                            class="form-control p-3 border" placeholder="Đơn vị...">
                            <span id="igr-unit-error"></span>
                        </div>
                        <div class=" space-4">
                            <input type="text" name="ingredient[' + 1 +'][note]" 
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
                    <textarea type="text" name="dish_desc" id="editor2" class="form-control filter-desc " rows="10" ></textarea>
                    <span id="desc_error"></span>
                </div>
            </div>

            <div class="post__dish">
                <strong>Bây giờ, bạn hãy chia sẻ công thức của bạn ngay nhé!</strong><br>
                <button type="button" id="add-ingredient" class="btn btn-success my-3">Đăng công thức</button>
            </div>
        </div>
    </div>
</session>

<?php require_once "./mvc/views/layouts/footer.php";?>
