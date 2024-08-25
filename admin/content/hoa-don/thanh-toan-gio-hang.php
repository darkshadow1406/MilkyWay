<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once ('../../dao/hoa-don.php');
    extract($_REQUEST);
    // $item = hoa_don_select_by_id($ma_hd);
    // extract($item);
    //  $mahd = $ma_hd;
    //  $ngaymua = $ngay_mua;
    //  $ghichu = $ghi_chu;
    //  $tinhtrang = $tinh_trang;
    //  $makh = $ma_kh;
    //  $conn = pdo_get_connection();
    //  if(isset($_POST['btn_update'])){
    //     $sql = "UPDATE hoa_don SET tinh_trang = '".$tinhtrang."' WHERE ma_hd = '".$mahd."'";
    //     $conn->exec($sql);
    //  };

    $mahd=$_POST['mahd'];

    if(array_key_exists("btn_update",$_REQUEST)){
        up_tt_don_hang($mahd, $tinh_trang);   
    }
    //  var_dump($_REQUEST);
     header('location: hoa-don-list.php');

?>
</body>
</html>