<div class="container" id="container">
  <div class="form-container sign-in-container" id="myModal">
    <form action="./home" method="Post">
    <?php
  if(isset($message)){
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
  ?> 
    <h1>Sign in</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <span>or use your account</span>
      <input type="text" name="user" placeholder="Email" />
      <input type="password" name ="pass" placeholder="Password" />
      <a href="#">Forgot your password?</a>
      <button name="login">Sign In</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login with your personal info</p>
        <button class="ghost" id="signIn">Sign In</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello, Friend!</h1>
        <p>Enter your personal details and start journey with us</p>
        <button class="ghost" id="signUp">Sign Up</button>
      </div>
    </div>
  </div>
</div>