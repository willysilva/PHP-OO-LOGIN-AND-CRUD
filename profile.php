<?php

	require_once 'core/init.php';
	if (!$username = Input::get('user')) {
		Redirect::to('index.php');
	} else {
		$user = new User($username);
		if (!$user->exists()) {
			Redirect::to(404);
		} else {
			$data = $user->data();
		}
?>
	
<?php
	include ('views/profile.view.php');
	}
?>