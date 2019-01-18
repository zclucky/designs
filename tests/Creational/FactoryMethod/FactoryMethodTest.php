<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 10:57
 */

namespace DesignPatterns\Tests\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\FileLogger;
use DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use DesignPatterns\Creational\FactoryMethod\StdoutLogger;
use DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;


class FactoryMethodTest extends TestCase
{
    // 打印日志
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    // 文件打印
    public function testCanCreateFileLogging()
    {
        $filePath = __DIR__.'/../../../runtime/log/log.txt';
        $loggerFactory = new FileLoggerFactory($filePath);
        $logger = $loggerFactory->createLogger();
        $logger->log('this is a test text');
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}