
<?php require_once "./mvc/views/layouts/header.php" ?>
<?php $value = $data['user'] ?? "" ?>
<div class="update__user">
    <div class="tab__form border border-5">
        <form action="<?php echo SITE_URL; ?>/user/update/<?=$value['user_id']?>" method="post">
            <input type="hidden" name="user_id" value="<?= $value['user_id'] ?>">
            <div class="tab__form--body">
                <div class="up__user">
                    <h4>Cập nhật tài khoản</h4>
                </div>
                <div class="user-case">
                    <div class="title__case">
                        <h5>Username</h5>
                    </div>
                    <div class="input__update">
                        <input type="text" class="form-control ur-edit" name="username" 
                        placeholder="Enter username" value="<?= $value['user_name'] ?>">
                    </div>
                </div>

                <div class="user-case">
                    <div class="title__case">
                        <h5>Email</h5>
                    </div>
                    <div class="input__update">
                        <input type="email" class="form-control ur-edit" name="email" 
                        placeholder="Enter email"  value="<?= $value['user_email'] ?>">
                    </div>
                </div>

                <div class="user-case">
                    <div class="title__case">
                        <h5>Password</h5>
                    </div>
                    <div class="input__update">
                        <input type="password" class="form-control ur-edit" name="password" 
                        placeholder="Enter password" value="<?= $value['user_password'] ?>">
                    </div>
                </div>

                <div class="user-case">
                    <div class="title__case">
                        <h5>Address</h5>
                    </div>
                    <div class="input__update">
                        <input type="address" class="form-control ur-edit" name="address" 
                        placeholder="Enter address"  value="<?= $value['user_address'] ?>">
                    </div>
                </div>

                <div class="user-case">
                    <div class="title__case">
                        <h5>Phones</h5>
                    </div>
                    <div class="input__update">
                        <input type="text" class="form-control ur-edit" name="phones" 
                        placeholder="Enter phones numbers" value="<?= $value['user_phone'] ?>">
                    </div>
                </div>

                <div class="list__roll border border-3 p-3">
                    <?php if(!empty($data['allRole'])) { ?>
                        <div class="name__role d-flex flex-wrap">
                            <div class="role__item">
                                <?php foreach($data['allRole'] as $value) { ?>
                                    <label for="<?= $value['role_id'] ?>">
                                        <?= $value["name"] ?>
                                    </label>
                                    <input type="checkbox" class="form-check-input mx-3" id="<?= $value['role_id'] ?>"
                                    name="role[]" value="<?= $value['role_id'] ?>"
                                    <?php if(in_array($value['role_id'],$data['roleOfUser'])) echo ' checked '; ?>/>
                                <?php } ?>    
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="input__fruit ">
                    <button type="submit" class="btn">Update</button>
                </div>
        </form>
    </div>
</div>
<?php require_once "./mvc/views/layouts/footer.php" ?>