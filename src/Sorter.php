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

        $pivot_key = array_rand($list);
        $pivot = $list[$pivot_key][$sortKey];
        $pivot_data = $list[$pivot_key];
        unset($list[$pivot_key]);

        $less = array();
        $greater = array();

        foreach($list as $element) {
            if($element[$sortKey] <= $pivot) {
                $less[] = $element;
            } else {
                $greater[] = $element;
            }
        }

        return array_merge(Sorter::quick($less, $sortKey), [$pivot_data], Sorter::quick($greater, $sortKey));
    }
}