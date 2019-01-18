<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 17:16
 */

namespace DesignPatterns\Creational\Pool;


class StringReverseWorker
{
    private $createAt;

    /**
     * StringReverseWorker constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->createAt = new \DateTime();
    }

    /**
     * @param string $text
     * @return string
     */
    public function run(string $text)
    {
        return strrev($text);
    }


}