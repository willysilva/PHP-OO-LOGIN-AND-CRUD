<?php
	require_once 'core/init.php';
	$id=$_GET['id'];
	$client = new Client();		
    $client = $client->get(); 
    $data = $client;  
     
	
	if (Input::exists()) {
		if (Token::check(Input::get('token'))) {
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'name'	=> array(
					'fieldName'	=> 'Your Name',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 50
				),
				'cpf'	=> array(
					'fieldName'	=> 'cpf',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 14
				),
				'rg'	=> array(
					'fieldName'	=> 'rg',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 10
				),
				'birth'	=> array(
					'fieldName'	=> 'birth',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 50
				)
			));

			if ($validation->passed()) {
				$client = new client();
				try {
					$client->update(array(
						'name' => Input::get('name'),
						'cpf' => Input::get('cpf'),
						'rg' => Input::get('rg'),
						'birth' => Input::get('birth')
					,
					), $id
				);
					Session::flash('home','Your details have been updated');
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

	include ('views/clients/update.view.php');
?>

