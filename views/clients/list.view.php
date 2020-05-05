<br>

<div class="container bg-light border pb-2">
    <nav class="navbar navbar-light ">
        <a>addresss</a>
    </nav>
    <div id="accordion" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    addresss
                </a>
            </div>
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-body p-0">
                    <ul class="list-group cat-list">
  
                     <?php     
                     $id = $_GET['id'];
                      foreach ($data as $key => $value) {
                        if($id == $data[$key]->id_client) {?>                                               
                                     
                       <a href="/address_update.php?id=<?php echo $data[$key]->id."&ida=".$id;?>">
                            <li class="list-group-item"> <?php echo $data[$key]->street.", ".$data[$key]->state.", ".$data[$key]->city.""?>
                           
                           <a class="btn icon-btn btn-warning float-right" href="/address_remove.php?ida=<?php echo $data[$key]->id ."&id=".$id ?> "

                            <span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>Remove</a>
                            </a>
                     
                        </li>
                         
                        </a>
                  
                      
                    </ul>
                    <?php
                        }                          
                      }
                        ?>
                </div>
                
            </div>

        </div>
        <nav class="navbar navbar-light ">
                    <a href="/clients_add_address.php?id=<?php echo $id;?>">New address</a>
                </nav>
    </div>
</div>