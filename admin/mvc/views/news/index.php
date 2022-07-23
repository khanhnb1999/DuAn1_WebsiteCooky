<?php
    require_once "./mvc/views/layouts/header.php";
?>

<div class="content p-3 " style="margin: 120px auto;">
    <div class="content__button d-flex justify-content-end mb-3">
        <div class="content__button">
            <a href="?url=news/add" class="btn btn-success">ADD NEWS</a>
        </div>
    </div>
    <div class="content__list--catalog">
        <form action="?url=news/deleteAll" method="post" multipart="multipart/form-data">
            <div class="content__list--fruit">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th>CHECK</th>
                            <th>ID</th>
                            <th>IMAGES</th>
                            <th>TITLE</th>
                            <th>DATE</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data["new"] as $value): ?>
                        <tr>
                            <td>
                                <input type="checkbox" name='ids[]' id='check_all' value='<?= $value['new_id'] ?? 0; ?>'>
                            </td>
                            <td><?=$value['new_id']?></td>
                            <td><?=$value['new_title']?></td>
                            <td>
                                <img src="./mvc/views/news/image/<?= $value['image_new'] ?>" width="100px" alt="">
                            </td>
                            <td><?=$value['new_date']?></td>
                            <td>
                                <a href="?url=news/update/<?=$value['new_id']?>" class="btn btn-info">UPDATE</a>
                                <a onclick="return confirm('Bạn có muốn xóa không!!!')"
                                    href="?url=news/delete/<?=$value['new_id']?>" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="checkbox">
                <a href="#" class="btn btn-success" id="btn1">Check all</a>
                <a href="#" class="btn btn-warning text-white mx-3" id="btn2">Uncheck all</a>
                <button type="submit" class="btn btn-danger">Delete</button>
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
                        echo "<a href='?url=news/index/$i' class=' btn btn-secondary mx-1'>$i</a>";
                    }
                }
                ?>
            

        </div>
    </div>
</div>


<?php require_once "./mvc/views/layouts/footer.php" ?>