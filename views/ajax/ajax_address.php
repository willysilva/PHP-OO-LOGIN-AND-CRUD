<?php  $id = $_GET['id'];?>
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
				<div class="form-group">
				<input type="text" class="form-control"  hidden readonly value="<?php echo $id;?>" required name="id_client" placeholder="id" />
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" required name="cep" placeholder="CEP" />
			  </div>
			  <div class="form-group">
				
				<input type="text" class="form-control" required name="number" placeholder="number" />
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" name="street" placeholder="street" />
			  </div>
			  
			  <div class="form-group">
				<input type="text" class="form-control" name="neighborhood" placeholder="neighborhood" />
			  </div>
			  
			   <div class="form-group">
				<input type="text" class="form-control" readonly name="city" placeholder="city" />
			  </div>
			  
			  <div class="form-group">
				<input type="text" class="form-control" readonly name="uf" placeholder="uf" />
			  </div>		  
			  <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>
			<input type="submit" value="Register"/>
</form>
	</div>	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/cep.js"></script>	
</body>
</html>