
<?php require_once "./mvc/views/layouts/header.php" ?>
<session>
        <div class="content p-3" style=" margin: 100px auto">
                <div class="content__button--add d-flex justify-content-center mb-3">
                        <h3>TOP 5 USER CÓ NHIỀU CÔNG THỨC NHẤT</h3>
                </div>
                <form action="<?php echo SITE_URL; ?>/product/upload" method="post">
                        <div class="content__list border border-3 border-bottom-0 mb-3">
                                <table class="table table-hover text-center">
                                        <thead>
                                                <tr class="table-primary">
                                                        <th>CHOICE</th>
                                                        <th>ID</th>
                                                        <th>NAME</th> 
                                                        <th>EMAIL</th> 
                                                        <th>CÔNG THỨC</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <?php foreach ($data['product'] as $value) : ?>
                                                        <tr>
                                                                <td>
                                                                        <input class="form-check-input" type="checkbox" name='ids[]' id='check_all'  value='<?= $value['id'] ?? 0; ?>'>
                                                                </td>
                                                                <td><?= $value['id'] ?></td>
                                                                <td style="font-weight:600"><?= $value['user_name'] ?></td>
                                                                <td style="font-weight:600"><?= $value['user_email'] ?></td>
                                                                <td>
                                                                       <?= $value['total'] ?>
                                                                </td>
                                                        </tr>
                                                <?php endforeach; ?>
                                        </tbody>
                                </table>
                        </div>
                </form>
        </div>
</session>
<?php require_once "./mvc/views/layouts/footer.php" ?>



