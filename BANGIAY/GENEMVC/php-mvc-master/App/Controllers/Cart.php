<?php
namespace App\Controllers;
if(!isset($_SESSION)){
    ob_start();
    session_start();
}

use \Core\View;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Category;
use App\Models\Car;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class Cart extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    // public static function ktr_tontaiAction($id){
    //     for($i=0;$i<count($_SESSION['id_sp']);++$i){
    //         if($_SESSION['id_sp'][$i]==$id){
    //             return $i;
    //         }
    //     }
    //     return -1;
    // } 
    public function addCartAction() {
        if(isset($_POST['button'])){
       if(isset($_POST['size'])){
            $size = $_POST['size'];
       }else{
           $size=39;
       }
       if(isset($_POST['sl'])){
        $soluong = $_POST['sl'];
   }else{
       $soluong=1;
   }
       $rs = ProductDetail::get($_POST['id_prode']);
       if(isset($_SESSION['id_user'])){
           Car::Insert($_SESSION['id_user'],$rs[0]['id_prode'],$rs[0]['productname'],$rs[0]['image'],$size,$soluong,$rs[0]['price'],$rs[0]['price']*$soluong);
       }
else{
       if(isset($_SESSION['id_sp'])){
        for($i=0;$i<count($_SESSION['id_sp']);++$i){
            if($_SESSION['id_sp'][$i]==$rs[0]['id_prode']){
                $exit = 1;
                $dem = $i;
            }
        }
        if(!isset($exit)){
            $index=count($_SESSION['id_sp']);
            $_SESSION['id_sp'][$index]=$rs[0]['id_prode'];
            $_SESSION['tensanpham'][$index]=$rs[0]['productname'];
            $_SESSION['hinhanh'][$index]=$rs[0]['image'];
            $_SESSION['price'][$index]=$rs[0]['price'];
            $_SESSION['soluong'][$index]=$soluong;
            $_SESSION['size'][$index]=$size;
        }
        else{
            if(!isset($_POST['sl']))
                $_SESSION['soluong'][$dem]+=1;
            else
                $_SESSION['soluong'][$dem]+=(int)$_POST['sl'];
        }
    }
    else{
        if(!empty($rs)){
        $_SESSION['id_sp'][0]=$rs[0]['id_prode'];
        $_SESSION['tensanpham'][0]=$rs[0]['productname'];
        $_SESSION['hinhanh'][0]=$rs[0]['image'];
        $_SESSION['price'][0]=$rs[0]['price'];
        $_SESSION['soluong'][0]=$soluong;
        $_SESSION['size'][0]=$size;
        }
    }
}
}
        if(isset($_SESSION['id_user'])){
            $cart = Car::Select($_SESSION['id_user']);
            View::render('index.php', ['page'=>'cart','cartt'=>$cart]);
        }
        else{
            View::render('index.php', ['page'=>'cart']);
        }
}
 public function deleteCartAction(){
    
    
    if(isset($_SESSION['id_user'])){
        $id_prode= $this->route_params['id'];
        Car::Delete($id_prode);
    }
    else{
        $id= $this->route_params['id'];
        unset($_SESSION['id_sp'][$id]);
        unset($_SESSION['tensanpham'][$id]);
        unset($_SESSION['hinhanh'][$id]);
        unset($_SESSION['price'][$id]);
        unset($_SESSION['soluong'][$id]);
        unset($_SESSION['size'][$id]);
    }
    //$cart = Car::Select($_SESSION['id_user']);
    //View::render('index.php', ['page'=>'cart','cartt'=>$cart]);
    echo "<script>
    history.back();
    </script>";
 }
 public function checkOut(){
     if(isset($_POST["submit"])){
         if(!isset($_SESSION['id_user'])){
            echo "<script type='text/javascript'>alert('Bạn chưa đăng nhập');
      history.back();
      </script>";

         }
         else{
           if(isset($_POST['sp'])){
               if(isset($_SESSION['cart_id'])){
                    unset($_SESSION['cart_id']);
               }
               $i=1;
                   foreach($_POST['sp'] as $value){
                     $rs = Car::SelectID($value,$_SESSION['id_user']);
                     $_SESSION['cart_id'][$i]= $value;
                     $_SESSION['cart_name'][$i]= $rs[0]['name'];
                     $_SESSION['cart_total'][$i] = $rs[0]['total'];
                     $i++;
                   }
                   View::render('index.php', ['page'=>'checkout']);
           }
           else{
            echo "<script type='text/javascript'>alert('Bạn chưa chọn Sản Phẩm');
            history.back();
            </script>";
           }
         }
         }
     }
 
}
