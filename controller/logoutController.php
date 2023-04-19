<?php

session_start();

require_once('common.php');
require_once('model/user.php');
require_once('controller/friendController.php');

/****************************
 * ----- LOAD LOGIN PAGE -----
 ****************************/

// function loginPage()
// {
//     require('view/loginView.php');
//     $user = new stdClass();
//     $user->id = $_SESSION['user_id'] ?? false;
//     //$user->id = $_SESSION['user_id'] ?: false;
// }

/***************************
 * ----- LOGIN FUNCTION -----
 ***************************/

// function logOut()
// {
// echo "Test function logOut is alive";

//     // $email = $post['email'];
//     // $password = $post['password'];
//     // $user_data = User::getUserByCredentials($email, $password);

//     // if ($user_data == null) {
//     //     $error_msg = "Email ou mot de passe incorrect";
//     //     require('view/loginView.php');
//     //     return;
//     // }

//     // // Set session
//     // $_SESSION['user_id'] = $user_data['id'];
//     // $user_id = $_SESSION['user_id'] ?? false;
//     header('location: '.$url_src.'/index.php ');
// }

/****************************
 * ----- LOGOUT FUNCTION -----
 ****************************/

// function logout()
// {
//     $_SESSION = array();
//     session_destroy();

//     require_once('common.php');
//     header('location: '.$url_src.'/index.php');
// }
