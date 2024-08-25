<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5576275d06.js" crossorigin="anonymous"></script>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trang-chu/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/trang-chu/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./assets/img/logomini.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <style>
    .btnn {
        background-color: white;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        border: 1px solid white;
        padding-right: 20px;
        border-left: 1px solid black;
        padding-left: 15px;
    }

    .text-container {
        width: 150px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    </style>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="css/trang-chu/plugin/js/owl.carousel.min.js"></script>

    <header class="header">
        <div class="header_container">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo"><a href="index.php"><h2 style="font-size:28px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:black;">MilkyWay</h2></a></div>
                            <nav class="main_nav">
                                <div class="close_menu">
                                    <i class="fas fa-times" onclick="closeMenu()"></i>
                                </div>
                                <ul>
                                    <li class="main_nav-item active">
                                        <a href="index.php">Trang chủ</a>
                                    </li>
                                    <li class="main_nav-item" onclick="openListLink()">
                                        <a href="trang-chinh/danh-sach-sp.php" aria-readonly="true">Sản phẩm
                                        </a>
                                    </li>
                                    <li><a href="trang-chinh/tin-tuc.php">Tin tức</a></li>
                                    <li><a href="trang-chinh/gioi-thieu.php">Giới thiệu</a></li>
                                    <li><a href="trang-chinh/lien-he.php">Liên hệ</a></li>
                                </ul>
                            </nav>
                            <div class="icon_user">
                                <?php
                                session_start();
                                if (!isset($_SESSION['user'])) {
                                ?>
                                    <a class="login1" style="margin-left: 40px;text-decoration: none; color: black;border: 1px solid rgb(122, 112, 112) ; border-radius: 25%; padding: 4px 12px;" href="tai-khoan/dang-nhap.php"><span>Đăng nhập</span> </a>
                                <?php } else { ?>
                                    <a id="login" style="margin-left: 50px;text-decoration: none; color: black;border: 1px solid rgb(122, 112, 112) ; border-radius: 25%; padding: 4px 12px;" href="tai-khoan/thong-tin-tk.php"><span><?= $_SESSION['user']['ho_ten'] ?> </span></a>
                                <?php } ?>
                                <!-- <i class="fas fa-user"></i> -->

                            </div>
                            <div class="header_extra ml-auto">

                                <div class="shopping_cart">
                                    <a href="trang-chinh/danh-sach-gio-hang.php">
                                        <i class="fas fa-shopping-bag">
                                            <?php
                                            $sll = 0;
                                            if (isset($_SESSION['cart'])) {
                                                foreach ($_SESSION['cart'] as $item) {
                                                    extract($item);
                                                    $sll += $sl;
                                                }
                                            }
                                            ?></i>
                                        <div>Cart <span><?= $sll ?></span></div>
                                    </a>
                                </div>
                                <form action="tim-kiem-theo-ten.php" method="post">
                                <div class="search">
                                    <div class="search_icon">
                                        <i class="fas fa-search" onclick="openSearchPanel()"></i>
                                    </div>
                                </div>
                                <div class="menu_nav">
                                    <i class="fa fa-bars" aria-hidden="false" onclick="openMenu()"></i>
                                </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="search_panel">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                            <form action="./trang-chinh/tim-kiem-theo-ten.php" method="post">
                                <input type="text" class="search_input" placeholder="Tìm kiếm..." name="keywords">
                                <button type="submit" name="search-keywords"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div style="width:100%;">
        <a href="#"><img src="assets/img/bubble-tea-in-milk-splash-advertisement-banner-free-vector.jpg" class="img-fluid"></a>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <p style="font-size:50px;margin-bottom:30px">BST NỔI BẬT</p>
                    <h2> <span>BST</span> MÙA ĐÔNG 2023</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-6">
                <div class="anhmoi">
                    <img src="css/trang-chu/img/bánh cake vị matcha.jpg" style="margin-top:80px" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="anhmoi col-lg-12">
                        <img src="css/trang-chu/img/menu2.jpg" class="rounded" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-6  ">
                        <div class="anhmoi">
                            <img src="css/trang-chu/img/kumquat passion fruit tea.jpg" class="rounded" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="anhmoi">
                            <img src="css/trang-chu/img/menu4.jpg" class="rounded" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <h2><span>SẢN PHẨM</span> BÁN CHẠY</h2>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once('admin/dao/hang-hoa.php');
    $items = hang_hoa_select_all();

    ?>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme ">

                    <?php
                    foreach ($items as $item) {
                        extract($item);
                    ?>
                    <div class="item">
                        <a href="trang-chinh/chi-tiet-sp.php?ma_hh=<?= $ma_hh ?>"><img style="width: 200px"
                                src="css/admin/images/products/<?= $hinh ?>" alt="ds"></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid now" style="margin-top: 80px;margin-bottom:40px">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <img src="assets/img/about.jpg" class="img-fluid rounded"
                    style=" margin-top: 40px;" alt="a">
            </div>
            <div class="col-lg-6 ">
                <div class="newjus">
                    <ul>
                        <li style="width:550px">
                            <h2 style="font-size: 30px;margin-top:-114px">CTKM SALE UP TO 50% toàn bộ sản phẩm tại shop
                                !
                            </h2>
                        </li>
                        <li>Sự kiện diễn ra đến hết tháng 12/2023</li>
                        <li>
                            <a href="./trang-chinh/danh-sach-sp.php" style="text-decoration: none;">XEM NGAY</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-start align-items-center">
                <div class="pick">
                    <ul>
                        <li>
                            <p><i class="fa fa-shopping-bag"></i></p>
                        </li>
                        <li>
                            <p><span>Miễn phí</span> vận chuyển <br> cho các đơn hàng > 200K</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <div class="pick">
                    <ul>
                        <li>
                            <p>
                                <i class="fa fa-heartbeat"></i>
                            </p>
                        </li>
                        <li>
                            <p><span>Nhiệt tình</span> Tư vấn <br> và hỗ trợ tận tình 24/7</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-items-center">
                <div class="pick">
                    <ul>
                        <li>
                            <p><i class="fa fa-gift"></i></p>
                        </li>
                        <li>
                            <p><span>Chế độ</span> quà tặng hấp <br> dẫn cho mọi khách hàng</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <h2> SẢN PHẨM <span>SALE OFF</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <?php
        $items = hang_hoa_sale_9();
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme ">
                    <?php foreach ($items as $item) {
                        extract($item);
                    ?>
                    <div class="item">
                        <a href="/trang-chinh/chi-tiet-sp.php?ma_hh=<?= $ma_hh ?>"><img style="width: 200px"
                                src="css/admin/images/products/<?= $hinh ?>" alt="ds"></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <h2>SẢN PHẨM <span>TRENDING</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <?php
    $items = hang_hoa_select_all();
    ?>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <?php foreach ($items as $item) {
                extract($item);
            ?>
            <div class="col-md-3" style="margin-bottom: 30px;">
                <div class="card">
                    <a href="trang-chinh/chi-tiet-sp.php?ma_hh=<?= $ma_hh ?>"><img class="card-img-top"
                            src="css/admin/images/products/<?= $hinh ?>" alt="Card image top"></a>
                    <div class="card-body">
                        <h5 class="card-title text-container"><?= $ten_hh ?></h5>
                        <p class="card-subtitle"><?= number_format($don_gia - ($don_gia * $giam_gia / 100)) ?> VNĐ</p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <a href="./trang-chinh/danh-sach-sp.php"><button type="button" class="btn btn-outline-dark">Tất
                        cả</button></a>
            </div>
        </div>
    </div>



    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                            <img src="../css/trang-chu/img/logo12.jpg" alt="" style="width:60px;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <h5>Shop</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Hỗ trợ</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Tin khuyến mãi</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>

                                <li>
                                    <p>
                                        Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất
                                        cho khách hàng.

                                        Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi . <br><br>
                                        Xin cám ơn !
                                    </p>
                                </li>
                                <li><i class="fa fa-facebook "></i>
                                    <i class="fa fa-firefox"></i>
                                    <i class="fa fa-pinterest-p"></i>
                                    <i class="fa fa-youtube"></i>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Trang chủ</p>
                                </li>
                                <li>
                                    <p>Cửa hàng</p>
                                </li>
                                <li>
                                    <p>Giới thiệu</p>
                                </li>
                                <li>
                                    <p>Liên hệ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Ưu đãi</p>
                                </li>
                                <li>
                                    <p>Giao nhận</p>
                                </li>
                                <li>
                                    <p>Đổi trả</p>
                                </li>
                                <li>
                                    <p>Bảo mật</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi ...</p>
                                </li>
                                <li>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btnn" type="button" id="button-addon2">SEND</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
    const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        navText: [
            nextIcon,
            preIcon
        ],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1200: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    })
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
    var search_btn = document.querySelector(".header_extra .search .search_icon i");
    var search_panel = document.querySelector(".search_panel");

    function openSearchPanel() {
        if ($('.search_panel').hasClass('active')) {
            search_panel.classList.remove("active");
        } else {
            search_panel.classList.add("active");
        }
    }



    function openListLink() {
        if (document.querySelector('.main_nav-item ul').style.height == 'auto') {
            document.querySelector('.main_nav-item ul').style.height = '0';
        } else {
            document.querySelector('.main_nav-item ul').style.height = 'auto'
        }
    }


    $(window).scroll(function() {
        if ($(this).scrollTop() > 35) {
            $('.header').addClass('scrolled');
        } else {
            $('.header').removeClass('scrolled');
        }
    });


    $('.spbanchay_block').slick({
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>