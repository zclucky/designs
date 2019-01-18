<?php
/**
 * User: zc
 * Email: myxxqy@gmail.com
 * DateTime: 2019-01-16 17:14
 */

namespace DesignPatterns\Creational\Pool;

class WorkerPool implements \Countable
{
    private $occupiedWorkers = [];

    private $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count()
    {
        return count($this->freeWorkers) + count($this->occupiedWorkers);
    }

}