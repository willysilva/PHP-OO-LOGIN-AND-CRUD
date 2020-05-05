<?php
    include ('templates/header.php');
	require_once 'core/init.php';

		$address = new address();		
            $address = $address->get(); 
            $data = $address;        
            include ('views/clients/list.view.php');
	
?>