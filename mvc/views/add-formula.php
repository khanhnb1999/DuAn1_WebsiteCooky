<?php require_once "./mvc/views/layouts/header.php";?>
<style>
    .banner__carousel {
        display: none;
    }
</style>

<session class="session">
    <form action="" method="post" enctype="multipart/form-data">
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
                        <textarea type="text" class="form-control" name="dish_intro" rows="10" id="editor2"></textarea>
                    </div>
                </div>
                <div class="step">
                   <div class="introduction__step">
                        <p>
                            <span>Bước 2:</span>&nbsp;Hãy nhập "<strong>Tên món ăn</strong>" và 
                            nhớ chọn ảnh đại diện là một hình thành phẩm thật hấp dẫn nhé!
                        </p>
                   </div>
                    <div class="input__group--dish">
                        <div class="dish-name mb-3">
                            <strong>2.1 - Tên món ăn</strong>
                            <input type="text" name="dish_name" class="form-control p-3" placeholder="Tên món ăn...">
                        </div>
                        <div class="dish-images">
                            <strong>2.2 - Chọn ảnh</strong>
                            <input type="file" name="fileToUpload" class="form-control p-3">
                        </div>
                    </div>
                </div>

                <div class="step">
                    <div class="introduction__step">
                        <p>
                            <span>Bước 3 :</span>&nbsp;Nhập thông tin nguyên vật liệu cần chuẩn bị cho món ăn của bạn.
                        </p>
                    </div>
                    <div class="product-add">
                        <button type="button" id="btn-click" class="btn btn-info mb-3">Thêm Nguyên Liệu</button>
                    </div>
                    <div class="add__contents"></div>
                </div>

                <div class="step">
                    <div class="introduction__step">
                        <p>
                            <span>Bước 4 :</span>&nbsp;Nhập các bước thực hiện món ăn.Nhớ kèm theo hình ảnh minh họa nhé!
                        </p>
                    </div>
                    <div class="input__step--dish">
                        <textarea type="text" class="form-control " name="dish_desc" rows="10" id="editor1"></textarea>
                    </div>
                </div>

                <div class="post__dish">
                    <strong>Bây giờ, bạn hãy chia sẻ công thức của bạn ngay nhé!</strong><br>
                    <button type="submit" class="btn btn-success my-3">Đăng công thức</button>
                </div>
            </div>
        </div>
    </form>
</session>

<?php require_once "./mvc/views/layouts/footer.php";?>