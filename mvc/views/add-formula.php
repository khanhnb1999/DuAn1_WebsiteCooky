<?php require_once "./mvc/views/layouts/header.php";?>
<style>
    .banner__carousel {
        display: none;
    }
</style>

<session class="session">
    <div class="grid__app">
        <div class="add__formula">
            <div class="form__product">
                <div class="content">
                    <div class="content__title mt-3 mb-5 text-center">
                        <h2>THÊM MÓN ĂN MỚI</h2>
                    </div>
                    <form action="AddFormula/add" method="post" enctype="multipart/form-data">
                        <div class="input__news">
                            <div class="item ">
                                <input type="text" name="dish_name" id="hidden-message" 
                                class="form-control input__control border border-3" placeholder="Tên món ăn">
                                <div class="current__message" id="current-message">
                                    <span>Tên món ăn</span>
                                </div>
                            </div>
                            <div class="item">
                                <input type="text"  name="catalog_name" 
                                class="form-control input__control border border-3" placeholder="Loại món ăn...">
                            </div>
                            <div class="item">
                                <input type="text" name="dish_price"
                                class="form-control input__control border  border-3" placeholder="Giá món ăn">
                            </div>
                            <div class="item">
                                <input type="file" name="fileToUpload" 
                                class="form-control input__control border border-3" >
                            </div>
                        </div>
                        <div class="row input__fruit intro my-3 text-center mt-5">
                            <div class="col-md-6 desc__item">
                                <h4>GIỚI THIỆU MÓN ĂN</h4>
                                <textarea type="text" class="form-control " name="dish_desc" rows="10" id="editor1"></textarea>
                            </div>
                            <div class=" col-md-6 desc__item">
                                <h4>CÁC BƯỚC THỰC HIỆN</h4>
                                <textarea type="text" class="form-control" name="dish_intro" rows="10" id="editor2"></textarea>
                            </div>
                        </div>
                        <div class="content-box mb-5">
                            <div class="product-add">
                                <button type="button" id="btn-click" class="btn btn-info my-3 border border-3">Thêm Nguyên Liệu</button>
                            </div>
                            <div class="add__content">
                            </div>
                        </div>
                        <div class="input__fruit my-3">
                            <button type="submit" class="btn btn-success" name="add-tray" 
                            value="add-tray">Thêm Mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</session>

<?php require_once "./mvc/views/layouts/footer.php";?>