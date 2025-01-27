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
        // 防呆機制
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

    /**
     * Kernel of bubble Sort
     * @param $list
     * @param $sortKey
     * @param $order 排序方式(ASC|DESC)
     * @return mixed
     * @throws Exception 如果排序方式無效
     */
    public static function bubble($list, $sortKey, $order = "asc")
    {
        // 轉小寫然後確認是否為 asc|desc
        $order = strtolower($order);
        if (!in_array($order, ["asc", "desc"])) {
            throw new Exception("Order ERROR!");
        }

        $passCount = count($list) - 1; // 執行次數。Bubble sort 若數列為 N 組，則執行次數最多為 (N-1) 次
        $isAsc = ($order == "asc");

        for ($i = 0; $i < $passCount; $i++) {
            $swapped = false; // 記錄接下來是否進行交換

            for ($j = 0; $j < $passCount - $i; $j++) {
                if (
                    $isAsc && $list[$j][$sortKey] > $list[$j + 1][$sortKey] ||
                    !$isAsc && $list[$j][$sortKey] < $list[$j + 1][$sortKey]
                ) {
                    $temp = $list[$j];
                    $list[$j] = $list[$j + 1];
                    $list[$j + 1] = $temp;

                    $swapped = true;
                }
            }

            // 本輪沒有進行交換，這是已經排好了的信號
            if (!$swapped) {
                break;
            }
        }

        return $list;
    }
}