<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 10:52
 */

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * 日志工厂
 * Interface LoggerFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface LoggerFactory
{
    public function createLogger():Logger;
}