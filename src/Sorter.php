<?php

namespace Sevenz;

class Sorter
{
    /**
     * Kernel of Quick Sort
     * @param $list
     * @param $sortKey
     * @return mixed
     */
    public static function quick($list, $sortKey)
    {
        if(count($list) < 2) {
            return $list;
        }

        $pivotKey = array_rand($list);
        $pivot = $list[$pivotKey][$sortKey];
        $pivotData = $list[$pivotKey];
        unset($list[$pivotKey]);

        $less = array();
        $greater = array();

        foreach($list as $element) {
            if($element[$sortKey] <= $pivot) {
                $less[] = $element;
            } else {
                $greater[] = $element;
            }
        }

        return array_merge(Sorter::quick($less, $sortKey), [$pivotData], Sorter::quick($greater, $sortKey));
    }
}