<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 08:41
 */

namespace DesignPatterns\Creational\Builder\Parts;

/**
 * 抽象的 车
 * Class Vehicle
 * @package DesignPatterns\Creational\Builder\Parts
 */
abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart(string $key, object $value)
    {
        $this->data[$key] = $value;
    }
}
