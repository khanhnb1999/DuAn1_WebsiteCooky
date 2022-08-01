
<?php $value = $data['unit'] ?>
<?php require_once "./mvc/views/layouts/header.php" ?>
    <session>
        <div style="margin: 250px 550px">
            <form action="<?php echo SITE_URL; ?>/unit/update/<?=$value['unit_id']?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="unit_id" value="<?= $value["unit_id"] ?>">
                <div class="border border-5 p-3">
                    <div>
                        <input type="text" class="form-control mb-5" name="unit_name" value="<?= $value["unit_name"] ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </session>
<?php require_once "./mvc/views/layouts/footer.php" ?>