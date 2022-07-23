
<?php require_once './mvc/views/layouts/header.php'  ?>

<div class="setting__modal">
     <div class="content" style="margin: 200px">
          <table class="table table-bordered">
               <thead class="text-center">
                    <tr>
                         <th>ID</th>
                         <th>LOGO</th>
                         <th>BANNER</th>
                         <th>CONTACT</th>
                         <th>DESCRIPTION</th>
                         <th>ACTIONS</th>
                    </tr>
               </thead>
               <tbody>
                    <?php foreach ($setting as $key => $value) : ?>
                         <tr>
                              <td><?= $value['setting_id'] ?></td>
                              <td>
                                   <img src="../settings/image/<?= $value['logo'] ?>" width="100" height="100" alt="">
                              </td>
                              <td>
                                   <img src="../settings/image/<?= $value['banner'] ?>" width="200" height="100" alt="">
                              </td>
                              <td><?= $value['contact'] ?></td>
                              <td><?= $value['description'] ?></td>
                              <td class="text-center ">
                                   <a href="update.php?id=<?= $value['setting_id'] ?>" class="btn btn-info m-1 text-center">Update</a>
                              </td>
                         </tr>
                    <?php endforeach; ?>
               </tbody>
          </table>
     </div>
</div>
<?php require_once "./mvc/views/layouts/footer.php" ?>