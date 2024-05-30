<?php

class Auth {

    function login() {
        if ($_SESSION['logged'] == true) {
            $_SESSION['message'] = '';
            $_SESSION['alert'] = '';
            return header('Location: /account');
        }

        $login_input = $_POST['login'];
        $pass_input = $_POST['password'];

        $config = new Config();

        if (!empty($login_input) && !empty($pass_input)) {
            if ($login_input == $config->getLogin() && $pass_input == $config->getPassword()) {
                $_SESSION['logged'] = true;
                $_SESSION['message'] = 'Successfully logged in';
                $_SESSION['alert'] = 'success';
                header('Location: /account');
            } else {
                $_SESSION['message'] = 'Login or password are incorrect';
                $_SESSION['alert'] = 'danger';
                header('Location: /');
            }

        } else {
            $_SESSION['message'] = 'Login or Password are empty';
            $_SESSION['alert'] = 'danger';
            header('Location: /');
        }
    }

    function logout()
    {
        $_SESSION['logged'] = '';
        header('Location: /');
    }

    function isLogged() {
        if (isset($_SESSION['logged']) && $_SESSION['logged']) {
            return true;
        }

        $_SESSION['message'] = 'You are not logged in';
        $_SESSION['alert'] = 'danger';
        header('Location: /');
    }
}

