<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/login.css">    
<form action="" method="post">

<div class="wrapper fadeInDown">
  <div id="formContent">
    
  <div class="fadeIn first">
      <img src="/assets/img/logo.png" id="icon" alt="User Icon" />
      <br></br>
    </div>
<form action="" method="post">
	<div class="field">
		<input type="text" name="username" placeholder="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off"/>
	</div>
	<div class="field">
		<input type="password" placeholder="password" name="password" id="password"/>
	</div>
	<div class="field">
		<input type="password" name="passwordAgain" placeholder="password again" id="passwordAgain"/>
	</div>
	<div class="field">
		<input type="text" name="name" placeholder="name" id="name" value="<?php echo escape(Input::get('name')); ?>"/>
	</div>
	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>
	<input type="submit" value="login"/>
	<div id="register-link" class="text-center">
                                <a href="login.php" class="text-info">back to login</a>
    </div>
</form>