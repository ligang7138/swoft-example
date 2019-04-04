<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
use Swoft\Auth\Mapping\AuthManagerInterface;

return [
    'serverDispatcher' => [
        'middlewares' => [
            \Swoft\View\Middleware\ViewMiddleware::class,
            \Swoft\Auth\Middleware\AuthMiddleware::class,
            \App\Middlewares\JwtAuthMiddleware::class,
//            \Swoft\Auth\Middleware\AuthMiddleware::class,
            // \Swoft\Devtool\Middleware\DevToolMiddleware::class,
            // \Swoft\Session\Middleware\SessionMiddleware::class,
        ],
        // token签发及合法性验证服务
        AuthManagerInterface::class => [
            'class' => \App\Services\AuthManagerService::class
        ],
    ],
    'httpRouter'       => [
        'ignoreLastSlash'  => true,
        'tmpCacheNumber' => 1000,
        'matchAll'       => '',
    ],
    'requestParser'    => [
        'parsers' => [

        ],
    ],
    'view'             => [
        'viewsPath' => '@resources/views/',
    ],
    'cache'            => [
        'driver' => 'redis',
    ],
    'demoRedis' => [
        'class' => \Swoft\Redis\Redis::class,
        'poolName' => 'demoRedis'
    ],
    AuthManagerInterface::class => [
        'class'=>App\Middlewares\AccountAuthMiddleware::class
    ],
    'providerSelector' => [
        'class' => \Swoft\Sg\ProviderSelector::class,
        'provider' => 'consul',
        'providers' => [
            'consul' => \Swoft\Sg\Provider\ConsulProvider::class
        ]
    ],
];
