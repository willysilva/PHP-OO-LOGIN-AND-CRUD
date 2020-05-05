<?php
    include ('templates/header.php');
	require_once 'core/init.php';

		$client = new Client();		
            $client = $client->get(); 
            $data = $client;  
          
	include ('views/clients/home.view.php');
	
?>