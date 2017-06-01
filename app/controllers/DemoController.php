<?php
/**
 * This file is part of the phspring package.
 */
namespace app\controllers;

use app\model\service\IndexService;
use app\model\service\IocService;
use phspring\context\Ac;

/**
 * Class DemoController
 * @package app\controller
 */
class DemoController extends \phspring\mvc\Controller
{
    public function actionIndex()
    {
        $uid = 1;

        /* @var $service IndexService */
        $service = Ac::getBean(IndexService::class, $this->context);
        $data  = $service->getByUid($uid);

        $this->outputJson($data);
    }

    public function actionIoc()
    {
        /* @var $service IocService */
        $service = Ac::getBean(IocService::class, $this->context);
        $data  = $service->get();

        $this->outputJson($data);
    }
}
