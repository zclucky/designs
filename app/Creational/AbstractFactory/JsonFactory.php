<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-15 16:24
 */
namespace DesignPatterns\Creational\AbstractFactory;

class JsonFactory extends AbstractFactory{
    public function createText(string $content): Text
    {
        return new JsonText($content);
    }
}