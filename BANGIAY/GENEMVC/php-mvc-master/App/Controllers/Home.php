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
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $users = User::getAll();
        View::render('Home/index.html', ['variable' => $users]);
    }

 
    public function getAllAction() {
        $product = Product::getAll();
        $prode = ProductDetail::getAll();
        if(isset($_SESSION['id_user'])){
            $cart = Car::Select($_SESSION['id_user']);
            View::render('index.php', ['page'=>'home','product' => $product,'prode'=>$prode,'cartt'=>$cart]);
        }else{
            View::render('index.php', ['page'=>'home','product' => $product,'prode'=>$prode]);
        }
        
       
        
    }
    public function loginAction(){
        $cart = Car::Select($_SESSION['id_user']);
        View::render('login.php',['cartt'=>$cart]);
}
}
