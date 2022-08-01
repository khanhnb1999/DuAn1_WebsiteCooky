<?php $value = $data['tray'] ?>

<?php require_once "./mvc/views/layouts/header.php" ?>
    <session>
        <div style="margin: 250px 550px" class="border border-5 p-3">
            <form action="<?php echo SITE_URL; ?>/tray/update/<?=$value['tray_id']?>" method="post" enctype="multipart/form-data">
                <div class="border border-3 p-3">
                    <div>
                        <input type="text" class="form-control mb-5 p-3" name="tray_name" value="<?= $value['tray_name'] ?>">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success mt-5">Update</button>
                </div>
            </form>
        </div>
    </session>
<?php require_once "./mvc/views/layouts/footer.php" ?>