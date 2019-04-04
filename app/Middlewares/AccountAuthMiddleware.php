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

use App\Models\Dao\AdminUsersDao;
use App\Models\Dao\UserDao;
use App\Models\Entity\AdminUsers;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Swoft\Auth\Mapping\AccountTypeInterface;
use Swoft\Auth\Bean\AuthResult;
use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\BeanFactory;
use Swoft\Db\Exception\DbException;
use Swoft\Http\Message\Middleware\MiddlewareInterface;

/**
 * @Bean()
 */
class AccountAuthMiddleware implements MiddlewareInterface, AccountTypeInterface
{
    /**
     * @Inject()
     * @var AdminUsersDao
     */
    public $dao;

    /**
     * @Inject()
     * @var UserDao
     */
    private $userDao;

    const ROLE = 'role';

    /**
     * @param array $data
     * @return AuthResult
     */
    public function login(array $data) : AuthResult
    {
        $identity = $data['identity'];
        $credential = $data['credential'];

        /** @var AdminUsersDao $adminUsersDao */
        $adminUsersDao = BeanFactory::getBean(AdminUsersDao::class);
//        print_r($adminUsersDao);
//        print_r($this->dao);
//        print_r($this->userDao);
        $user = $adminUsersDao->findOneByUsername($identity);
        $result = new AuthResult();
//        print_r($user);

        if ($user instanceof AdminUsers && $user->verify($credential)) {
//            $result->setExtendedData([self::ROLE => $user->getIsAdministrator()]);
            $result->setIdentity($user->getAId());
        }

        return $result;
    }

    /**
     * @param string $identity
     * @return bool
     */
    public function authenticate(string $identity) : bool
    {
        return $this->dao::issetUserById($identity);
    }

    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Server\RequestHandlerInterface $handler
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // TODO: Implement process() method.
    }
}
