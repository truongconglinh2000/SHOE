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
use App\Models\Sub_Category;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class ProList extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */

    public function getAllAction() {
        $idCat= $this->route_params['id'];
        $Cate = Sub_Category::getAll($idCat);
        $product = Sub_Category::getPro($idCat);
        $prode = ProductDetail::getAll();
        View::render('index.php', ['page'=>'product-listing','cate' => $Cate,'product'=>$product,'prode'=>$prode]);
    }
    /**public function getID(){
        $idSub= $this->route_params['id'];
        
        $CatSELECT Distinct pr.productname,pr.price,pr.id_pro, pr_dt.image,pr_dt.id_prode from product pr, product_detail pr_dt where pr.id_subcat=3 and pr.id_pro = pr_dt.id_pro
    }**/

}
