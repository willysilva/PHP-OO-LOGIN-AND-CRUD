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
<form action="" method="post">
	<div class="field">
		<label for="name">name</label>
		<input type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>" autocomplete="off"/>
	</div>
	<div class="field">
		<label for="cpf">cpf</label>
		<input type="text" name="cpf" id="cpf" value="<?php echo escape(Input::get('cpf')); ?>" autocomplete="off"/>
	</div>
	<div class="field">
		<label for="rg">rg</label>
		<input type="text" name="rg" id="rg" value="<?php echo escape(Input::get('rg')); ?>" autocomplete="off"/>
	</div>
	<div class="field">
		<label for="birth">birth</label>
		<input type="date" name="birth" id="birth" value="<?php echo escape(Input::get('birth')); ?>" autocomplete="off"/>
	</div>
	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>
	<input type="submit" value="Register"/>
</form>

