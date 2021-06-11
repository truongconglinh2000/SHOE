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
use App\Models\Order;
use App\Models\Car;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class Checkout extends \Core\Controller
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
        //$category = Category::getAll();
        $product = Product::getAll();
        $prode = ProductDetail::getAll();
        View::render('index.php', ['page'=>'home','product' => $product,'prode'=>$prode]);
    }
    public function loginAction(){
        View::render('login.php');
}
public function Order(){
    //$cart = Car::Select($_SESSION['id_user']);
    for($i=1;$i<=count($_SESSION['cart_id']);$i++){
        Order::Insert($_SESSION['id_user'],$_SESSION['cart_id'][$i],$_SESSION['cart_name'][$i],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['address'],$_SESSION['cart_total'][$i]);
    }
    //$order = Order::Select($_SESSION['id_user']);
    View::render('index.php', ['page'=>'order']);
}
public function Detail(){
    //$order = Order::Select($_SESSION['id_user']);
    View::render('index.php',['page'=>'order']);
}
}
