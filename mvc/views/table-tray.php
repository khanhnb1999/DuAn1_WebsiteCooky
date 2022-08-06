<?php
    if(isset($_POST['update']) && ($_POST['update'] == 'update')){
        $_SESSION['table'] = $_POST['table'] ?? '';
    } 
    
?>
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
    <link rel="stylesheet" href="../../public/css/tray.css">
    <link rel="stylesheet" href="../../public/css/table-tray.css">
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
                                <div id="tab-register" class="user-tab-body active">
                                    <div class="title">
                                        <span>Welcome</span>
                                    </div>
                                    <div class="input__control">
                                        <input type="text" name="username" require class="form-control form__controls"
                                            placeholder="Username">
                                    </div>
                                    <div class="input__control">
                                        <input type="email" name="email" require class="form-control form__controls"
                                            placeholder="Username@gmail.com">
                                    </div>
                                    <div class="input__control">
                                        <input type="password" name="password" require
                                            class="form-control form__controls" placeholder="Password">
                                    </div>
                                    <div class="input__control">
                                        <input type="password" class="form-control form__controls"
                                            placeholder="Re-password">
                                    </div>
                                    <div class="input__control">
                                        <input type="address" name="address" class="form-control form__controls"
                                            placeholder="Address">
                                    </div>
                                    <div class="input__control">
                                        <input type="phone" name="phone" class="form-control form__controls"
                                            placeholder="Phone">
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
                                <div id="tab-login" class="user-tab-body">
                                    <div class="form__login__title">
                                        <h4>Welcome back</h4>
                                        <p>Please sign in to your account below</p>
                                    </div>
                                    <div class="input__control">
                                        <input type="text" name="username1" class="form-control form__controls"
                                            placeholder="Username">
                                    </div>
                                    <div class="input__control">
                                        <input type="password" name="password1" class="form-control form__controls"
                                            placeholder="Enter password">
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
                                            <h3>Fogot your password</h3>
                                            <p>Use the form below to recover it.</p>
                                        </div>
                                        <div class="tab__body ">
                                            <div class="tab__body--input">
                                                <input type="email" class="form-control form__controls" name="email2"
                                                    placeholder="Username@gmail.com">
                                            </div>
                                        </div>
                                        <div class="tab__footer">
                                            <button class="btn btn__danger" type="submit" name="recover-user">Recover
                                                password</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- form forgot password -->
                            <div class="modal__footer">
                                <div class="form__account">
                                    <ul class="group__account">
                                        <li class="user-switch-form box-register d-none" data-tab="tab-register">
                                            Sign up</li>
                                        <li class="user-switch-form box-login" data-tab="tab-login">Login</li>
                                        <li class="user-switch-form box-forgot" data-tab="tab-forgot">Forgot
                                            password</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
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
                            <span class="logo"><a href="home">Cooky</a></span>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo SITE_URL; ?>/home" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo SITE_URL; ?>/formula" class="nav__link">Công Thức</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo SITE_URL; ?>/news" class="nav__link">Bài Viết</a>
                        </li>
                        <li class="nav__item">
                            <a href="./blog.html" class="nav__link">Thêm công thức</a>
                        </li>
                        <li class="nav__item dropdown__menu">
                            <a href="<?php echo SITE_URL; ?>/tray" class="nav__link">Bàn ăn</a>
                        </li>
                    </ul>
                </div>
                <div class="search__right">
                    <form action="" class="search__cooking">
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
    <session class="session">
        <form action="<?php echo SITE_URL; ?>/tableTray/add" method="post">
            <div class="app__table">
                <div class="introduction-tray">
                    <div class="aside__left">
                        <div class="title__table">
                            <h6><i class="fas fa-utensils-alt"></i> BÀN ĂN</h6>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="formula__items">
                                <?php $totalMoney = 0 ?>
                                <?php foreach ($data["dish"] as $value) : ?>
                                    <div class="formula__intro" id="current_<?= $value['dish_id'] ?>">
                                        <img src="../../admin/mvc/views/products/image/<?= $value['dish_image'] ?>" alt="">
                                        <div class="icon__current">
                                            <a href="javascript:void()" class="btn__show" onclick=viewDish(<?= $value["dish_id"] ?>)>
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void()" onclick="removeDish(<?= $value['dish_id'] ?>)"
                                             class="btn__show">
                                                <i class="far fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                        $sumMoney = $value["dish_price"];
                                        $totalMoney += $sumMoney;
                                    ?>
                                <?php endforeach; ?>
                            </div>
                        </form>
                        <div class="box__container">
                            <div class="price__table">
                                <span>Giá: <?= number_format($totalMoney) ?><sup>đ</sup></span>
                            </div>
                            <div class="update__trays">
                                <a href="" class="btn__update">Cập nhật</a>
                            </div>
                            <div class="add__dish">
                                <a href="<?php echo SITE_URL; ?>/formula">Thêm món ăn</a>
                            </div>
                        </div>
                        <div class="introduction__customer">
                            <div class="introduction__store">
                                <div class="logo__stores">
                                    <a href="<?php echo SITE_URL; ?>/home">Cooky</a>
                                </div>
                                <div class="name__store">
                                    <h6>Cooky</h6>
                                    <span><?= $data['totalRecord'] ?> Công thức</span>
                                </div>
                            </div>
                            <h5>Hôm nay bạn ăn gì!</h5>
                            <p>Để mâm cơm của gia đình bạn luôn đầy đủ chất dinh dưỡng,
                                đảm bảo sức khỏe cho mọi người bằng cách bạn hãy chọn món 
                                ăn, giá cả phù hợp cho gia đình bạn...
                            </p>
                        </div>
                    </div> 
                    <div class="aside__right">
                        <div class="group__button">
                            <h6>Thành phần và các bước thực hiện</h6>
                        </div>
                        <div class="show__content--details" id="show-dish">
                            <div class="formula__details" >
                                <div class="ingredient__title">
                                    <h4>Thành phần</h4>
                                </div>
                                <div class="intro__ingredient">
                                    <?php foreach ($data['ingredient'] as $value) : ?>
                                        <div class="ingredient__name">
                                            <span>
                                                <?= $value['name']?> <?=$value['quantity'] ?> <?=  $value['unit']?>
                                            </span>
                                        </div>
                                    <?php endforeach; ?>    
                                </div>
                                <div class="ingredients__title">
                                    <h4>Các bước thực hiện</h4>
                                </div>
                                <div class="title__head--dish">
                                    <span>MÓN ĂN : <?= $data['intro']['dish_name'] ?></span>
                                </div>
                                <?= $data['intro']['dish_intro'] ?>
                            </div>
                        </div>
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
    <script type="text/javascript" src="../../public/script/table-tray.js"></script>
</body>

</html>