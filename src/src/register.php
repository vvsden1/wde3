<?php

if (is_user_logged_in()) {
    redirect_to('index.php');
}

$errors = [];
$inputs = [];

if (is_post_request()) {
    $fields = [
        'username' => 'string| required | alphanumeric | between: 3, 25 | unique: users, username',
        'email' => 'email| required | email | unique: users, email',
        'password' => 'string| required | secure',
        'password2' => 'string| required | same: password',
        'agree' => 'string| required'
    ];

    // custom messages
    $messages = [
        'password2' => [
            'required' => 'Please enter the password again',
            'same' => 'The password does not match'
        ],
        'agree' => [
            'required' => 'You need to agree to the term of services to register'
        ]
    ];

    [$inputs, $errors] = filter($_POST, $fields, $messages);


    $activation_code = generate_activation_code();

    if (register_user($inputs['email'], $inputs['username'], $inputs['password'], $activation_code)) {

        // send the activation email
        send_activation_email($inputs['email'], $activation_code);

        redirect_with_message(
            'login.php',
            'Please check your email to activate your account before signing in'
        );
    }

} else if (is_get_request()) {
    [$errors, $inputs] = session_flash('errors', 'inputs');
}