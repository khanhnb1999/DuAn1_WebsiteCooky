
<?php require_once "./mvc/views/layouts/header.php" ?>
<session>
    <div class="content p-3" style=" margin: 100px auto">
        <div class="content__button--add d-flex justify-content-end mb-3">
            <div class="add__device">
                <a href="<?php echo SITE_URL; ?>/product/add" class="btn btn-success">ADD </a>
            </div>
        </div>
        <form action="<?php echo SITE_URL; ?>/product/upload" method="post">
            <div class="content__list border border-3 border-bottom-0 mb-3">
                <table class="table table-hover text-center">
                    <thead>
                        <tr class="table-primary">
                            <th>CHOICE</th>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>IMAGES</th>
                            <th>PRICE</th>
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
                                <td style="font-weight:600"><?= number_format($value['dish_price']) ?></td>
                                <td>
                                    <a href="<?php echo SITE_URL; ?>/product/update/<?= $value['dish_id'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                    <a onclick="return confirm('Bạn có muốn xóa không!!!')" 
                                    href="<?php echo SITE_URL; ?>/product/delete/<?= $value['dish_id'] ?>" class="btn btn-danger"><i class="fas fa-backspace"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="choice__dish" style="width: 200px">
                <select name="tray_id" class="form-control input__control text-center p-3 border border-success border-3">
                    <option>Chọn Loại Mâm Cơm</option>
                    <?php foreach($data['tray'] as $cat): ?>
                        <option value="<?= $cat['tray_id'] ?>"><?= $cat['tray_name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="checkbox mt-5">
                <a href="#" class="btn btn-success" id="btn1">Check all</a>
                <a href="#" class="btn btn-warning text-white mx-3" id="btn2">Uncheck all</a>
                <button type="submit"  class="btn btn-success mx-3">Thêm Món Ăn Vào Mâm Cơm</button>
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
                        echo "<a href='".SITE_URL."/product/index/$i' class=' btn btn-secondary mx-1'>$i</a>";
                    }
                }
            ?>
        </div>
    </div>
</session>
<?php require_once "./mvc/views/layouts/footer.php" ?>



