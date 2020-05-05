<?php include('templates/header.php');?>
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
		<input type="password" placeholder="Current Password"  class="fadeIn third" name="currentPassword" id="currentPassword"/>
		<input type="password" placeholder="New Password"  class="fadeIn third" name="newPassword" id="newPassword"/>
		<input type="password" placeholder="New Password Again"  class="fadeIn third" name="newPasswordAgain" id="newPasswordAgain"/>
	  
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>
    <input type="submit" class="fadeIn fourth" value="update"/>
   
    </form>


  </div>
</div>
</form>