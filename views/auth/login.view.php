<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/login.css">    
<form action="" method="post">

<div class="wrapper fadeInDown">
  <div id="formContent">
    
  <div class="fadeIn first">
      <img src="/assets/img/logo.png" id="icon" alt="User Icon" />
      <br></br>
    </div>

    <form>
      <input type="text" class="fadeIn second"  placeholder="username" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off"/>
      <input type="password"  class="fadeIn third" type="password" name="password" id="password" placeholder="password">
 
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>
    <input type="submit" class="fadeIn fourth" value="Login"/>
    <div id="register-link" class="text-center">
                                <a href="register.php" class="text-info">Register here</a>
    </div>
    </form>


  </div>
</div>
</form>

