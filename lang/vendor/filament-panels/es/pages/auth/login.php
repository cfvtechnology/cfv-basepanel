<?php

return [

    'title' => 'Login',

    'heading' => 'Iniciar Sesión',

    'actions' => [

        'register' => [
            'before' => 'O',
            'label' => 'Cear una cuenta',
        ],

        'request_password_reset' => [
            'label' => '¿Ha olvidado su contraseña?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Correo electrónico',
        ],

        'password' => [
            'label' => 'Contraseña',
        ],

        'remember' => [
            'label' => 'Recordarme',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Entrar',
            ],

        ],

    ],

    'messages' => [

        'failed' => 'Estas credenciales no coinciden con nuestros registros.',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Demasiados intentos. Intente de nuevo en :seconds segundos.',
            'body' => 'Intente de nuevo en :seconds segundos.',
        ],

    ],

];
