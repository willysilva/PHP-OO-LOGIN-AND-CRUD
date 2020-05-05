<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/font-awesome.js"></script>

<style> 
        .navbar-custom { 
            background-color: #f07d00; 
        }            
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text, .nav-link { 
            color: white; 
} 
    </style> 
<nav class="navbar navbar-expand-lg navbar-custom bg-custom">
  <a class="navbar-brand" href="/index.php">Kabum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#057bbb; font-size:28px;"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
 
   
    <li class="form-inline my-2 my-lg-0">
    <li class="nav-item">
        <a class="nav-link" href="/clients.php">New Client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/index.php">List Clients</a>
      </li>
      
    </ul>

 
    <ul class="navbar-nav"> 
      <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
             User Options
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="/update.php">Update Details</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/changepassword.php">Change Password</a>
              
         
              
            </div>
          </li></ul>
        
          <a  class="btn btn-danger nav-link" href="logout.php">Logout</a>
  </li>
  
  </div>
</nav>
<body>



