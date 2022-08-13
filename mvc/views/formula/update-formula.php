<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="../../public/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/home.css">
    <link rel="stylesheet" href="../../public/css/formula.css">
    <link rel="stylesheet" href="../../public/css/news.css">
    <link rel="stylesheet" href="../../public/css/tray.css">
    <link rel="stylesheet" href="../../public/css/add-formula.css">
    <link rel="stylesheet" href="../../public/css/table-tray.css">
    <link rel="stylesheet" href="../../public/css/formula-user.css">
    <link rel="stylesheet" href="../../public/css/footer.css">
    <link rel="stylesheet" href="../../public/css/detail_dish.css">
    <link rel="icon" href="../../public/image/60.ico">
    <title>Home</title>
    <script type="text/javascript">
        var BaseUrl = '<?php echo SITE_URL; ?>';
    </script>
</head>
<body>
    <header class="header">
                <div class="header__top">
                        <div class="introduction">
                                <div class="hotline__store">
                                        <i class="fas fa-phone-square-alt"></i> <span>Hotline: 1900 1877</span>
                                </div>
                                <div class="line__space"></div>
                                <div class="address__store">
                                        <i class="fas fa-address-book"></i> <span>Địa chỉ: 132, Cầu Diễn, Nam Từ Liêm</span>
                                </div>
                        </div>
                <div class="tab__registration">
                        <div class="register">
                               <span class="has__current-login"><i class="fal fa-user-circle"></i> 
                                        <?php 
                                                if(isset($_SESSION['username'])) {
                                                        echo "Tài khoản: ".$_SESSION['username'];
                                                } else {
                                                        echo "Đăng kí";
                                                }
                                        ?>
                                </span>
                        </div>
                        <div class="tab__current--login">
                                <div class="line__spaces"></div>
                                <p id="btn__open">Đăng nhập</p>
                                <p><a href="<?= SITE_URL ?>/user/logout"><i class="fad fa-sign-out"></i> Đăng xuất</a></p>
                        </div>
                </div>        
                <div class="box__overlay" id="myForm">
                        <div class="form__registration">
                                <div class="modal__content">
                                        <button type="button" class="btn__close">
                                                <i class="fas fa-times"></i>
                                        </button>
                                        <div class="modal__body">
                                                <form action="" id="logout" method="post">
                                                        <div id="tab-register" class="user-tab-body ">
                                                                <div class="title">
                                                                        <span>Đăng kí</span>
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="text"  name="username" class="form-control form__controls border" id="filter-name"
                                                                        data-tab = "error-name" placeholder="Username">
                                                                        <span id="error-name"></span>
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="email" name="email"  class="form-control form__controls border"  id="filter-email"
                                                                        data-tab="error-email"  placeholder="Username@gmail.com">
                                                                        <span id="error-email"></span>
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="password" name="password"  class="form-control form__controls border" id="filter-pass"
                                                                         data-tab="error-password"  placeholder="Password">
                                                                        <span id="error-password"></span>
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="password" name="re-password" class="form-control form__controls border" id="filter-repass"
                                                                         data-tab="error-repass" placeholder="Re-password">
                                                                        <span id="error-repass"></span>
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="address" name="address" class="form-control form__controls border"  id="filter-address"
                                                                        data-tab="error-address"  placeholder="Address">
                                                                        <span id="error-address"></span>
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="phone" name="phone" class="form-control form__controls border" id="filter-phone"
                                                                         data-tab="error-phone" placeholder="Phone">
                                                                        <span id="error-phone"></span>
                                                                </div>
                                                                <div class="form__check">
                                                                        <input class="form-check-input" type="checkbox">
                                                                        <label class="form-check-label"> Remember</label>
                                                                </div>
                                                                <div class="modal__footer">
                                                                        <button type="submit"  id="btn-logout">Create account</button>
                                                                </div>
                                                        </div>
                                                </form>
                                                <!-- form registration -->
                                                <form action="" id="login" method="post">
                                                        <div id="tab-login" class="user-tab-body active">
                                                                <div class="form__login__title">
                                                                        <h4>Đăng nhập</h4>
                                                                        <p class="mt-3">Vui lòng đăng nhập vào tài khoản hiện có</p>
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="text" name="username1" id="username1" class="form-control form__controls border"
                                                                        placeholder="Username">
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="password" name="password1" id="password1" class="form-control form__controls border"
                                                                        placeholder="Enter password">
                                                                        <span id="error-login"></span>
                                                                </div>
                                                                <div class="keep__me">
                                                                        <input class="form-check-input" type="checkbox" name="remember" value="1">
                                                                        <label class="form-check-label">Keep me logged in</label>
                                                                </div>
                                                                <div class="dashboard">
                                                                        <button class="btn btn__info" type="submit"  id="btn-login">Login  in</button>
                                                                </div>
                                                        </div>
                                                </form>
                                                <!-- form login -->
                                                <form action="" id="forgot-password" method="post">
                                                        <div id="tab-forgot" class="user-tab-body recover__password">
                                                                <div class="tab__password">
                                                                        <div class="tab__header">
                                                                                <h3>Quên mật khẩu</h3>
                                                                                <p>Sử dụng biểu mẫu để khôi phục nó</p>
                                                                        </div>
                                                                        <div class="tab__body ">
                                                                                <div class="tab__body--input">
                                                                                        <input type="email" class="form-control form__controls" name="email2"placeholder="Username@gmail.com">
                                                                                </div>
                                                                        </div>
                                                                        <div class="tab__footer">
                                                                                <button class="btn btn__danger" type="submit"  id="login-forgot">Recover password</button>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </form>       
                                        </div>
                                        <!-- form forgot password -->
                                        <div class="modal__footer">
                                                <div class="form__account">
                                                        <ul class="group__account">
                                                                <li class="user-switch-form box-register " data-tab="tab-register">Đăng kí</li>
                                                                <li class="user-switch-form box-login d-none" data-tab="tab-login">Đăng nhập</li>
                                                                <li class="user-switch-form box-forgot" data-tab="tab-forgot">Quên mật khẩu</li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
            <!-- end form register -->
        </div>
        <!-- Introduction and call contact about store -->
        <div class="grid-header">
            <div class="header__navigation">
                <div class="menu__left">
                        <ul class="nav__bar">
                                <li class="nav__item ">
                                <span class="logo"><a href="<?= SITE_URL ?>/home">Tasty</a></span>
                                </li>
                                <li class="nav__item">
                                <a href="<?= SITE_URL ?>/home" class="nav__link">Home</a>
                                </li>
                                <li class="nav__item">
                                <a href="<?= SITE_URL ?>/news" class="nav__link">Bài Viết</a>
                                </li>
                                <li class="nav__item">
                                        <div class="dropdown__menu--formula">
                                                <span class="nav__link" id="has-link">Công Thức <i class="far fa-angle-down"></i></span>
                                                <div class="side__down">
                                                        <a href="<?= SITE_URL ?>/formula" >Tất cả công thức</a>
                                                        <a href="<?= SITE_URL ?>/addFormula" id="add-formula">Thêm công thức</a>
                                                        <a href="<?= SITE_URL ?>/formulaUser">Xem công thức của bạn</a>
                                                </div>
                                        </div>
                                </li>
                        </ul>
                </div>
                <div class="search__rights">
                    <form action="" class="search__cookings">
                        <div class="sr__input">
                            <input type="text" name="keyword" class="form_sr" placeholder="Tìm món ăn">
                        </div>
                        <div class="sr__icon">
                            <button type="submit" name="submit" value="submit" class="btn__search">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end navigation -->

        <div class="banner__carousel">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner carousel__images">
                    <div class="carousel-item active">
                        <img src="./public/image/banner.jpg" alt="Los Angeles" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/image/banner2.jpg" alt="Chicago" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/image/banner.jpg" alt="New York" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <style>
    .banner__carousel {
        display: none;
    }
