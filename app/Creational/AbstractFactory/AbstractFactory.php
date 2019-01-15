<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-15 16:07
 */
namespace DesignPatterns\Creational\AbstractFactory;

abstract class  AbstractFactory {
    abstract public function createText(string $content): Text;
}