<?php
        function size_select_all(){
            $sql = "SELECT * FROM size";
            return pdo_query($sql);
        }
        function size_select_by_id($maSize){
            $sql = "SELECT * FROM size WHERE maSize=?";
            return pdo_query_one($sql,$maSize);
        }
        function get_name_size($size){
            $sql = "SELECT hoa_don_chi_tiet.size, size.Size FROM hoa_don_chi_tiet, size WHERE hoa_don_chi_tiet.size = size.maSize";
            return pdo_query_one($sql,$size);
        }
?>