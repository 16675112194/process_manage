<?php

namespace ProcessManage\Command;

/**
 * 命令最小粒度的特性
 * Trait CommandTrait
 * @package ProcessManage\Command
 */
trait CommandTrait
{

    /**
     * 命令
     * @var string
     */
    protected $commandStr = '';

    /**
     * 命令描述
     * @var string
     */
    protected $description = '';

    /**
     * 初始化命令
     * CommandTrait constructor.
     */
    public function __construct()
    {
        $this->initCommand();
    }

    /**
     * 初始化命令属性
     * @return mixed
     */
    protected function initCommand()
    {
        $this->commandStr = static::getCommandStr();
        $this->description = static::getCommandDescription();
    }

    /**
     * 获取命令
     * @return string
     */
    abstract public static function getCommandStr();

    /**
     * 获取命令描述
     * @return string
     */
    abstract public static function getCommandDescription();

}