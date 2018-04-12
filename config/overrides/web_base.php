<?php

return [
    'id' => 'crmapp',
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*']
        ],
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['127.0.0.1']
        ],
        'api' =>
            [
                'class' => 'app\api\ApiModule'
            ]
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => '22'
        ],
        'user' => [
            'identityClass' => 'app\models\user\UserRecord'
        ],
        'response' => [
            'formatters' => [
                'yaml' => [
                    'class' => 'app\utilities\YamlResponseFormatter'
                ]
            ]
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
        ],
        'view' => [
            'renderers' => [
                'md' => [
                    'class' => 'app\utilities\MarkdownRenderer'
                ]
            ],
            'theme' => [
                'class' => yii\base\Theme::class,
                'basePath' => '@app/themes/snowy'
            ],
        ]
    ],
    'extensions' => array_merge(
        require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
        [
            'malicious\app-info' => [
                'name' => 'Application Info',
                'version' => '1.0.1',
                'alias' => ['@malicious' => __DIR__ . '/../../yii2-malicious'],
                'bootstrap' => '\malicious\Bootstrap',
            ]
        ])
];