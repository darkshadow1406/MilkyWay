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
    <link rel="shortcut icon" href="../assets/img_nike_sneakers/logo1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/lien-he/products.css">
    <link rel="stylesheet" href="/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
                            <div class="logo"><a href="../index.php"><h2 style="font-size:28px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:black;">MilkyWay</h2></a></div>
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
                                session_start();
                                if (!isset($_SESSION['user'])) {
                                ?>
                                    <a class="login1" style="margin-left: 40px;text-decoration: none; color: black;border: 1px solid rgb(122, 112, 112) ; border-radius: 25%; padding: 4px 12px;" href="../tai-khoan/dang-nhap.php"><span>Đăng nhập</span> </a>
                                <?php } else { ?>
                                    <a id="login" style="margin-left: 50px;text-decoration: none; color: black;border: 1px solid rgb(122, 112, 112) ; border-radius: 25%; padding: 4px 12px;" href="../tai-khoan/thong-tin-tk.php"><span><?= $_SESSION['user']['ho_ten'] ?> </span></a>
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
    <div style="width: 100%; ">
        
    </div>

   
    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="col-md-6">
                <div class="lienhe">
                    <h6>THÔNG TIN LIÊN HỆ</h6>

                    <table class="tus">
                        <tr>
                            <td> <img src="/css/lien-he/img/a.png" alt=""> </td>
                            <td>Tòa P, Trường Cao Đẳng FPT Polytechnic</td>
                        </tr>
                        <tr>
                            <td><img src="/css/lien-he/img/f.png" alt=""></td>
                            <td>0389131139</td>
                        </tr>
                        <tr>
                            <td><img src="/css/lien-he/img/s.png" alt=""></td>
                            <td>milkyway@gmail.com</td>
                        </tr>
                        <tr>
                            <td><img src="/css/lien-he/img/d.png" alt=""></td>
                            <td>milkway.com</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="nu"><img src="/css/lien-he/img/u.png" alt=""></td>

                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form">
                    <table>
                        <tr>
                            <td><input type="text" class="form-control" placeholder="Họ và tên" id="inputName"  autocomplete="off">
                                <span id="vusername"></span>
                            </td>
                            <td><input type="text" class="form-control" placeholder="Email" id="inputEmail"  autocomplete="off">
                                <span id="vemail"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" placeholder="Số điện thoại" id="inputPhone"  autocomplete="off">
                                <span id="vphone"></span>
                            </td>
                            <td><input type="text" class="form-control" placeholder="Địa chỉ" id="inputAdress"  autocomplete="off">
                                <span id="vaddress"></span>
                            </td>
                        </tr>
                        <tr>

                            <td colspan="2"><textarea class="form-control" placeholder="Lời nhắn" id="exampleFormControlTextarea1" rows="3"  autocomplete="off"></textarea>
                                            <span id="vmessage"></span> </td>
                            <td></td>
                        </tr>
                        <tr>

                            <td> <button onclick= "checkValidate()" class="btn" id="gui">GỬI</button> </td>
                            <td></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-12">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863981044336!2d105.74459841488351!3d21.038127785993215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1669107371931!5m2!1svi!2s" 
						width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <script>
        const usernameSent = document.getElementById('inputName');
        const emailSent = document.getElementById('inputEmail');
        const phoneSent = document.getElementById('inputPhone');
        const adressSent = document.getElementById('inputAdress');
        const messageSent = document.getElementById('exampleFormControlTextarea1');
        const sent = document.getElementById('gui');
        const inputEles = document.querySelectorAll('.form-row');

sent.addEventListener('click', function () {
    Array.from(inputEles).map((ele) =>
        ele.classList.remove('success', 'error')
    );
    let isValid = checkValidate();

    if (isValid) {
        alert('Gửi liên hệ thành công');
    }
});

function checkValidate() {
    console.log("1")
    let usernameValue = usernameSent.value;
    let emailValue = emailSent.value;
    let phoneValue = phoneSent.value;
    let adressValue = adressSent.value;
    let messageValue = messageSent;
    let isCheck = true;

    if (usernameValue == '') {
     $("#vusername").text("Tên không được để trống");
     $("#inputName").css("border", "1px solid red");
        isCheck = false;
    } else {
        setSuccess(usernameSent);
    }

    if (emailValue == '') {
        // setError(emailSent, 'Email không được để trống');
     $("#vemail").text("Email không được để trống");
     $("#inputEmail").css("border", "1px solid red");
        isCheck = false;
    } else if (!isEmail(emailValue)) {
     $("#vemail").text("Email không đúng định dạng");
     $("#inputEmail").css("border", "1px solid red");

        // setError(emailSent, 'Email không đúng định dạng');
        isCheck = false;
    } else {
        setSuccess(emailSent);
    }

    if (phoneValue == '') {
        // setError(phoneSent, 'Số điện thoại không được để trống');
     $("#vphone").text("Số điện thoại không được để trống");
     $("#inputPhone").css("border", "1px solid red");

        isCheck = false;
    } else if (!isPhone(phoneValue)) {
        // setError(phoneSent, 'Số điện thoại không đúng định dạng');
     $("#vphone").text("Số điện thoại không đúng định dạng");
     $("#inputPhone").css("border", "1px solid red");

        isCheck = false;
    } else {
        setSuccess(phoneSent);
    }
    if (adressValue == '') {
        $("#vaddress").text("Địa chỉ không được để trống");
        $("#inputAdress").css("border", "1px solid red");
           isCheck = false;
       } else {
           setSuccess(adressSent);
       }
    return isCheck;
    if (messageValue == '') {
        $("#vmessage").text("Vui lòng nhập lời nhắn");
        $("#exampleFormControlTextarea1").css("border", "1px solid red");
           isCheck = false;
       } else {
           setSuccess(messageSent);
       }
    return isCheck;
}

function setSuccess(ele) {
    ele.parentNode.classList.add('success');
}


function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
        email
    );
}

function isPhone(number) {
    return /(84|0[3|5|7|8|9])+([0-9]{8})\b/.test(number);
}

    </script>

                        






 



    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="../../dam/css/danh-sach-sp/img/logooo.png" alt="" style ="width:60px;">
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
    </>









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




    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>











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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>