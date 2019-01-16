<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 10:53
 */

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * 打印日志工厂
 * Class StdoutLoggerFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }

}