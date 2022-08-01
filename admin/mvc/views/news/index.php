<?php
require_once "./mvc/views/layouts/header.php";
?>

<div class="content p-3 " style="margin: 120px auto;">
    <div class="content__button d-flex justify-content-end mb-3">
        <div class="content__button">
            <a href="<?php echo SITE_URL; ?>/news/add" class="btn btn-success">ADD NEWS</a>
        </div>
    </div>
    <div class="content__list--catalog">
        <form action="<?php echo SITE_URL; ?>/news/deleteAll" method="post" multipart="multipart/form-data">
            <div class="content__list--fruit">
                <table class="table table-hover border">
                    <thead>
                        <tr class="table-primary text-center">
                            <th>CHECK</th>
                            <th>ID</th>
                            <th>IMAGES</th>
                            <th>TITLE</th>
                            <th>DATE</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data["new"] as $value) : ?>
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name='ids[]' id='check_all' class="form-check-input"
                                    value='<?= $value['new_id'] ?? 0; ?>'>
                            </td>
                            <td class="text-center"><?= $value['new_id'] ?></td>
                            <td class="text-center">
                                <img src="<?php echo SITE_URL; ?>/mvc/views/news/image/<?= $value['image_new'] ?>" width="100px" alt="">
                            </td>
                            <td><?= $value['new_title'] ?></td>
                            <td class="text-center"><?= $value['new_date'] ?></td>
                            <td class="text-center">
                                <a href="<?php echo SITE_URL; ?>/news/update/<?= $value['new_id'] ?>" class="btn btn-info"><i
                                        class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Bạn có muốn xóa không!!!')"
                                    href="<?php echo SITE_URL; ?>/news/delete/<?= $value['new_id'] ?>" class="btn btn-danger"><i
                                        class="fas fa-backspace"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="checkbox">
                <a href="#" class="btn btn-success" id="btn1">Check all</a>
                <a href="#" class="btn btn-warning text-white mx-3" id="btn2">Uncheck all</a>
            </div>
        </form>
    </div>
    <div class="pagination d-flex justify-content-center mt-5">
        <div class="pagination__item">

            <?php
            $total_record = $data["total"];
            $page = $data['page'];
            $pages_one = $data['page_one'];
            $total_page = ceil($total_record / $pages_one);
            for ($i = 1; $i <= $total_page; $i++) {
                if ($i == $page) {
                    echo "<a class='active btn btn-info text-white'>$i</a>";
                } else {
                    echo "<a href='".SITE_URL."/news/index/$i' class=' btn btn-secondary mx-1'>$i</a>";
                }
            }
            ?>


        </div>
    </div>
</div>


<?php require_once "./mvc/views/layouts/footer.php" ?>