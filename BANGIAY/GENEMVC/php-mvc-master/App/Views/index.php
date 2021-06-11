
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
   <?php include "user/block/khaibao.php"?>
   <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

   #myBtn{
     border: none;
     border-left: 1px solid #eee;
     background: white;
     height: 40px;
   }
   #myBtn:hover{
     background: #2AC37D;
     color: white;
   }
   #container h1 {
  font-weight: bold;
  margin: 0;
}

#containerh2 {
  text-align: center;
}

#container p {
  font-size: 14px;
  font-weight: 100;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;
}

#container span {
  font-size: 12px;
}

#container a {
  color: #333;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}

#container button {
  border-radius: 20px;
  border: 1px solid #2BC36F;
  background-color: #2BC36F;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

#container button:active {
  transform: scale(0.95);
}

#container button:focus {
  outline: none;
}

#container button.ghost {
  background-color: transparent;
  border-color: #FFFFFF;
}

#container form {
  background-color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
  border-radius: 10px 0 0 10px;
}

#container input {
  background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
  0 10px 10px rgba(0,0,0,0.22);
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 150; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  right:0;
  top: 0;
  height:100%;
  width:100%;
  max-width:100%;
  background-color: rgba(0,0,0,0.4);
}

#container .form-container {
  position: absolute;
  top: 10%;
  height: 80%;
  transition: all 0.6s ease-in-out;
}

#container .sign-in-container {
  left: 20%;
  width: 30%;
  z-index: 150;
}

#container .container.right-panel-active .sign-in-container {
  transform: translateX(100%);
}

#container .sign-up-container {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 150;
}

#container .container.right-panel-active .sign-up-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 150;
  animation: show 0.6s;
}

@keyframes show {
  0%, 49.99% {
    opacity: 0;
    z-index: 1;
  }
  
  50%, 100% {
    opacity: 1;
    z-index: 5;
  }
}

#container .overlay-container {
  position: absolute;
  top: 10%;
  left: 49%;
  width: 30%;
  height: 80%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
  border-radius: 0 10x 10px 0;
}

#container .container.right-panel-active .overlay-container{
  transform: translateX(-100%);
}

#container .overlay {
  background: #FF416C;
  background: -webkit-linear-gradient(to right, #FF4B2B, #2AC37D);
  background: linear-gradient(to right,#2BC36F, #2AC37D);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #FFFFFF;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
    transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

#container .container.right-panel-active .overlay {
    transform: translateX(50%);
}

#container .overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

#container .overlay-left {
  transform: translateX(-20%);
}

#container .container.right-panel-active .overlay-left {
  transform: translateX(0);
}

#container .overlay-right {
  right: 0;
  transform: translateX(0);
}

.container.right-panel-active .overlay-right {
  transform: translateX(20%);
}

.social-container {
  margin: 20px 0;
}

.social-container a {
  border: 1px solid #DDDDDD;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
}

#container footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

#container footer p {
    margin: 10px 0;
}

#container footer i {
    color: red;
}

#container footer a {
    color: #3c97bf;
    text-decoration: none;
}
    </style>
   <!-- <script type="text/javascript">
       function descrease()
     {
      $index="0";
   
      document.getElementById("quanity0").value= $index;
      //  var vl=document.getElementById("quanity"+(string)$index).value;
      //  if(vl<=0){
      //   document.getElementById("quanity").value=0;
      //  }
      //  else{
      //    document.getElementById("quanity"+$index).value= parseInt(vl)-1;
      //    }
    
     }
     function crease()
     {
       var vl=document.getElementById("quanity").value;
       document.getElementById("quanity").value= parseInt(vl)+1;
     }
   
   </script> -->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <?php   include "user/block/header.php" ?>
   
    <main class="ps-main">
    <?php require_once "user/pages/".$args["page"].".php"; ?>
      <?php  include "user/block/footer.php" ?>
    </main>
    <?php  include "user/block/lo.php" ?>
    <!-- JS Library-->
    <?php include "user/block/khaibaoJS.php"?>
  </body>
</html>