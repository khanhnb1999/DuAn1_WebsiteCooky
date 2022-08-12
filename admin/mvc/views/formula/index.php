
<?php require_once "./mvc/views/layouts/header.php" ?>
<session>
        <div class="content p-3" style=" margin: 100px auto">
                <form action="<?php echo SITE_URL; ?>/product/upload" method="post">
                        <div class="content__list border border-3 border-bottom-0 mb-3">
                                <table class="table table-hover text-center">
                                        <thead>
                                                <tr class="table-primary">
                                                <th>CHOICE</th>
                                                <th>ID</th>
                                                <th>NAME</th>
                                                <th>IMAGES</th>
                                                <th>ACTIONS</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <?php foreach ($data['product'] as $value) : ?>
                                                        <tr>
                                                                <td>
                                                                        <input class="form-check-input" type="checkbox" name='ids[]' id='check_all' 
                                                                        value='<?= $value['dish_id'] ?? 0; ?>'>
                                                                </td>
                                                                <td><?= $value['dish_id'] ?></td>
                                                                <td style="font-weight:600"><?= $value['dish_name'] ?></td>
                                                                <td>
                                                                        <img src="<?php echo SITE_URL; ?>/mvc/views/products/image/<?= $value['dish_image'] ?>" width="70px" alt="">
                                                                </td>
                                                                <td>
                                                                        <a href="<?php echo SITE_URL; ?>/product/updateFormula/<?= $value['dish_id'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                                                        <a onclick="return confirm('Bạn có muốn xóa không!!!')" 
                                                                        href="<?php echo SITE_URL; ?>/product/deleteFormula/<?= $value['dish_id'] ?>" class="btn btn-danger"><i class="fas fa-backspace"></i></a>
                                                                </td>
                                                        </tr>
                                                <?php endforeach; ?>
                                        </tbody>
                                </table>
                        </div>
                        <div class="checkbox mt-5">
                                <a href="#" class="btn btn-success" id="btn1">Check all</a>
                                <a href="#" class="btn btn-warning text-white mx-3" id="btn2">Uncheck all</a>
                        </div>
                </form>
                <div class="pagination d-flex justify-content-center mt-5">
                        <?php
                                $total_record = $data["totalRecord"];
                                $page = $data['page'];
                                $pages_one = $data['page_one'];
                                $total_page = ceil($total_record / $pages_one);
                                for ($i = 1; $i <= $total_page; $i++) {
                                if ($i == $page) {
                                        echo "<a class='active btn btn-info text-white'>$i</a>";
                                } else {
                                        echo "<a href='".SITE_URL."/userFormula/index/$i' class=' btn btn-secondary mx-1'>$i</a>";
                                }
                                }
                        ?>
                </div>
        </div>
</session>
<?php require_once "./mvc/views/layouts/footer.php" ?>



