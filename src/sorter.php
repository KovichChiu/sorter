<?php

namespace Sevenz\Sorter;

use Sevenz\Sorter\algorithms\quick;

class sorter
{
    /**
     * quick sort
     * @param array|string $unSortData
     * @param string $action
     * @return mixed
     */
    public function quick($unSortData, string $action)
    {
        return (new quick())->sort($unSortData, $action);
    }
}