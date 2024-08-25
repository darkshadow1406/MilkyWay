<?php
    require_once ('pdo.php');
    
    function hoa_don_select_all(){
        $sql = "SELECT * FROM hoa_don ORDER BY ma_hd DESC";
        return pdo_query($sql);
    }


    function hoa_don_select_by_id($ma_hd){
        $sql = "SELECT * FROM hoa_don WHERE ma_hd=?";
        return pdo_query_one($sql,$ma_hd);
    }

    

    function hoa_don_chi_tiet_select_all(){
        $sql = "SELECT * FROM hoa_don_chi_tiet ORDER BY ma_hd DESC";
        return pdo_query($sql);
    }

    
    function hoa_don_chi_tiet_select_by_id($ma_hd){
        $sql = "SELECT * FROM hoa_don_chi_tiet 
        JOIN hang_hoa ON hoa_don_chi_tiet.ma_hh = hang_hoa.ma_hh
        WHERE hoa_don_chi_tiet.ma_hd=?";
        return pdo_query($sql,$ma_hd);
    }
    function tt_don_hang_select_all(){
        $sql = "SELECT * FROM tt_don_hang";
        return pdo_query($sql);
    }

    function up_tt_don_hang($ma_hd, $tinh_trang){
        $sql= "UPDATE hoa_don SET tinh_trang=? WHERE ma_hd=?";
        pdo_execute($sql,$tinh_trang, $ma_hd);
    }

?>