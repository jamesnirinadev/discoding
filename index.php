<?php

if (!isset($_SESSION)) {
    session_start();
}
// session_destroy();
date_default_timezone_set('Europe/Paris');

// require_once('common.php');
require_once('controller/conversationController.php');
require_once('controller/friendController.php');
require_once('controller/loginController.php');
require_once('controller/signupController.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'login':

            if (!empty($_POST)) {
                login($_POST);
            } else {
                loginPage();
            }
            break;

        case 'logout':
            logout();
            break;

        case 'conversation':
            conversationPage();
            break;

        case 'friend':
            friendPage();
            break;

        case 'signup':
            signupPage();
            break;
                /* test
                echo 'action login OK';
                */
    }
} else {
    $user_id = $_SESSION['user_id'] ?? false;

    if ($user_id) {
        // echo "test back from other pages";
        friendPage();
    } else {
        loginPage();
    }
}
