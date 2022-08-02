<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="<?php echo SITE_URL; ?>/public/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/public/sass/style.css">
    <title>
          <?php
               // basename() trả lại tên tệp đường dẫn được chỉ định
               // $_SERVER['PHP_SELF'] trả về tên tệp của tập lệnh hiện đang thực thi
            //    $currentFileName = basename($_SERVER['PHP_SELF']);
            //    echo getTitle($currentFileName);
          ?>
     </title>
    <script type="text/javascript">
        var BaseUrl = '<?php echo SITE_URL; ?>';
    </script>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar__navbar">
            <div class="sidebar__content">
                <ul class="sidebar__nav">
                    <li class="sidebar__nav--group">
                        <button class="dropdown__btn">
                            <i class="fas fa-archive icon__left"></i>
                            <span>Products</span>
                            <i class="fal fa-angle-down icon__right"></i>
                        </button>
                        <ul class="dropdown__nav">
                            <li class="dropdown__item">
                                <a href="<?php echo SITE_URL; ?>/product/index/1" class="dropdown__item--link">List product</a>
                            </li>
                            <li class="dropdown__item">
                                <a href="<?php echo SITE_URL; ?>/unit/index/1" class="dropdown__item--link">Units</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar__nav--group">
                        <button class="dropdown__btn">
                            <i class="fas fa-abacus icon__left"></i>
                            <span>Catalogs</span>
                            <i class="fal fa-angle-down icon__right"></i>
                        </button>
                        <ul class="dropdown__nav">
                            <li class="dropdown__item">
                                <a href="<?php echo SITE_URL; ?>/catalog/index/1" class="dropdown__item--link">List catalog</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar__nav--group">
                        <button class="dropdown__btn">
                            <i class="fas fa-newspaper icon__left"></i>
                            <span>News</span>
                            <i class="fal fa-angle-down icon__right"></i>
                        </button>
                        <ul class="dropdown__nav">
                            <li class="dropdown__item">
                                <a href="<?php echo SITE_URL; ?>/news/index/1" class="dropdown__item--link">List news</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar__nav--group">
                        <button class="dropdown__btn">
                            <i class="fas fa-users icon__left"></i>
                            <span>Users</span>
                            <i class="fal fa-angle-down icon__right"></i>
                        </button>
                        <ul class="dropdown__nav">
                            <li class="dropdown__item">
                                <a href="<?php echo SITE_URL; ?>/user/index/1" class="dropdown__item--link">List user</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar__nav--group">
                        <button class="dropdown__btn">
                            <i class="fas fa-comment-alt-check icon__left"></i>
                            <span>Comments</span>
                            <i class="fal fa-angle-down icon__right"></i>
                        </button>
                        <ul class="dropdown__nav">
                            <li class="dropdown__item">
                                <a href="<?php echo SITE_URL; ?>/comment/index/1" class="dropdown__item--link">List comments</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar__nav--group">
                        <button class="dropdown__btn">
                            <i class="fas fa-user-cog icon__left"></i>
                            <span>Roles</span>
                            <i class="fal fa-angle-down icon__right"></i>
                        </button>
                        <ul class="dropdown__nav">
                            <li class="dropdown__item">
                                <a href="<?php echo SITE_URL; ?>/role/index/1" class="dropdown__item--link">Role</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar__nav--group">
                        <button class="dropdown__btn">
                            <i class="fas fa-utensils icon__left"></i>
                            <span>Dinner Table</span>
                            <i class="fal fa-angle-down icon__right"></i>
                        </button>
                        <ul class="dropdown__nav">
                            <li class="dropdown__item">
                                <a href="<?php echo SITE_URL; ?>/tray/index/1" class="dropdown__item--link">Tray table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="header__top">
            <ul class="nav__left">
                <li class="header__brand">
                    <div class="brand">
                        <img src="./public/image/cooky.png" alt="">
                    </div>
                    <span class="icon__bars"><i class="fal fa-bars"></i></span>
                </li>
                <li class="header__search">
                    <form action="" method="get">
                        <div class="input__group">
                            <span class="input-search">
                                <input type="text" placeholder="Tìm kiếm" name="">
                            </span>
                            <span class="input-btn">
                                <button type="submit" class="btn__dark" name="search-keyword" value="search">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="nav__right">
                <li class="item user__avatar">
                    <img src="./public/image/avatar.jpg" alt="">
                </li>
                <li class="item user__account">
                    <span id="user">
                        <?php
                            if(isset($_SESSION['username'])) {
                                echo $_SESSION['username'] ?? 0;
                            }
                        ?>
                        <i class="fal fa-angle-down icon__dropdown"></i>
                    </span>
                    <ul class="dropdown__menu" id="myDropdown">
                        <li class="nav__item">
                            <a href="<?php echo SITE_URL; ?>/setting/index/1" class="nav__link"><i class="far fa-cog "></i> Settings</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo SITE_URL; ?>/login/profile" class="nav__link"><i class="far fa-user "></i> Profile</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo SITE_URL; ?>/login/logout" class="nav__link"><i class="fal fa-sign-out "></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <div class="main__content">


