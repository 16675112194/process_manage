<?php

namespace ProcessManage\Command\Options;

use ProcessManage\Command\Action\Action;

/**
 * d 参数的动作
 * Class D
 * @package ProcessManage\Command\Options
 */
class D extends Options
{

    /**
     * 获取命令
     * @return string
     */
    public static function getCommandStr()
    {
        return 'd';
    }

    /**
     * 获取命令描述
     * @return string
     */
    public static function getCommandDescription()
    {
        return 'background running process';
    }

    /**
     * 影响action的行为
     *
     * 后台运行程序(守护进程运行)
     *
     * @param Action $action
     * @return mixed
     */
    public function impactAction(Action $action)
    {
        $action->setParam('runInBackground', true);
    }

}