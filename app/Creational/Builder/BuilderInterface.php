<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 08:54
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

interface BuilderInterface
{
    /**
     * 创建车
     * @return mixed
     */
    public function createVehicle();

    /**
     * 添加轮子
     * @return mixed
     */
    public function addWheel();

    /**
     * 添加发动机
     * @return mixed
     */
    public function addEngine();

    /**
     * 添加车门
     * @return mixed
     */
    public function addDoors();

    /**
     * 获取车
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}