
<?php require_once "./mvc/views/layouts/header.php" ?>
    <session>
        <div style="margin: 250px 550px">
            <form action="<?php echo SITE_URL; ?>/unit/add" method="post" enctype="multipart/form-data">
                <div class="border border-5 p-3">
                    <div>
                        <input type="text" class="form-control mb-5" name="unit_name" placeholder="Đơn vị: ml, g, l...">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Add Unit</button>
                    </div>
                </div>
            </form>
        </div>
    </session>
<?php require_once "./mvc/views/layouts/footer.php" ?>