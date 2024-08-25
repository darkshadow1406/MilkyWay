<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>ADMIN</title>
	<!-- Bootstrap Styles-->
    <link href="../../../css/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../../../css/admin/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../../../css/admin/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index"><strong style = "margin-left: 40px;">MILKY WAY</strong></a>
            </div>
           
    <!-- Nav bar-->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/tai-khoan/dang-xuat.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="../thong-ke/thong-ke-list.php"><i class="fa fa-dashboard"></i>TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="../loai-hang/loai-hang-list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>LOẠI HÀNG</a>
                    </li>
                    <li>
                        <a href="../hang-hoa/hang-hoa-list.php"><i class="fa fa-qrcode"></i>HÀNG HÓA</a>
                    </li>
                    
                    <li>
                        <a href="../khach-hang/khach-hang-list.php"><i class="fa fa-user"></i>KHÁCH HÀNG</a>
                    </li>
                    <li>
                        <a href="../binh-luan/binh-luan-list.php"><i class="fa fa-comment-o" aria-hidden="true"></i>BÌNH LUẬN</a>
                    </li>
                    <li>
                        <a href="../hoa-don/hoa-don-list.php"><i class="fa fa-edit"></i>ĐƠN HÀNG</a>
                    </li>       
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ HÀNG HÓA</h1>
                            <p>Dưới đây là danh sách các hàng hóa đã được thêm vào: </p>

                            <!-- /. XỬ LÝ CODE PHP  -->
                            <?php
                                require_once ('../../dao/hang-hoa.php');
                                require_once ('../../dao/size.php');
                                require_once ('../../dao/color.php');
                                $items = hang_hoa_select_all();
                                // $nameSize = hang_hoa_get_nameSize();
                                // $sizeMs= size_select_all();
                                if(isset($_POST['search'])&& ($_POST['search'])){
                                    $keyword = $_POST['keyword'];
                                    $maLoai = $_POST['maLoai'];
                                }else{
                                    $keyword = "";
                                    $maLoai = 0;
                                }
                                // $listpro = hang_hoa_select_keyword($keyword);
                                $listcat = loai_hang_select_all();
                                $listpro = loadall_pro($keyword, $maLoai);

                                // var_dump($nameSize);

                            ?>
                            
                            <form action="" method="POST">
                                <input type="text" name="keyword" style="width: 200px;">
                                <select name="maLoai" style="padding: 2px; font-size: 1vw;">
                                    <option value="0" selected>Tất cả</option>
                                    <?php
                                        foreach ($listcat as $cat) {
                                        extract($cat);
                                        echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                                        }
                                    ?>
                                </select>
                                <input type="submit" name="search" id="" value="Search">
                            </form>
                            <!-- /. CONTENT  --><br>
                            <a href="hang-hoa-new.php"><button class="btn btn-danger">Thêm mới</button></a>
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>TÊN HH</th>
                                    <th>HÌNH ẢNH</th>
                                    <th>ĐƠN GIÁ</th>
                                    <th>GIẢM GIÁ</th>
                                    <!-- <th>SIZE</th>
                                    <th>MÀU</th> -->
                                    <th>HÀNH ĐỘNG</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($listpro as $pro){ //lấy tt của mảng
                                     extract($pro);
                                    ?> 
                                  <tr>
            
                                    <td><?=$ten_hh?></td>
                                    <td><img src="/css/admin/images/products/<?=$hinh?>" alt="" style="width:80px;"></td>
                                    <td><?=number_format($don_gia)?> <sup>đ</sup></td>
                                    <td><?=$giam_gia?> <sup>%</sup></td>
                                   
                                    <td> 
                                        <a href="hang-hoa-update.php?ma_hh=<?=$ma_hh?>"><button class="btn btn-primary">Sửa</button></a>
                                        <a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="hang-hoa-delete.php?ma_hh=<?=$ma_hh?>"><button class="btn btn-danger">Xóa</button></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                                </tbody>
                              </table>
                          
                        </div>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../../../css/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../../../css/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../../../css/admin/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../../../css/admin/js/custom-scripts.js"></script>
    
   
</body>
</html>
