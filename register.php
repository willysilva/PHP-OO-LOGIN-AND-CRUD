<?php
	require_once 'core/init.php';

	if (Input::exists()) {
		if (Token::check(Input::get('token'))) {
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'username'	=> array(
					'fieldName'	=> 'Username',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 20,
					'unique'	=> 'users'
				),
				'password'	=> array(
					'fieldName'	=> 'Password',
					'required' 	=> true,
					'min'		=> 6
				),
				'passwordAgain' => array(
					'fieldName'	=> 'Password Repeat',
					'required' 	=> true,
					'min'		=> 6,
					'matches'	=> 'password'
				),
				'name'	=> array(
					'fieldName'	=> 'Your Name',
					'required' 	=> true,
					'min'		=> 2,
					'max'		=> 50
				)
			));

			if ($validation->passed()) {
				$user = new User();
				$salt = Hash::salt(32);
				try {
					$user->create(array(
						'username' 	=> Input::get('username'),
						'password' 	=> Hash::make(Input::get('password'),$salt),
						'salt' 		=> $salt,
						'name' 		=> Input::get('name'),
						'joined' 	=> date('Y-m-d H:i:s'),
						'userGroup'	=> 1
					));
					Session::flash('home','You have been registered and can now log in');
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
	include ('views/auth/register.view.php');
?>
