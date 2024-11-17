<?php

class AuthHelper {

    public static function login($user) {
        //inicia una sesion
        session_start();
        //guardo los datos del usuario
        $username = $_SESSION['user'] = $user->usuario; //username : Pepito
        $logged = $_SESSION['logged'] = true;            //sesion: true
        $rol = $_SESSION['rol'] = $user->rol;            //rol: admin

        return $username . $logged . $rol;
       
    }

    public static function logout() {
        session_destroy();
        header('Location: ' . BASE_URL . 'home');
    }

    public static function verify() {
        session_start();
        //si no hay una session seteada
        if (!isset($_SESSION['user'])) {
            //envio al home
            header('Location: ' . BASE_URL . 'home');
            die();
        }
    }
}

