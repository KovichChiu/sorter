<?php

namespace Sevenz\Sorter;

use Sevenz\Sorter\algorithms\quick;

class Sorter
{
    /**
     * quick sort
     * @param array|string $unSortData
     * @param string $action
     * @return mixed
     */
    public static function quick($unSortData, string $action)
    {
        return (new quick())->sort($unSortData, $action);
    }
}