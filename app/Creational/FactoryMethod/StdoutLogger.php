<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 10:48
 */

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * 打印日志类
 * Class StdoutLogger
 * @package DesignPatterns\Creational\FactoryMethod
 */
class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}