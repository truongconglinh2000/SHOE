<header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions">             
                  <?php if(!isset($_SESSION['id_user'])){?>
                       <!-- <a href="./login">Login & Regiser</a> -->
                       <button id="myBtn">Login & Register</button>   
                 <?php }
                 else{
                 ?>
                  <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user/user.png" alt="" style="max-width:20px;"><?php echo $_SESSION['username'];?></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"><img src="images/flag/usa.svg" alt=""></a></li>
                        <li><a href="./order"><img src="images/flag/singapore.svg" alt="">Chi tiết đơn hàng </a></li>
                        <li><a href="logout"><img src="images/flag/japan.svg" alt="">Log Out</a></li>
                      </ul>
                  </div>
                 <?php } ?>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"><img src="images/flag/usa.svg" alt=""> USD</a></li>
                        <li><a href="#"><img src="images/flag/singapore.svg" alt=""> SGD</a></li>
                        <li><a href="#"><img src="images/flag/japan.svg" alt=""> JPN</a></li>
                      </ul>
                    </div>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Japanese</a></li>
                        <li><a href="#">Chinese</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.html"><img src="images/logo.png" alt=""></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                  <li class="menu-item menu-item-has-children dropdown"><a href="">Home</a>
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="index.html">Homepage #1</a></li>
                          <li class="menu-item"><a href="#">Homepage #2</a></li>
                          <li class="menu-item"><a href="#">Homepage #3</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="./cate/1">Men</a>
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="index.html">Homepage #1</a></li>
                          <li class="menu-item"><a href="#">Homepage #2</a></li>
                          <li class="menu-item"><a href="#">Homepage #3</a></li>
                        </ul>
                  </li>
                  <li class="menu-item"><a href="./cate/2">Women</a></li>
                  <li class="menu-item"><a href="#">Kids</a></li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">News</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.html">Blog-grid</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.html">Blog Grid 1</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                </ul>
                          </li>
                          <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>
                        <ul class="sub-menu">
                          <li class="menu-item"><a href="contact-us.html">Contact Us #1</a></li>
                          <li class="menu-item"><a href="contact-us.html">Contact Us #2</a></li>
                        </ul>
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Search Product…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <?php if(!empty($_SESSION['id_sp'])){
              $quanity=0;
                      for($i=0;$i<count($_SESSION['id_sp']);$i++){ 
                          $quanity++;
                      }
            } ?>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i><?php if(!empty($_SESSION['id_sp'])){echo $quanity;} else {echo "0";}?></i></span><i class="ps-icon-shopping-cart"></i></a>
              <div class="ps-cart__listing" style="width:350px;">
                <div class="ps-cart__content">
                  <?php if(!empty($_SESSION['id_sp'])){
                    $soluong =0;
                    $total =0;
                    for($i=0;$i<count($_SESSION['id_sp']);$i++){ 
                       $soluong = $soluong +$_SESSION['soluong'][$i];
                       $total = $total +$_SESSION['soluong'][$i]*$_SESSION['price'][$i];     
                  ?>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="delete/<?php echo $i;?>"></a>
                    <div class="ps-cart-item__thumbnail"><a href="./productImg/<?php echo $_SESSION['id_sp'][$i];?>"></a><img src="images/shoe/<?php echo $_SESSION['hinhanh'][$i];?>" alt=""></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html"><?php echo $_SESSION['tensanpham'][$i];?></a>
                      <p><span>Quantity:<i><?php echo $_SESSION['soluong'][$i];?></i></span><span>Total:<i><?php echo number_format($_SESSION['soluong'][$i]*$_SESSION['price'][$i]);?></i></span></p>
                    </div>
                  </div>
                  <?php }}
                  else{
                    if(isset($cartt)){
                      $total =0;
                     foreach($cartt as $value){
                       $total = $total + $value['total']; ?>
                        <div class="ps-cart-item"><a class="ps-cart-item__close" href="delete/<?php echo $value['id_prode'];?>"></a>
                    <div class="ps-cart-item__thumbnail"><a href="./productImg/<?php echo $value['id_prode'];?>"></a><img src="images/shoe/<?php echo $value['image'];?>" alt=""></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html"><?php echo $value['name'];?></a>
                      <p><span>Quantity:<i><?php echo $value['soluong'];?></i></span><span>Total:<i><?php echo number_format($value['total']);?></i></span></p>
                    </div>
                  </div>


                <?php } }}
                  ?>
                </div>
                <div class="ps-cart__total">
              <?php if(!empty($_SESSION['id_sp'])){?>
                  <p>Number of items:<span><?php echo $soluong;?></span></p>
                  <p>Item Total:<span><?php  echo number_format($total);?></span></p>
                  <?php }
                  else { echo "<p style='text-align: center'>CHƯA CÓ SẢN PHẨM</p>";} ?>
                </div>
                <div class="ps-cart__footer"><a class="ps-btn" href="./cart">Check out<i class="ps-icon-arrow-left"></i></a></div>
              </div>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div>