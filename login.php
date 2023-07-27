<?php
// core/init.php
require_once 'core/init.php';

// Check if the form is submitted
if (Input::exists()) {
    if (Token::check(Input::get('token'))) {

        // Validation rules for the form fields
        $validation_rules = array(
            'username' => array(
                'fieldName' => 'Username',
                'required' => true
            ),
            'password' => array(
                'fieldName' => 'Password',
                'required' => true
            )
        );

        // Validate user input
        $validate = new Validate();
        $validation = $validate->check($_POST, $validation_rules);

        if ($validation->passed()) {
            // Validation passed, proceed with login attempt
            $user = new User();

            // Determine if the "remember me" checkbox is checked
            $remember = Input::get('remember') === 'on'; // Assuming the checkbox value is 'on' when checked

            // Attempt to log in the user
            $login = $user->login(Input::get('username'), Input::get('password'), $remember);

            if ($login) {
                // Login successful, redirect to the index page
                Redirect::to('index.php');
            } else {
                // Login failed
                $error_message = "Sorry, we could not log you in.";
            }
        } else {
            // Validation failed, display the errors
            $errors = $validation->errors();
        }
    }
}

// Include the login view template
include('views/auth/login.view.php');
?>
