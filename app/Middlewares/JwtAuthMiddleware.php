<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Middlewares;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Swoft\App;
use Swoft\Auth\Mapping\AuthorizationParserInterface;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;
use Swoft\Http\Message\Middleware\MiddlewareInterface;

/**
 * @Bean()
 * @uses      AuthMiddleware
 */
class JwtAuthMiddleware implements MiddlewareInterface
{
    /**
     * @Inject()
     * @var \Swoft\Redis\Redis
     */
    private $redis;

    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \InvalidArgumentException
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        /*$parser = App::getBean(AuthorizationParserInterface::class);
        if (!$parser instanceof AuthorizationParserInterface) {
            throw new AuthException(ErrorCode::POST_DATA_NOT_PROVIDED, 'AuthorizationParser should implement Swoft\Auth\Mapping\AuthorizationParserInterface');
        }
        //todo 优化下获取
        $data=json_decode($request->raw(), true);
//        print_r($request->raw());
        $token=explode('=', explode('?', $data['tcUrl'])[1])[1];
        if ($token) {
            //必须在头信息里面携带
            $request = $request->withAddedHeader(AuthConstants::HEADER_KEY, 'Bearer ' . $token);
        }*/
        $response = $handler->handle($request);
        return $response;
    }
}
