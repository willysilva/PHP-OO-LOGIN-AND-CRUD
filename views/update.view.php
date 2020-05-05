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

    <form action="" method="post">
		
	<label for="name">Update Name</label>
	<input type="text" class="fadeIn second"   name="name" id="name" value="<?php echo escape($user->data()->name); ?>" autocomplete="off"/>
  
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>
    <input type="submit" class="fadeIn fourth" value="update"/>
   
    </form>


  </div>
  
</div>
