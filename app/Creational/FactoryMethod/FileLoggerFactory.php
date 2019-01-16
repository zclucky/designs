<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 10:54
 */

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * 文件日志工厂
 * Class FileLoggerFactory
 * @package DesignPatterns\Creational\FactoryMethod
 */
class FileLoggerFactory implements LoggerFactory
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }

}