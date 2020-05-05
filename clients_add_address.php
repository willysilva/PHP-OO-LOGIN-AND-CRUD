<?php
	require_once 'core/init.php';
	$id = $_GET['id'];
	if (Input::exists()) {
		if (Token::check(Input::get('token'))) {
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'id_client' => array(
					'fieldname'=>'id_client',
					'required' => true,
					'min' =>1,
					'max' =>11
				),
				'cep' => array(
					'fieldname'=>'cep',
					'required' => true,
					'min' =>5,
					'max' =>68
				),
				'number' => array(
					'fieldname'=>'number',
					'required' => true,
					'min' =>1,
					'max' =>11
				),
				'street' => array(
					'fieldname'=>'street',
					'required' => true,
					'min' =>1,
					'max' =>100
				),
				'neighborhood' => array(
					'fieldname'=>'neighborhood',
					'required' => true,
					'min' =>1,
					'max' =>100
				),
				'city' => array(
					'fieldname'=>'city',
					'required' => true,
					'min' =>1,
					'max' =>100
				),
				'uf' => array(
					'fieldname'=>'uf',
					'required' => true,
					'min' =>1,
					'max' =>100
				),
				
			
				
			));

			if ($validation->passed()) {
				$address = new address();
				try {
					$address->create(array(
						'id_client' 	=> Input::get('id_client'),
						'cep' =>	Input::get('cep'),
						'number' =>	Input::get('number'),
						'neighborhood' =>	Input::get('neighborhood'),
						'street' =>	Input::get('street'),
						'city' =>	Input::get('city'),
						'state' =>	Input::get('uf'),
					
					));
					Session::flash('home','Client as been registered');
					Redirect::to('/clients_list_address.php?id='.$id);
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
	include ('views/ajax/ajax_address.php');
?>
