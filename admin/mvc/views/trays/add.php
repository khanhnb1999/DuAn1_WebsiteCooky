
<?php require_once "./mvc/views/layouts/header.php" ?>
    <session>
        <div style="margin: 250px 550px" class="border border-5 p-3">
            <form action="?url=catalog/add" method="post" enctype="multipart/form-data">
                <div class="border border-3 p-3">
                    <div>
                        <input type="text" class="form-control mb-5 p-3" name="catalog_name" placeholder="Tên mâm cơm từ 1->10 người ">
                    </div>
                    <!-- <div>
                        <a href="?url=product" class="btn btn-info mb-3">Thêm Món Ăn Vào Mâm Cơm</a>
                    </div> -->
                </div>
                <div>
                    <button type="submit" class="btn btn-success mt-5">Thêm Mâm Cơm</button>
                </div>
            </form>
        </div>
    </session>
<?php require_once "./mvc/views/layouts/footer.php" ?>