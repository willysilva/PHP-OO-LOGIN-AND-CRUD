<br>
<div class="container bg-light border pb-2">
    <nav class="navbar navbar-light ">
        <a>Clients</a>
    </nav>
    <div id="accordion" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Clients
                </a>
            </div>
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body p-0">
                    <ul class="list-group cat-list">
  
                     <?php     
                      foreach ($data as $key => $value) { 
                     
                                     ?>
                       <a href="/clients_update.php?id=<?php echo $data[$key]->ID;?>">
                            <li class="list-group-item"> <?php echo $data[$key]->name; ?>
                            <a class="btn icon-btn btn-danger float-right" href="/clients_remove.php?id=<?php echo $data[$key]->ID;?>">
                            <span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>Remove</a>
                            </a>
                            <a class="btn icon-btn btn-success float-right" href="/clients_list_address.php?id=<?php echo $data[$key]->ID;?>">
                            <span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>List address</a>
                            </a>
                           
                           
                     
                        </li>
                         
                        </a>
                  
                      
                    </ul>
                    </div>
                    <?php                          
                      }
                        ?>
                
                
            </div>

        </div>
        <nav class="navbar navbar-light ">
                    <a href="/clients.php">New client</a>
                </nav>
    </div>
</div>