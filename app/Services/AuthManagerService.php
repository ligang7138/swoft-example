<?php

namespace App\Services;

use App\Middlewares\AccountAuthMiddleware;
use Swoft\Auth\AuthManager;
use Swoft\Auth\Mapping\AuthManagerInterface;
use Swoft\Auth\Bean\AuthSession;
use Swoft\Bean\Annotation\Bean;
use Swoft\Redis\Redis;

/**
 * @Bean()
 */
class AuthManagerService extends AuthManager implements AuthManagerInterface
{
    /**
     * @var string
     */
    protected $cacheClass = Redis::class;

    /**
     * @var bool 开启缓存
     */
    protected $cacheEnable = true;

    public function adminBasicLogin(string $identity, string $credential) : AuthSession
    {
        return $this->login(AccountAuthMiddleware::class, [
            'identity' => $identity,
            'credential' => $credential
        ]);
    }
}