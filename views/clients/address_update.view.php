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
   if($id == $data[$key]->id) {?>
    
	<label for="name">Update Adress</label>
    <input type="text" class="fadeIn second"   name="cep" id="cep" value="<?php echo escape($data[$key]->cep); ?>" autocomplete="off"/>
    <input type="text" class="fadeIn second"   name="number" id="number" value="<?php echo escape($data[$key]->number); ?>" autocomplete="off"/>
    <input type="text" class="fadeIn second"   name="street" id="street" value="<?php echo escape($data[$key]->street); ?>" autocomplete="off"/>
    <input type="text" class="fadeIn second"   name="neighborhood" id="neighborhood" value="<?php echo escape($data[$key]->neighborhood); ?>" autocomplete="off"/>
    <input type="text" class="fadeIn second"   name="city" id="city" value="<?php echo escape($data[$key]->city); ?>" autocomplete="off"/>
    <input type="text" class="fadeIn second"   name="state" id="state" value="<?php echo escape($data[$key]->state); ?>" autocomplete="off"/>
    

  <?php
  $ida=$data[$key]->id_client;
}
   }
  ?>
</head>
<body>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/cep.js"></script>	
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"/>
    <input type="submit" class="fadeIn fourth" value="update"/>
   
    </form>

  </div>

