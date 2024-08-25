<?php
    session_start();
    extract($_REQUEST);
    if(array_key_exists('btn_update_gio_hang',$_REQUEST)){
        foreach($sl as $key=>$value){
            $_SESSION['cart'][$key]['sl'] = $value;
            
        }

        foreach($cl as $key=>$value){
            $_SESSION['cart'][$key]['color'] = $value;
            
        }

        foreach($sz as $key=>$value){
            $_SESSION['cart'][$key]['size'] = $value;
            
        }

    }
  header('location: danh-sach-gio-hang.php');



?>