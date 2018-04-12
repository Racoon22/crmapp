<?php
return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=examplDB',
            'username' => 'root',
            'password' => 'password'
        ]
    ],
    'mail' => ['class' => 'yii\swiftmailer\Mailer',
        'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'login',
            'password' => 'password',
            'port' => '587',
            'encryption' => 'tls',
        ],
        'useFileTransport' => false,
    ]
];


