<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-15 16:18
 */
namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}