<?php
/**
 * This file is part of the phspring package.
 */
namespace app\model\service;

use app\model\dao\UserDao;
use phspring\context\Ac;

/**
 * Class IocService
 * @package app\model\service
 */
class IocService extends \phspring\mvc\Model
{
    public $userDao;

    /**
     * IocService constructor.
     * @param UserDao $userDao
     */
    public function __construct(UserDao $userDao)
    {
        $this->userDao = $userDao;
    }

    /**
     * @param int $uid
     */
    public function getByUid($uid)
    {
        $user = $this->userDao->getByUid($uid);

        return $user;
    }
}
