<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5576275d06.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/danh-sach-sp/products.css">
    <link rel="stylesheet" href="/css/danh-sach-sp/style.css">
    <link rel="shortcut icon" href="../assets/img_milk_tea/logo12.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        .item{
            position:relative;
        }
        .item .cung-loai{
            position: absolute;
            font-size: 12px;
            color: #fff;
            text-align: center;
            font-weight: 400;
            line-height: 26px;
            font-family: "Roboto Condensed", sans-serif;
            width: 80px;
            display: block;
            background: #f7941d;
            background: linear-gradient(#f7941d 0,#f7941d 100%);
            box-shadow: 0 3px 10px -5px #000;
            top: 10px;
            right: 25px;
        }
        
    </style>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>

    <header class="header" style="top:0px ;">
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo"><a href="index.php"><h2 style="font-size:28px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:black;">MilkyWay</h2></a></a></div>
                            <nav class="main_nav">
                                <div class="close_menu">
                                    <i class="fas fa-times" onclick="closeMenu()"></i>
                                </div>
                                <ul>
                                    <li class="main_nav-item active">
                                        <a href="../index.php">Trang chủ</a>
                                    </li>
                                    <li class="main_nav-item" onclick="openListLink()">
                                        <a href="danh-sach-sp.php" aria-readonly="true">Sản phẩm
                                        </a>
                                    </li>
                                    <li><a href="tin-tuc.php">Tin tức</a></li>
                                    <li><a href="gioi-thieu.php">Giới thiệu</a></li>
                                    <li><a href="lien-he.php">Liên hệ</a></li>
                                </ul>
                            </nav>
                            <div class="icon_user">
                                <?php
                                
                                if (!isset($_SESSION['user'])) {
                                ?>
                                    <a class="login1" style="margin-left: 60px;text-decoration: none; color: black;border: 1px solid rgb(122, 112, 112) ; border-radius: 25%; padding: 4px 12px;" href="../tai-khoan/dang-nhap.php"><span>Đăng nhập</span> </a>
                                <?php } else { ?>
                                    <a id="login" style="margin-left: 80px;text-decoration: none; color: black;border: 1px solid rgb(122, 112, 112) ; border-radius: 25%; padding: 4px 12px;" href="../tai-khoan/thong-tin-tk.php"><span><?= $_SESSION['user']['ho_ten'] ?> </span></a>
                                <?php } ?>
                                <!-- <i class="fas fa-user"></i> -->

                            </div>
                            <div class="header_extra ml-auto">

                                <div class="shopping_cart">
                                    <a href="danh-sach-gio-hang.php">
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
        <div class="search_panel">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                            <form action="">
                                <input type="text" class="search_input" placeholder="Tìm kiếm...">
                            <button type="submit" name="search-keywords"></button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-7" style="
    padding-left: 0px;
">
                <div class="chuyen">
                    <p><i class="fa fa-home" style="font-size:24px"></i> <span>TRANG CHỦ </span> / CHI TIẾT</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
 ======================CHI-TIẾT====================================
 ============================================ -->

    <div class="container" style="margin-top: 80px; width: 100%;">
        <div class="row">
        <!-- CODE PHO THÔNG TIN SẢN PHẨM -->
        <?php
                    require_once ('../../dam/admin/dao/hang-hoa.php');
                    require_once ('../../dam/admin/dao/size.php');
                    require_once ('../../dam/admin/dao/color.php');

                        extract($_REQUEST);
                        $items = hang_hoa_select_by_id($ma_hh);
                        extract($items);
                    ?>
            <div class="col-md-6" style="padding-left: 0px">
                <div class="spchitiet">
                    <img src="/css/admin/images/products/<?=$hinh?>" alt="" style="width:100%;">
                </div>
            </div>
            <form action="them-gio-hang.php" method="post">
                <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
            <div class="col-md-6">
                <div class="thongtinsp">
                    <ul>
                        <li>
                            <h5 style="font-size: 30px;"><?=$ten_hh?></h5>
                            <p> </p>
                        </li>
                        <li><del><?=number_format($don_gia)?></del> VNĐ</li>
                        <li style = "font-size:30px;"><?=number_format($don_gia - $don_gia*($giam_gia/100))?> VNĐ</li>
                        <li style="margin-top: 15px;"><?=$mo_ta?></li>
                        <li class="mauSac" style="margin-top: 20px;">
                            <div class="soluong">
                            <label for="">Mau sac</label>
                            <select name="color" class="form-control">
                                    <?php
                                        $color_select_list = color_select_all();
                                        foreach ($color_select_list as $color) {
                                            echo '<option value="'.$color['maMau'].'">'.$color['Mau'].'</option>';
                                            }
                                        ?>
                                    </select>
                            </div>

                        </li>
                        <li class="size" style="margin-top: 20px;">
                            <div class="soluong">
                            <label for="">Size</label>
                            <select name="size" class="form-control">
                                    <?php
                                        $size_select_list = size_select_all();
                                        foreach ($size_select_list as $size) {
                                            echo '<option value="'.$size['maSize'].'">'.$size['Size'].'</option>';
                                            }
                                        ?>
                                    </select>
                            </div>

                        </li>
                        <li class="soluong1" style="margin-top: 27px;">

                            <input name="soluong" type="number" value="1" readonly>

                        <!-- MÃ CODE PHP CHECK ĐĂNG NHẬP ĐỂ MUA HÀNG -->

                            <?php
                                if(!isset($_SESSION['user'])){
                            ?>
                            <a href="../tai-khoan/dang-nhap.php"><button style="margin-top:-5px;" class="btn btn-dark">ĐĂNG NHẬP ĐỂ MUA HÀNG</button></a>
                                <?php }else{ ?>
                                 
                            <button style="margin-top:10px;" type="submit" class="btn btn-dark">THÊM VÀO GIỎ HÀNG</button>

                                <?php } ?>

                        </li>
                        </form>
                        <li style="margin-top: 25px;">-----------------------------------------------------------------</li>
                        <li>Mã: #<?=$ma_hh?></li>
                        -----------------------------------------------------------------
                        <?php
                            $items = loai_hang_select_by_id($ma_loai);
                            extract($items);
                        ?>
                        <li>Danh mục: <?=$ten_loai?></li>

                    </ul>
                </div>
            </div>
            
        </div>
    </div>




    <!-- ============================================
 ==========================================================
 ============================================ -->

 <!-- BÌNH LUẬN -->
 <div class="container" style="margin-top: 30px;">

        <div class="row">
            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h5>NHẬN XÉT VÀ ĐÁNH GIÁ</h5>
                    <p></p>
                </div>
            
            <!-- CODE PHP PHẦN HIỂN THỊ BÌNH LUẬN -->
            <?php
                require_once ('../admin/dao/binh-luan.php');
                extract($_REQUEST);
                if(array_key_exists("noi_dung",$_REQUEST)){
                    $ma_kh = $_SESSION['user']['ma_kh'];
                    $ngay_bl = date_format(date_create(), 'd-m-Y');
                    binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
                }
                $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
            ?>  
            <div class="binh-luan">

            <?php
            foreach ($binh_luan_list as $bl) {
            ?>
               <div class="row">
                    <div class="col-sm-10">
                        <?php echo "<li>$bl[noi_dung]</li>"?>
                    </div>
                    <div class="col-sm-2" style = "text-align:right;">
                       <?php echo "$bl[ma_kh]</b>, $bl[ngay_bl]" ?>
                    </div>
               </div>
            <?php } ?>
            </div><br>
            
            <!-- CODE PHP PHẦN CHO PHÉP BÌNH LUẬN -->
                <?php
                if(!isset($_SESSION['user'])){
                    echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
                }else{
                ?>
                <div class="owl-carousel owl-theme ">
                   <form action="" method="post">
                   <div class="row">
                       <div class="col-sm-10">
                            <div class="form-group">
                            <input class="form-control" name= "noi_dung"  style="width:600%;height:80px;"/>
                            </div>
                       </div>
                       <div class="col-sm-2">
                           <button class="btn btn-danger" style = "margin-left:870px;">Gửi</button>
                       </div>
                   </div>
                   </form>
                <?php } ?>

                </div>
            </div>
        </div>
    </div>




    <div class="container" style="margin-top: 30px;">
        <div class="row">

            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h5>SẢN PHẨM CÙNG LOẠI</h5>
                    <p></p>
                </div>

                <div class="owl-carousel owl-theme ">
                    <!-- CODE PHP SẢN PHẨM CÙNG LOẠI -->
                    <?php
                        $items = hang_hoa_select_by_loai($ma_loai);
                        foreach($items as $item){
                            extract($item);
                        
                    ?>
                    <div class="item">
                       <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img style="width: 200px" src="/css/admin/images/products/<?=$hinh?>" alt="ds"><span class='cung-loai'><?=$ten_loai?></span></a>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="" alt="" style ="width:60px;">
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
                                    Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng. Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi . <br><br>
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
                                    <input type="text" placeholder="You@gmail.com">
                                    <a href="#">Đăng ký</a>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        const nextIcons = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIconz = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcons,
                preIconz
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>











</body>

</html>