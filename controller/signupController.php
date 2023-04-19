<?php

if (!isset($_SESSION)) {
    session_start();
}
require_once('model/user.php');
require_once('controller/signupController.php');
require_once('controller/loginController.php');




/****************************
 * ----- LOAD SIGNUP PAGE -----
 ****************************/

function signupPage()
{
    require('view/signupView.php');

    $sub_action = $_GET['sub_action'] ?? '';
    switch ($sub_action) {
        case 'signup':
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            signup($email, $username, $password );
            break;
    }
}

/***************************
 * ----- SIGNUP FUNCTION -----
***************************/
function signup($email, $username, $password )
{

    $user_data_signup = User::insertUser($email, $username, $password);
    $message = ' Congratulation your account is validated ! ';

    $email = $email;
    $password = $password;
    $user_data = User::getUserByCredentials($email, $password);

    if ($user_data == null) {
        $error_msg = "Email ou mot de passe incorrect";
        require('view/loginView.php');
        return;
    }

    // Set session
    $_SESSION['user_id'] = $user_data['id'];
    $user_id = $_SESSION['user_id'] ?? false;
     header('location: index.php ');

};

