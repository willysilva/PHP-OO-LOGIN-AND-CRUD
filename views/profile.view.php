<?php include ('templates/header.php');?>
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
	<label for="name">Name</label>
	  <input type="text" class="fadeIn second"  placeholder="username" name="username" readonly id="username" value="<?php echo escape($data->name); ?>" autocomplete="off"/>
	<label for="username">User</label>	
	  <input type="text" class="fadeIn second"  placeholder="username" name="username" readonly id="username" value="<?php echo escape($data->username); ?>" autocomplete="off"/>
	 
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>
   
    </form>


  </div>
</div>
</form>