</style>
<div class="model__open" id="current-content">
        <div class="model__hidden">
                <div class="has__content--show">
                        <div class="button__current">
                                <button onclick="currentBox()"><i class="far fa-times"></i></button>
                        </div>
                        <div class="box__head">
                                <p> <i class="fas fa-check-double"></i> Bạn đã thêm công thức thành công</hp>
                        </div>
                        <div class="box__body">
                                <div class="box__body--small">
                                <!-- <div class="body-image">
                                        <img src="admin/mvc/views/products/image/ba chỉ luộc han quốc.jpg" alt="">
                                </div> -->
                                <!-- <div class="body-intro">
                                        <p id="name_dm"></p>
                                        <span>Bộ sưu tập của bạn gồm 3 món ăn</span>
                                </div> -->
                                <p>Tên công thức</p>
                                <span  id="name_dish"></span>
                                </div>
                        </div>
                        <div class="box__footer">
                                <div class="view-formula">
                                <a href="<?= SITE_URL ?>/formulaUser">Xem công thức của bạn</a>
                                </div>
                        </div>
                </div>
        </div>
</div>

<session class="session">
<?php $value = $data['product'] ?>
        <form action="<?= SITE_URL ?>/addFormula/update/<?= $value['dish_id'] ?>" method="POST" enctype="multipart/form-data" >
                <div class="grid__app">
                        <input type="hidden" name="dish_id" value="<?= $value['dish_id'] ?>">
                        <div class="add__formula">
                                <div class="title__add-formula">
                                        <p>Tạo công thức mới</p>
                                </div>
                                <div class="step">
                                        <div class="introduction__step">
                                                <p> <span>Bước 1: </span> Hãy mô tả "<strong>Tên món ăn</strong>" của bạn nhé! </p>
                                        </div>
                                        <div class="input__step--dish">
                                                <textarea type="text" name="dish_intro" style="width:800px" id="filter-intro" data-tab="intro-error"
                                                class="form-control border mb-1" rows="5" placeholder="Mô tả tên món ăn..." ><?= $value['dish_intro'] ?></textarea>
                                                <span class="my-1" id="intro-error"></span>
                                        </div>
                                </div>
                                <div class="step">
                                        <div class="introduction__step">
                                                <p>
                                                <span>Bước 2:</span>&nbsp;Hãy nhập "<strong>Tên món ăn</strong>" và nhớ chọn "<strong>Ảnh đại diện</strong>" là một hình thành phẩm thật hấp dẫn nhé!
                                                </p>
                                        </div>
                                        <div class="both__name" style="width:1158px">
                                                <div class="dish-name mb-3">
                                                        <strong>2.1 - Tên món ăn</strong>
                                                        <input type="text" id="filter-names" name="dish_name" data-tab="name-error" value="<?= $value['dish_name'] ?>"
                                                        class="form-control border p-3 mb-1" placeholder="Tên món ăn..." >
                                                        <span class="my-1" id="name-error"></span>
                                                </div>
                                                <div class="dish-images">
                                                        <strong>2.2 - Chọn ảnh mới</strong>
                                                        <input type="hidden" name="fileToUpload" value="<?=$value['dish_image']?>">
                                                        <input type="file" id="filter-image" name="fileToUpload" onchange="validateTypeAndSize(this)"
                                                        data-tab="image-error" class="form-control p-3 mb-1 border">
                                                        <span id="image-error"></span>
                                                </div>
                                                <div class="update__image--user border border-3 border-success" style="position:relative; left:-164px;top:-26px; " >
                                                        <img src="../../admin/mvc/views/products/image/<?= $value['dish_image'] ?>" style="width:113px" alt="">
                                                </div>
                                        </div>
                                </div>
                                <div class="step">
                                        <div class="introduction__step">
                                                <p> <span>Bước 3 :</span>&nbsp;Nhập thông tin nguyên vật liệu cần chuẩn bị cho món ăn của bạn.</p>
                                        </div>
                                        <div class="add__contents">
                                                <?php foreach ($data['ingredient'] as $key => $value){
                                                        ?>
                                                        <div class="add__fields content_row" id="current_<?php echo $key; ?>">
                                                                <div class="ingredient"> 
                                                                        <input type="text" name="ingredient[<?php echo $key; ?>][name]" value="<?= $value['name'] ?? "" ?>" class="form-control p-3" placeholder="Tên nguyên liệu...">
                                                                        <input type="hidden" id="ingredient_<?php echo $key; ?>" name="ingredient[<?php echo $key; ?>][id]" value="<?= $value['id'] ?? "" ?>">
                                                                </div>
                                                                <div class="quantity">
                                                                        <input type="text" name="ingredient[<?php echo $key; ?>][quantity]" value="<?= $value['quantity'] ?? "" ?>" class="form-control p-3"  placeholder="Số lượng...">
                                                                </div>
                                                                <div class="unit">
                                                                        <input type="text" name="ingredient[<?php echo $key; ?>][unit]" value="<?= $value['unit'] ?? "" ?>" class="form-control p-3" placeholder="Đơn vị...">
                                                                </div>
                                                                <div class="note">
                                                                        <input type="text" name="ingredient[<?php echo $key; ?>][note]"value="<?= $value['note'] ?? "" ?>" class="form-control p-3" placeholder="Ghi chú...">
                                                                </div>
                                                                <div class="delete-input">
                                                                        <button type="button" class="btn btn-danger" onclick="currentDish('<?php echo $key; ?>')">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                </div>
                                                        </div>
                                                        <?php
                                                        }
                                                ?>        
                                        </div>
                                        <div class="product-add">
                                                <button type="button" id="btn-click" class="btn btn-success mb-3">
                                                        <i class="fas fa-plus"></i>
                                                </button>
                                        </div>
                                </div>

                                <div class="step">
                                        <div class="introduction__step">
                                                <p>
                                                        <span>Bước 4 :</span>&nbsp;Nhập các bước thực hiện món ăn.Nhớ kèm theo hình ảnh minh họa nhé!
                                                </p>
                                        </div>
                                        <div class="input__step--dish">
                                                <span id="description-error"></span>
                                                <textarea type="text" name="dish_desc" id="editor2"  class="form-control  filter-desc border "
                                                 rows="10"  data-tab="description-error"><?= $value['dish_desc'] ?></textarea>
                                        </div>
                                        <input type="hidden" name="views" value="<?= $value['views'] ?>">
                                </div>

                                <div class="post__dish">
                                        <strong>Bây giờ, bạn hãy chia sẻ công thức của bạn ngay nhé!</strong><br>
                                        <button type="submit" id="add-ingredient" class="btn btn-success my-3">Cập nhật công thức của bạn</button>
                                </div>
                        </div>
                </div>
        </form>    
