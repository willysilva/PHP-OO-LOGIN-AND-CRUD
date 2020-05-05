<?php
	require_once 'core/init.php';
    $id = $_GET['id'];
    $ida = $_GET['ida'];
	$address = new address();		
    $address = $address->get(); 
    //var_dump($address);
    $data = $address;  
     
	
	if (Input::exists()) {
		if (Token::check(Input::get('token'))) {
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'cep'	=> array(
					'fieldName'	=> 'cep',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 50
                ),
                'number'	=> array(
					'fieldName'	=> 'number',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 4
                ),
                'street'	=> array(
					'fieldName'	=> 'street',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 150
                ),
                'neighborhood'	=> array(
					'fieldName'	=> 'neighborhood',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 100
                ),
                'city'	=> array(
					'fieldName'	=> 'city',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 100
                ),
                'state'	=> array(
					'fieldName'	=> 'state',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 2
                )

			));

			if ($validation->passed()) {
				$address= new address();
				try {
					$address->update(array(
                        'cep' => Input::get('cep'),
                        'number' => Input::get('number'),
                        'street' => Input::get('street'),
                        'neighborhood' => Input::get('neighborhood'),
                        'city' => Input::get('city'),
                        'state' => Input::get('state'),
                        
					), $id
				);
					Session::flash('home','Your details have been updated');
					Redirect::to('/clients_list_address.php?id='.$ida);
				} catch (Exception $e) {
					die($e->getMessage());
				}
			} else {
				foreach ($validation->errors() as $error) {
					echo $error, '<br>';
				}
			}
		}
	}

	include ('views/clients/address_update.view.php');
?>

