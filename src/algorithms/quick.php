<?php

namespace Sevenz\Sorter\algorithms;

class quick
{
    public function __construct() {}

    /**
     * @param $list
     * @param $sortKey
     * @return mixed
     */
    public function sort($list, $sortKey)
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

        return array_merge($this->sort($less, $sortKey), [$pivot_data], $this->sort($greater, $sortKey));

    }
}