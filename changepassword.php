<?php
	require_once 'core/init.php';
	$user = new User();

	if (!$user->isLoggedIn()) {
		Redirect::to('index.php');
	}

	if (Input::exists()) {
		if (Token::check(Input::get('token'))) {
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'currentPassword' => array(
					'fieldName'	=> 'Existing Password',
					'required' 	=> true,
					'min'		=> 6,
					'max'		=> 50
				),
				'newPassword' => array(
					'fieldName'	=> 'New Password',
					'required' 	=> true,
					'min'		=> 6,
					'max'		=> 50
				),
				'newPasswordAgain' => array(
					'fieldName'	=> 'New Password Again',
					'required' 	=> true,
					'min'		=> 6,
					'max'		=> 50,
					'matches'	=> 'newPassword'
				)
			));

			if ($validation->passed()) {
				$user = new User();
				if (Hash::make(Input::get('currentPassword'), $user->data()->salt) !== $user->data()->password) {
					echo 'Your current password is incorrect';
				} else {
					$salt = Hash::salt(32);
					$user->update(array(
						'password' 	=> Hash::make(Input::get('newPassword'), $salt),
						'salt' 		=> $salt
					));
					Session::flash('home','Your details have been updated');
					Redirect::to('index.php');
				}
			} else {
				foreach ($validation->errors() as $error) {
					echo $error, '<br>';
				}
			}
		}
	}
	include ('views/auth/changepassword.view.php');
?>
