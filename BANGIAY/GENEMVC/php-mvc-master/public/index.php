<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/', ['controller' => 'Home', 'action' => 'getAll']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/productdetail/{id:\d+}', ['controller' => 'ProDetail', 'action' => 'get']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/productImg/{id:\d+}', ['controller' => 'ProDetail', 'action' => 'getImg']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/cate/{id:\d+}', ['controller' => 'ProList', 'action' => 'getAll']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/subCat/{id:\d+}', ['controller' => 'ProList', 'action' => 'getAll']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/login',['controller' => 'Home', 'action' => 'login']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/home',['controller' => 'Login', 'action' => 'login']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/logout',['controller' => 'Login', 'action' => 'logout']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/cart',['controller' => 'Cart', 'action' => 'addCart']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/delete/{id:\d+}',['controller' => 'Cart', 'action' => 'deleteCart']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/do_action',['controller' => 'Checkout', 'action' => 'Order']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/checkout',['controller' => 'Cart', 'action' => 'checkOut']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/order',['controller' => 'Checkout', 'action' => 'Detail']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/_action',['controller' => 'ProDetail', 'action' => 'AddComment']);
$router->add('/BANGIAY/GENEMVC/php-mvc-master/public/deleComment/{id:\d+}',['controller' => 'ProDetail', 'action' => 'DeleComment']);
$router->dispatch($_SERVER['REQUEST_URI']);
