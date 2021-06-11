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
class Login extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */

   public function loginAction(){
    $product = Product::getAll();
    $prode = ProductDetail::getAll();
     if(isset($_POST['login'])){
     $result="";
       if(isset($_POST['user']) && isset($_POST['pass'])){
        $username = trim($_POST['user']);
        $password = trim($_POST['pass']);
        $result = User::test($username, $password);
       }
       if(!empty($result)){
         $_SESSION['id_user']=$result[0]['id_user'];
         $_SESSION['username']=$result[0]['lastname'];
         if(isset($_SESSION['id_sp'])){
          for($i=0;$i<count($_SESSION['id_sp']);++$i){
              Car::Insert( $_SESSION['id_user'], $_SESSION['id_sp'][$i], $_SESSION['tensanpham'][$i], $_SESSION['hinhanh'][$i], $_SESSION['size'][$i], $_SESSION['soluong'][$i], $_SESSION['price'][$i], $_SESSION['price'][$i]* $_SESSION['soluong'][$i]);
          }
          unset($_SESSION['id_sp']);
         }
        
        }
        else{
          echo
          "<script type='text/javascript'>alert('Tài Khoản Mật Khẩu Không Đúng');
          history.back();
          </script>";
        }
        // View::render('index.php', ['page'=>'home','product' => $product,'prode'=>$prode]);
       }
     
          // View::render('index.php',['message'=>'Tài Khoản hoặc Mật khẩu không đúng']);
          echo '<script>
          history.back();
      </script>';
       
   }
  
   public function logoutAction(){
    unset($_SESSION['id_user']);
    unset($_SESSION['username']);
    // View::render('index.php', ['page'=>'home','product' => $product,'prode'=>$prode]);
    echo '<script>
    history.back();
</script>';
   }
}
