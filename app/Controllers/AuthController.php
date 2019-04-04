<?php

namespace App\Controllers;
use App\Middlewares\AccountAuthMiddleware;
use App\Services\AuthManagerService;
use Swoft\App;
use Swoft\Auth\Bean\AuthSession;
use Swoft\Auth\Constants\AuthConstants;
use Swoft\Http\Message\Server\Request;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\Auth\Mapping\AuthManagerInterface;

/**
 * @Controller(prefix="/oauth")
 */
class AuthController
{
    /**
     * @RequestMapping(route="token", method={RequestMethod::POST})
     * @param Request $request
     * @return array
     */
    public function oauth(Request $request) : array
    {
        $identity = $request->getAttribute(AuthConstants::BASIC_USER_NAME) ?? '';
        $credential = $request->getAttribute(AuthConstants::BASIC_PASSWORD) ?? '';
        if (!$identity || !$credential) {
            return [
                'code' => 400,
                'message' => 'Identity and Credential are required.'
            ];
        }

        /** @var AuthManagerService $manager */
//        $manager = App::getBean(AuthManagerInterface::class);
        $manager = App::getBean(AuthManagerService::class);

//        $session = $manager->login(['identity' => $identity,'credential' => $credential]);
        /** @var AuthSession $session */
        $session = $manager->adminBasicLogin($identity, $credential);
        $data = [
            'token' => $session->getToken(),
            'expire' => $session->getExpirationTime()
        ];
        return $data;
    }
}
