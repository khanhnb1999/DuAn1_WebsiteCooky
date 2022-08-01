
<?php require_once "./mvc/views/layouts/header.php" ?>
<div class="modal__content">
     <div class="form__group">
          <div class="item account__admin">
               <div class="header__title">
                    <h5>Cập nhật tài khoản</h5>
               </div>
               <form action="<?php echo SITE_URL; ?>/login/profile" method="post">
                    <?php $value = $data['getUser'] ?>
                    <div class="info__manager">
                        <div class="title">
                            <span>Username</span>
                        </div>
                        <div class="get__input">
                            <input type="text" name="ad-username" class="form-control user-case"
                            placeholder="username" value="<?= $value['user_name'] ?>">
                        </div>
                    </div>
                    <div class="info__manager">
                        <div class="title">
                            <span>Email</span>
                        </div>
                        <div class="get__input">
                            <input type="email" name="ad-email" class="form-control user-case" 
                            placeholder="username@gmail.com" value="<?= $value['user_email'] ?>">
                        </div>
                    </div>
                    <div class="info__manager">
                        <div class="title">
                            <span>Password</span>
                        </div>
                        <div class="get__input">
                            <input type="password" name="ad-password" class="form-control user-case" 
                            placeholder="password" value="<?= $value['user_password'] ?>">
                        </div>
                    </div>
                    <div class="info__manager">
                        <div class="title">
                            <span>Address</span>
                        </div>
                        <div class="get__input">
                            <input type="address" name="ad-address" class="form-control user-case" 
                            placeholder="address" value="<?= $value['user_address'] ?>">
                        </div>
                    </div>
                    <div class="info__manager">
                        <div class="title">
                            <span>Phone</span>
                        </div>
                        <div class="get__input">
                            <input type="phone" name="ad-phone" class="form-control user-case" 
                            placeholder="Phone" value="<?= $value['user_phone'] ?>">
                        </div>
                    </div>
                    <div class="update__admin">
                        <button type="submit" name='btn-update' value="Update">Update</button>
                    </div>
               </form>
          </div>
          <div class="item add__member">
          <div class="header__title">
                    <h5>Thêm thành viên quản trị</h5>
               </div>
               <form action="<?php echo SITE_URL; ?>/login/profile" method="post">
                    <div class="member__news">
                        <div class="title">
                            <span>Username</span>
                        </div>
                        <div class="get__input">
                            <input type="text" name="mb-username" class="form-control user-case" placeholder="Username" >
                        </div>
                    </div>
                    <div class="member__news">
                        <div class="title">
                            <span>Email</span>
                        </div>
                        <div class="get__input">
                            <input type="email" name="mb-email" class="form-control user-case" placeholder="Username@gmail.com">
                        </div>
                    </div>
                    <div class="member__news">
                        <div class="title">
                            <span>Password</span>
                        </div>
                        <div class="get__input">
                            <input type="password" name="mb-password" class="form-control user-case" placeholder="Password">
                        </div>
                    </div>
                    <div class="member__news">
                        <div class="title">
                            <span>Address</span>
                        </div>
                        <div class="get__input">
                            <input type="address" name="mb-address" class="form-control user-case" placeholder="Address" >
                        </div>
                    </div>
                    <div class="member__news">
                        <div class="title">
                            <span>Phone</span>
                        </div>
                        <div class="get__input">
                            <input type="phone" name="mb-phone" class="form-control user-case" placeholder="Phone" >
                        </div>
                    </div>
                    <div class="create__member">
                        <button type="submit" name='create-account'>Create member</button>
                    </div>
               </form>
          </div>
     </div>
</div>
<?php require_once "./mvc/views/layouts/footer.php" ?>