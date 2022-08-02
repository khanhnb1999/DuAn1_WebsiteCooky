
<?php $value = $data['catalog'] ?>
<?php require_once "./mvc/views/layouts/header.php" ?>
    <session>
        <div style="margin: 250px 550px">
            <form action="<?php echo SITE_URL; ?>/catalog/update/<?=$value['catalog_id']?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="catalog_id" value="<?= $value["catalog_id"] ?>">
                <div class="border border-5 p-3">
                    <div>
                        <input type="text" class="form-control mb-5 p-3 border-success" name="catalog_name"
                        placeholder="Catalog name" value="<?= $value["catalog_name"] ?>">
                    </div>
                    <div class="mb-5">
                        <input type="hidden" name="fileToUpload" value=<?= $value["catalog_image"] ?>>
                        <input type="file" name="fileToUpload" class="form-control mb-1 border-success p-3">
                        <div class="">
                            <img class="border border-5" src="<?php echo SITE_URL; ?>/mvc/views/catalogs/image/<?= $value["catalog_image"] ?>" width="120px" alt="">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </session>
<?php require_once "./mvc/views/layouts/footer.php" ?>