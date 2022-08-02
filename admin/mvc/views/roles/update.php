<?php require_once "./mvc/views/layouts/header.php" ?>
<?php $value = $data['role'] ?>
    <session>
        <div style="margin: 250px 550px">
            <form action="<?php echo SITE_URL; ?>/role/update" method="post" enctype="multipart/form-data">
                <input type="hidden" name="role_id" value="<?= $value['role_id'] ?>">
                <div class="border border-5 p-3">
                    <div>
                        <input type="text" class="form-control mb-5" name="role_name" value="<?= $value['name'] ?>">
                    </div>
                    <div>
                    <input type="text" class="form-control mb-5" name="role_code" value="<?= $value['code'] ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">UPDATE ROLE</button>
                    </div>
                </div>
            </form>
        </div>
    </session>
<?php require_once "./mvc/views/layouts/footer.php" ?>