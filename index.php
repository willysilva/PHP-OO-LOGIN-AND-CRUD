<?php
	require_once 'core/init.php';
	if (Session::exists('home')) {
		echo Session::flash('home');
	}


	$user = new User();
	if ($user->isLoggedIn()) {
		header('Location: clients_list.php');
?>
	
<?php
	} else {
		header('Location: login.php');
	}
?>