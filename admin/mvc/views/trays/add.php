
<?php require_once "./mvc/views/layouts/header.php" ?>
    <session>
        <div style="margin: 250px 550px" class="border border-5 p-3">
            <form action="<?php echo SITE_URL; ?>/tray/add" method="post" enctype="multipart/form-data">
                <div class="border border-3 p-3">
                    <div>
                        <input type="text" class="form-control mb-5 p-3" name="tray_name" placeholder="Tên bàn ăn ">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success mt-5">Thêm Bàn Ăn</button>
                </div>
            </form>
        </div>
    </session>
<?php require_once "./mvc/views/layouts/footer.php" ?>