</session>

<div class="footer">
        <div class="main__footer">
            <div class="item regulation policy">
                <h6>Quy định - chính sách</h6>
                <p>Hướng dẫn đặt hàng và thanh toán</p>
                <p>Chính sách giao hàng và đổi trả</p>
                <p>Chính sách bảo mật thông tin</p>
            </div>
            <div class="item category">
                <h6>Danh mục</h6>
                <div class="list__menu">
                    <a href="#">Home</a>
                    <a href="#">Công thức</a>
                    <a href="#">Blog</a>
                    <a href="#">Tạo món</a>
                    <a href="#">Mâm cơm</a>
                </div>
            </div>
            <div class="item contact">
                <h6>Liên hệ</h6>
                <span>
                </span>
                <div class="form__groups">
                    <div class="sides__input">
                        <input type="text" class="send__email" placeholder="Email">
                    </div>
                    <div class="side__send">
                        <button>Gửi</button>
                    </div>
                </div>
            </div>
            <div class="item about__as">
                <div class="logo__store">
                    <h6>Về chúng tôi</h6>
                    <a href=""><img src="./admin/settings/image/" alt=""></a>
                    <span>
                        CÔNG TY CỔ PHẦN COOKY
                        Giấy đăng ký kinh doanh số 0314498604 do Sở Kế hoạch Đầu tư TP Hồ Chí Minh cấp lần đầu ngày
                        06/07/2017
                        Địa chỉ: C10 Điện Biên Phủ, Phường 25, Quận Bình Thạnh, TPHCM
                        Số điện thoại: 02862861131
                        Email: info@cooky.vn
                    </span>
                </div>
            </div>
        </div>
        <div class="footer__sidebar">
            <div class="footer__sidebar--message">
                <a href="" class="message__link"><i class="fab fa-facebook"></i></a>
            </div>
            <div class="footer__sidebar--message">
                <a href="" class="message__link"><i class="fab fa-facebook-messenger"></i></a>
            </div>
            <div class="footer__sidebar--message">
                <a href="" class="message__link"><i class="fab fa-google"></i></a>
            </div>
            <div class="footer__sidebar--message">
                <a href="" class="message__link"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    </footer>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../public/script/main.js"></script>
    <script type="text/javascript" src="../../public/script/formula.js"></script>
    <script type="text/javascript" src="../../public/script/home.js"></script>
    <script type="text/javascript" src="../../public/script/add-formula.js"></script>
    <script>
    $(document).ready(function(){
        if($("#editor1").length){
            CKEDITOR.replace('editor1');
        }
        if($("#editor2").length){
            CKEDITOR.replace('editor2');
        }
    });
     
</script>
</body>

</html>
