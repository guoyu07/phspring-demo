<?php
/**
 * This file is part of the phspring package.
 */
namespace app\model\service;

use app\model\dao\UserDao;
use phspring\context\Ac;

/**
 * Class IndexService
 * @package app\model\service
 */
class IndexService extends \phspring\mvc\Model
{
    /**
     * @param int $uid
     */
    public function getByUid($uid)
    {
        /* @var $dao UserDao */
        $dao = Ac::getBean(UserDao::class, $this->context);
        $user = $dao->getByUid($uid);

        return $user;
    }
}
