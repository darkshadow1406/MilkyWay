<?php
    require_once ('pdo.php');
    require_once ('loai-hang.php');

    function hang_hoa_insert($ten_hh,$hinh,$don_gia,$giam_gia,$mo_ta,$ma_loai,$size,$maMau){//hàm thêm hàng hóa
        $sql = "INSERT INTO hang_hoa(ten_hh,hinh,don_gia,giam_gia,mo_ta,ma_loai,maSize,maMau) VALUES (?,?,?,?,?,?,?,?)";//chèn vào bảng hh các thông tin tương ứng
        pdo_execute($sql,$ten_hh,$hinh,$don_gia,$giam_gia,$mo_ta,$ma_loai,$size,$maMau);
    }

    function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $mo_ta, $size, $mauSac){//sửa sản phẩm
        $sql = "UPDATE hang_hoa SET ten_hh=?, don_gia=?, giam_gia=?, hinh=?, ma_loai=?, mo_ta=?, maSize=?, maMau=? WHERE ma_hh=?";//cập nhật tt sp theo mã sp
        pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $mo_ta, $size, $mauSac, $ma_hh);
        }


    function hang_hoa_delete($ma_hh){//hàm xóa sp
        $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";//xóa hh theo mã hh
        if(is_array($ma_hh)){
            foreach($ma_hh as $ma){
                pdo_execute($sql,$ma);
            }
        }else{
            pdo_execute($sql,$ma_hh);
        }
    }

    function hang_hoa_select_all(){//hàm lấy all thông tin sp trong bảng hh
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC";//lấy dữ liệu từ mysql
        return pdo_query($sql);
    }

    function hang_hoa_select_all_chocolate(){
        $sql = "SELECT * FROM hang_hoa JOIN loai_hang ON hang_hoa.ma_loai = loai_hang.ma_loai WHERE ten_loai='chocolate'";
        return pdo_query($sql);
    }

    function hang_hoa_select_all_cakecream(){
        $sql = "SELECT * FROM hang_hoa JOIN loai_hang ON hang_hoa.ma_loai = loai_hang.ma_loai WHERE ten_loai='cakecream'";
        return pdo_query($sql);
    }

    function hang_hoa_select_all_price(){
        $sql = "SELECT * FROM hang_hoa ORDER BY don_gia DESC LIMIT 0,9";
        return pdo_query($sql);
    }

    function hang_hoa_select_by_id($ma_hh){//hàm lấy tt sp theo mã sp
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
        return pdo_query_one($sql,$ma_hh);
    }

    function hang_hoa_ban_chay(){
        $sql = "SELECT * FROM hang_hoa ORDER BY don_gia DESC LIMIT 0,6";
        return pdo_query($sql);
    }

    function hang_hoa_sale(){
        $sql = "SELECT * FROM hang_hoa ORDER BY giam_gia ASC LIMIT 0,5";
        return pdo_query($sql);
    }

    function hang_hoa_sale_9(){
        $sql = "SELECT * FROM hang_hoa ORDER BY giam_gia ASC LIMIT 0,9";
        return pdo_query($sql);
    }

    function hang_hoa_noi_bat(){
        $sql = "SELECT * FROM hang_hoa ORDER BY giam_gia DESC LIMIT 0,8";
        return pdo_query($sql);
    }

    function hang_hoa_select_by_loai($ma_loai){
        $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
        return pdo_query($sql, $ma_loai);
    }

    function hang_hoa_select_keyword($keyword){
        $sql = "SELECT * FROM hang_hoa hh "
                . " JOIN loai_hang lo ON lo.ma_loai=hh.ma_loai "
                . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
        return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
    }

    function hang_hoa_get_nameSize(){
        $sql = "SELECT hang_hoa.maSize , size.Size FROM hang_hoa, size WHERE hang_hoa.maSize = size.maSize";
        return pdo_query($sql);
    }
    function loadall_pro($keyword="", $maLoai=0){
        $sql = "SELECT*FROM hang_hoa WHERE 1";
        if($keyword!=""){
            $sql.=" and ten_hh like '%".$keyword."%'";
        }
        if($maLoai>0){
            $sql.=" and ma_loai= '".$maLoai."'";
        }
        
        $sql.=" ORDER BY ma_hh DESC";
        $listpro = pdo_query($sql);
        return $listpro;
    }


?>