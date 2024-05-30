<?php

class Config {

    private $login = 'login';
    private $password = 'pass';

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }
}
