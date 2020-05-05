<?php
	require_once 'core/init.php';
	if (Input::exists()) {
		if (Token::check(Input::get('token'))) {
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'name'	=> array(
					'fieldName'	=> 'name',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 20
				),
				'cpf' => array(
					'fieldname'=>'cpf',
					'required' => true,
					'min' =>5,
					'max' =>11
				),
				'rg' => array(
					'fieldname'=>'rg',
					'required' => true,
					'min' =>5,
					'max' =>10
				),
				'birth' => array(
					'fieldname'=>'birth',
					'required' => true
				)

				
			));

			if ($validation->passed()) {
				$client = new client();
				$salt = Hash::salt(32);
				try {
					$client->create(array(
						'name' 	=> Input::get('name'),
						'cpf' =>	Input::get('cpf'),
						'rg' =>	Input::get('rg'),
						'birth' =>	Input::get('birth')
					));
					Session::flash('home','Client as been registered');
					Redirect::to('index.php');
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
	include ('views/clients/register.view.php');
?>
