<?php require_once "./mvc/views/layouts/header.php" ?>
<div class="content p-3" style="margin-top:100px">
    <div class="content__list--user">
        <form action="<?php echo SITE_URL; ?>/user/deleteAll" method="post">
            <div class="content__list--user">
                <table class="table table-hover text-center border border-1">
                    <thead>
                        <tr class="table-primary">
                            <th>CHECK</th>
                            <th>ID</th>
                            <th>NAMES</th>
                            <th>EMAIL</th>
                            <th>ADDRESS</th>
                            <th>TYPES</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['user'] as $value): ?>
                        <tr>
                            <td>
                                <input type="checkbox" name='ids[]' id='check_all'class="form-check-input"
                                 value='<?= $value['user_id'] ?? 0; ?>'>
                            </td>
                            <td><?=$value['user_id']?></td>
                            <td><?=$value['user_name']?></td>
                            <td><?=$value['user_email']?></td>
                            <td><?=$value['user_address']?></td>
                            <td><?=$value['user_type']?></td>
                            <td>
                                <a href="<?php echo SITE_URL; ?>/user/update/<?=$value['user_id']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Bạn có muốn xóa không!!!')"
                                    href="<?php echo SITE_URL; ?>/user/delete/<?=$value['user_id']?>" class="btn btn-danger"><i class="fas fa-backspace"></i></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="checkbox">
                <a href="#" class="btn btn-success" id="btn1">Check all</a>
                <a href="#" class="btn btn-warning text-white mx-3" id="btn2">Uncheck all</a>
            </div>
        </form>
        <div class="pagination d-flex justify-content-center mt-5">
            <div class="pagination__item">
                <?php
                    $total_record = $data["totalRecord"];
                    $page = $data['page'];
                    $pages_one = $data['page_one'];
                    $total_page = ceil($total_record / $pages_one);
                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($i == $page) {
                            echo "<a class='active btn btn-info text-white'>$i</a>";
                        } else {
                            echo "<a href='".SITE_URL."/user/index/$i' class=' btn btn-secondary mx-1'>$i</a>";
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</div>
<?php require_once "./mvc/views/layouts/footer.php" ?>