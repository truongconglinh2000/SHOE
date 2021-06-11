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
use App\Models\Comment;
use App\Models\Car;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class ProDetail extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */

    public function getAction() {
        $id= $this->route_params['id'];
        $comment= Comment::get($id);
        $product = Product::getID($id);
        if(isset($_SESSION['id_user'])){
            $cart = Car::Select($_SESSION['id_user']);
            View::render('index.php', ['page'=>'productdetail','product' => $product,'comment'=>$comment,'cartt'=>$cart]);
        }
        else{
            View::render('index.php', ['page'=>'productdetail','product' => $product,'comment'=>$comment]);
        }
       
    }
    public function getImgAction() {
 
        $id= $this->route_params['id'];
        $idPro = ProductDetail::getID($id);
        $product = Product::getID($idPro[0]['id_pro']);
        $comment= Comment::get($idPro[0]['id_pro']);
        $img = Product::getImg($id);
        if(isset($_SESSION['id_user'])){
            $cart = Car::Select($_SESSION['id_user']);
            View::render('index.php', ['page'=>'productdetail','product' => $product,'image'=>$img[0]['image'],'idprode'=>$id,'comment'=>$comment,'cartt'=>$cart]);
        }
        else{
            View::render('index.php', ['page'=>'productdetail','product' => $product,'image'=>$img[0]['image'],'idprode'=>$id,'comment'=>$comment]);
        }
       
       
    }
    public function AddComment(){
        if(isset($_SESSION['id_user'])){
        if(empty($_POST['fullname']) && empty($_POST['comment'])){
            echo
            "<script type='text/javascript'>alert('Mời bạn nhập đầy đủ thông tin');
            history.back();
            </script>";
        }
        else{
            Comment::Insert($_POST['id'],$_SESSION['id_user'],$_POST['fullname'],$_POST['comment'],5);
            echo "<script>
            history.back();
            </script>";
        }
    }
    else{
        echo
        "<script type='text/javascript'>alert('Bạn chưa đăng nhập');
        history.back();
        </script>";
    }
    }
    public function DeleComment(){
        $id= $this->route_params['id'];
        Comment::Delete($id);
        echo
        "<script>
        history.back();
        </script>";
    }
}
