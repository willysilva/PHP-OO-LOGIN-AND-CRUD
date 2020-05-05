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
    <?php   
   foreach ($data as $key => $value) {                      
   if($id == $data[$key]->ID) {?>
	<label for="name">Update Name</label>
	<input type="text" class="fadeIn second"   name="name" id="name" value="<?php echo escape($data[$key]->name); ?>" autocomplete="off"/>
  <input type="text" class="fadeIn second"   name="cpf" id="cpf" value="<?php echo escape($data[$key]->cpf); ?>" autocomplete="off"/>
  <input type="text" class="fadeIn second"   name="rg" id="rg" value="<?php echo escape($data[$key]->rg); ?>" autocomplete="off"/>
  <input type="date" class="fadeIn second"   name="birth" id="birth" value="<?php echo escape($data[$key]->birth); ?>" autocomplete="off"/>
  <?php }
   }
  ?>
</head>
<body>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>
    <input type="submit" class="fadeIn fourth" value="update"/>
   
    </form>

  </div>

