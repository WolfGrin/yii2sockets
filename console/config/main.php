<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
          ],
    ],
    'components' => [
        'mailer' => [
            '__class' => yii\swiftmailer\Mailer::class,
            'transport' => [
                '__class' => Swift_SmtpTransport::class,
                'host' => 'smartmail.club',
                'username' => 'dima-test@sofona.info',
                'password' => 'bTVK3_6V7f0',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],
//            'mail' => [
//                'class'            => 'zyx\phpmailer\Mailer',
//                'viewPath'         => '@common/mail',
//                'useFileTransport' => false,
//                'config'           => [
//                    'mailer'     => 'smtp',
//                    'host'       => 'smartmail.club',
//                    'port'       => '465',
//                    'smtpsecure' => 'ssl',
//                    'smtpauth'   => true,
//                    'username'   => 'dima-test@sofona.info',
//                    'password'   => 'bTVK3_6V7f0',
//                ],
//            ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $params,
];
