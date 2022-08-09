<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/home.css">
    <link rel="stylesheet" href="../../public/css/formula.css">
    <link rel="stylesheet" href="../../public/css/news.css">
    <link rel="stylesheet" href="../../public/css/new_detail.css">
    <link rel="stylesheet" href="../../public/css/new_dish.css">
    <link rel="stylesheet" href="../../public/css/detail_dish.css">
    <link rel="stylesheet" href="../../public/css/tray.css">
    <link rel="stylesheet" href="../../public/css/footer.css">
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
                        <div class="register" id="btn__open">
                                <i class="fas fa-user"></i> <span>Đăng nhập</span>
                        </div>
                        <div class="box__overlay" id="myForm">
                                <div class="form__registration">
                                        <form action="./check_user.php" id="user-account" method="post">
                                                <div class="modal__content">
                                                <button type="button" class="btn__close">
                                                        <i class="fas fa-times"></i>
                                                </button>
                                                <div class="modal__body">
                                                        <div id="tab-register" class="user-tab-body">
                                                                <div class="title">
                                                                        <span>Đăng kí</span>
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="text" name="username" require class="form-control form__controls" placeholder="Username">
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="email" name="email" require class="form-control form__controls" placeholder="Username@gmail.com">
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="password" name="password" require class="form-control form__controls" placeholder="Password">
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="password" class="form-control form__controls" placeholder="Re-password">
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="address" name="address" class="form-control form__controls" placeholder="Address">
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="phone" name="phone" class="form-control form__controls" placeholder="Phone">
                                                                </div>
                                                                <div class="form__check">
                                                                        <input class="form-check-input" type="checkbox">
                                                                        <label class="form-check-label"> Remember</label>
                                                                </div>
                                                                <div class="modal__footer">
                                                                        <button type="submit" name="register-user">Create account</button>
                                                                </div>
                                                        </div>
                                                        <!-- form registration -->
                                                        <div id="tab-login" class="user-tab-body active">
                                                                <div class="form__login__title">
                                                                        <h4>Đăng nhập</h4>
                                                                        <p class="mt-3">Vui lòng đăng nhập vào tài khoản hiện có</p>
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="text" name="username1" class="form-control form__controls" placeholder="Username">
                                                                </div>
                                                                <div class="input__control">
                                                                        <input type="password" name="password1" class="form-control form__controls" placeholder="Enter password">
                                                                </div>
                                                                <div class="keep__me">
                                                                        <input class="form-check-input" type="checkbox" name="remember" value="1">
                                                                        <label class="form-check-label">Keep me logged in</label>
                                                                </div>
                                                                <div class="dashboard">
                                                                        <button class="btn btn__info" type="submit" name="login-user">Login
                                                                        in</button>
                                                                </div>
                                                        </div>
                                                        <!-- form login -->
                                                        <div id="tab-forgot" class="user-tab-body recover__password">
                                                                <div class="tab__password">
                                                                        <div class="tab__header">
                                                                                <h3>Quên mật khẩu</h3>
                                                                                <p>Sử dụng biểu mẫu để khôi phục nó</p>
                                                                        </div>
                                                                        <div class="tab__body ">
                                                                                <div class="tab__body--input">
                                                                                        <input type="email" class="form-control form__controls" name="email2" placeholder="Username@gmail.com">
                                                                                </div>
                                                                        </div>
                                                                        <div class="tab__footer">
                                                                                <button class="btn btn__danger" type="submit" name="recover-user">Recover password</button>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- form forgot password -->
                                                <div class="modal__footer">
                                                        <div class="form__account">
                                                        <ul class="group__account">
                                                                <li class="user-switch-form box-register" data-tab="tab-register">
                                                                Đăng kí</li>
                                                                <li class="user-switch-form box-login  d-none" data-tab="tab-login">Đăng nhập</li>
                                                                <li class="user-switch-form box-forgot" data-tab="tab-forgot">Quên mật khẩu</li>
                                                        </ul>
                                                        </div>
                                                </div>
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
                <div class="grid-header">
                        <div class="header__navigation">
                                <div class="menu__left">
                                <ul class="nav__bar">
                                        <li class="nav__item ">
                                        <span class="logo"><a href="<?= SITE_URL ?>/home">Cooky</a></span>
                                        </li>
                                        <li class="nav__item">
                                        <a href="<?= SITE_URL ?>/home" class="nav__link">Home</a>
                                        </li>
                                        <li class="nav__item">
                                        <a href="<?= SITE_URL ?>/formula" class="nav__link">Công Thức</a>
                                        </li>
                                        <li class="nav__item">
                                        <a href="<?= SITE_URL ?>/news" class="nav__link">Bài Viết</a>
                                        </li>
                                        <li class="nav__item">
                                        <a href="<?= SITE_URL ?>/addFormula" class="nav__link">Thêm công thức</a>
                                        </li>
                                        <li class="nav__item dropdown__menu">
                                        <a href="<?= SITE_URL ?>/tray" class="nav__link">Bàn ăn</a>
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
        <div class="page__container">
                <div class="recipe__detail">
                        <div class="dish__detail--left">
                                <div class="title__head--dish">
                                        <h4>Thành phần</h4>
                                </div>
                                <?php foreach ($data["ingredient"] as $value) : ?>
                                        <div class="ingredient__items">
                                                <?= $value["name"] ?> <?= $value["quantity"] ?> <?= $value["unit"] ?>
                                        </div>
                               <?php endforeach; ?>
                               <div class="step__dish--recipe">
                                        <div class="step__head--dish">
                                                <h4>Các bước thực hiện</h4>
                                        </div>
                                        <div class="description__step--dish">
                                                <?php $detail = $data['dishDetail'];
                                                        echo $detail['dish_intro']
                                                ?>
                                        </div>
                               </div>
                        </div>
                        <div class="dish__detail__right">
                                <div class="list__dish--cate">
                                        <div class="dish__item--small">
                                                <?php foreach ($data['dishTop'] as $value) : ?>
                                                        <div class="item__image--big">
                                                                <a href="">
                                                                        <img src="../../admin/mvc/views/products/image/<?= $value['dish_image'] ?>" alt="">
                                                                </a>
                                                        </div>
                                                       <div class="item__dish--name">
                                                                <a href="">
                                                                        <span><?= $value["dish_name"] ?></span>
                                                                </a>
                                                       </div>
                                                <?php endforeach; ?>       
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="comments">
                        <form action="" method="post" id="form-comment">
                                <div class="customer__comment">
                                        <div class="form__group--my">
                                                <div class="export__message">
                                                        <?php $getDishId  = $data['getId'];?>
                                                        <input type="hidden" name="dish_id" value="<?= $getDishId; ?>" id="dish-id">
                                                        <input type="text" name="comment" id="comment" class="form-control p-3" placeholder="Nhập bình luận...">
                                                </div>
                                                <div class="send__comment">
                                                        <button type="submit" class="btn btn-success p-3" >Gửi bình luận</button>
                                                </div>
                                        </div>
                                </div>
                        </form>
                        <div class="user__information">
                                <div class="info__comment">
                                        <div class="user__avatar">
                                                <span><i class="far fa-user-edit"></i></span>
                                        </div>
                                        <div class="side__user">
                                                <div class="user__name--comment">
                                                        <span>Khanh nb</span>
                                                </div>
                                                <div class="show__comment">
                                                        <em>Mon an lanh manh cho suc khoe</em>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

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
                        <div class="form__group">
                        <div class="side__input">
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
                        <!-- <a href=""><img src="./admin/settings/image/" alt=""></a> -->
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
<<<<<<< HEAD
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
=======
            </div>

        </div>
        <!-- end main content -->
        <div class="comments__customer">
            <form action="">
                <div class="form__groups">
                    <div class="input__message">
                        <input type="text" name="comment" class="form-control space__input" placeholder="Nhập bình luận...">
                    </div>
                    <div class="send__message">
                        <button type="submit" class="btn btn-success">Gửi bình luận</button>
                    </div>
                </div>
            </form>
        </div>
        <?php foreach ($data['all_Cmt'] as $value3):?>
       <div class="show_comment" >
            <div class="img_user col-md-1">
                <h4><img src="../../public/image/60.ico" alt=""></h4>
            </div>
            <div class="cmt_user col-md-8">
                <div class="name_user">
                    <h4><b><?= $value3['user_name']?></b></h4>
                </div>
                <div class="detail_cmt">
                    <p><?= $value3['content']?></p>
                </div>
            </div>
       </div>
       <?php endforeach; ?>
    </div>


    <footer class="footer">
        <div class="text__footer">
            <div class=" blog regulation">
                <h6>Quy định - chính sách</h6>
                <p>Hướng dẫn đặt hàng và thanh toán</p>
                <p>Chính sách giao hàng và đổi trả</p>
                <p>Chính sách bảo mật thông tin</p>
            </div>
            <div class="blog category">
                <h6>Danh mục</h6>
                <div class="list__menu">
                    <a href="#">Home</a>
                    <a href="#">Công thức</a>
                    <a href="#">Blog</a>
                    <a href="#">Tạo món</a>
                    <a href="#">Mâm cơm</a>
>>>>>>> 6e83cdb69648f35b2ba9e928562e0020177b6a7c
                </div>
                <div class="footer__sidebar--message">
                        <a href="" class="message__link"><i class="fab fa-instagram"></i></a>
                </div>
                </div>
        </div>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../../public/script/main.js"></script>
        <script type="text/javascript" src="../../public/script/formula.js"></script>
</body>

</html>