<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 10:47
 */

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * 抽象日志类
 * Interface Logger
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface Logger
{
    public function log(string $message);
}