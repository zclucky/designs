<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-15 16:22
 */
namespace DesignPatterns\Creational\AbstractFactory;

class HtmlFactory extends AbstractFactory{
    public function createText(string $content): Text
    {
        return new HtmlText($content);
    }
}