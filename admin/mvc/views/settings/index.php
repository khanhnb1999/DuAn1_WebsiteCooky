
<?php require_once './mvc/views/layouts/header.php'  ?>

<div class="setting__modal">
     <div class="content" style="margin: 140px">
          <table class="table table-bordered border border-3">
               <thead class="text-center ">
                    <tr class="table-primary">
                        <th>BANNER</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>PHONE NUMBER</th>
                        <th>DESCRIPTION</th>
                        <th>ACTIONS</th>
                    </tr>
               </thead>
               <tbody>
                    <?php foreach ($data["settings"] as $value ) : ?>
                         <tr>
                                <input type="hidden" value="<?= $value['setting_id'] ?>">
                                <td>
                                    <img src="<?php echo SITE_URL; ?>/mvc/views/settings/image/<?= $value['banner'] ?>" width="200" height="100" alt="">
                                </td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['address'] ?></td>
                                <td><?= '0'.$value['phone_number'] ?></td> 
                                <td><?= $value['description'] ?></td>
                                <td class="text-center ">
                                    <a href="<?php echo SITE_URL; ?>/setting/update/<?= $value['setting_id'] ?>" class="btn btn-info m-1 text-center">Update</a>
                                </td>
                         </tr>
                    <?php endforeach; ?>
               </tbody>
          </table>
     </div>
</div>
<?php require_once "./mvc/views/layouts/footer.php" ?>