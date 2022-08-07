<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./public/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/home.css">
    <link rel="stylesheet" href="./public/css/formula.css">
    <link rel="stylesheet" href="./public/css/news.css">
    <link rel="stylesheet" href="./public/css/tray.css">
    <link rel="stylesheet" href="./public/css/add-formula.css">
    <link rel="stylesheet" href="./public/css/table-tray.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="icon" href="./public/image/60.ico">
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
                                        <li class="user-switch-form box-register d-none" data-tab="tab-register">Đăng kí</li>
                                        <li class="user-switch-form box-login" data-tab="tab-login">Đăng nhập</li>
                                        <li class="user-switch-form box-forgot" data-tab="tab-forgot">Quên mật khẩu</li>
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
                            <span class="logo"><a href="home">Kitchen</a></span>
                        </li>
                        <li class="nav__item">
                            <a href="home" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="formula" class="nav__link">Công Thức</a>
                        </li>
                        <li class="nav__item">
                            <a href="news" class="nav__link">Bài Viết</a>
                        </li>
                        <li class="nav__item">
                            <a href="addFormula" class="nav__link">Thêm công thức</a>
                        </li>
                        <li class="nav__item dropdown__menu">
                            <a href="tray" class="nav__link">Bàn ăn</a>
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