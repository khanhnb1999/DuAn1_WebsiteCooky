
<?php require_once "./mvc/views/layouts/header.php" ?>



<session>
    <div class="content p-3" style=" margin: 100px auto">
        <form action="<?php echo SITE_URL; ?>/comment/deleteAll" method="post">
            <div class="content__list">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr class="table-primary">
                                <th>CHECK</th>
                                <th>ID</th>
                                <th>CONTENT</th>
                                <th>DATE</th>
                                <th>STATUS</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data["Comment"] as $value) : ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name='ids[]' id='check_all' class="form-check-input"
                                        value='<?= $value['comment_id'] ?? 0; ?>'>
                                    </td>
                                    <td><?= $value['comment_id'] ?? 0 ?></td>
                                    <td><?= $value['content'] ?></td>
                                    <td style="font-weight:600"><?= $value['date'] ?></td>
                                    <td style="font-weight:600"><?= $value['status'] ?></td>
                                    <td>
                                        <a onclick="return confirm('Bạn có muốn xóa không!!!')" 
                                        href="<?php echo SITE_URL; ?>/comment/delete/<?= $value['comment_id'] ?>" class="btn btn-danger"><i class="fas fa-backspace"></i></a>
                                        <a href="<?php echo SITE_URL; ?>/comment/update/<?= $value['comment_id'] ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
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
        <div class="pagination d-flex justify-content-center mt-5">
            <div class="pagination__item">
                <?php
                    $total_record = $data["totalRecord"];
                    $page = $data['page'];
                    $page_one =$data['page_one'];
                    $total_page = ceil($total_record / $page_one);
                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($i == $page) {
                        echo "<a class='active btn btn-info text-white'>$i</a>";
                        } else {
                        echo "<a href='".SITE_URL."/comment/index/$i' class=' btn btn-secondary mx-1'>$i</a>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</session>

<?php require_once "./mvc/views/layouts/footer.php";?>