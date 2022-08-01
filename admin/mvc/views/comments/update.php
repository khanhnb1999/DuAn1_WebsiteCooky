    <?php
        $value =$data['comment'];
        require_once "./mvc/views/layouts/header.php";
    ?>
<div class="box__comment">
     <div class="content border border-5">
          <form action="<?php echo SITE_URL; ?>/comment/update/<?= $value['comment_id'] ?>" method="POST">
               <input type="hidden" name="comment-id" value="<?= $value['comment_id'] ?>">
               <div class="description">
                    <h4>Nội dung</h4>
                    <span><?= $value['content'] ?></span>
               </div>
               <div class="check__box">
                    <div class="check__right">
                            <div class="form-check">
                                <input class="form-check-input" 
                                name="status" type="checkbox" value="1" >
                                <label class="form-check-label" >Show</label>
                            </div>
                    </div>
                    <div class="check__left">
                        <div class="form-check">
                            <input  class="form-check-input" 
                            name="status" type="checkbox" value="0" >
                            <label class="form-check-label" >Hide</label>
                        </div>
                    </div>
               </div>
               <div class="check__submit">
                    <button type="submit" class="btn" name="check-comment">Update</button>
               </div>
          </form>
     </div>
</div>


<?php require_once "./mvc/views/layouts/footer.php"?>