<?php

namespace fantomx1Helpers;

/**
 * Helpers manipulating arrays and alleviates standard manual boilerplate maneuvers
 * Class Helpers
 * @package fantomx1Helpers
 */
class Helpers
{

    /**
     * indexes array by its specific recurring element value as a key
     * @link http://php.net/manual/en/function.array-walk.php#119777
     * @param $array
     * @param $element
     * @return array
     */
    public static function indexArrayByElement($array, $element)
    {
        $arrayReindexed = [];
        array_walk(
            $array,
            function ($item) use (&$arrayReindexed, $element) {
                $arrayReindexed[$item[$element]] = $item;
            }
        );
        return $arrayReindexed;
    }


    /**
     * @link http://php.net/manual/en/function.array-merge-recursive.php#118727
     * @param array $array1
     * @param array $array2
     * @return array
     */
    function array_merge_recursive_distinct ( array &$array1, array &$array2 )
    {
        static $level=0;
        $merged = [];
        if (!empty($array2["mergeWithParent"]) || $level == 0) {
            $merged = $array1;
        }

        foreach ( $array2 as $key => &$value )
        {
            if (is_numeric($key)) {
                $merged [] = $value;
            } else {
                $merged[$key] = $value;
            }

            if ( is_array ( $value ) && isset ( $array1 [$key] ) && is_array ( $array1 [$key] )
            ) {
                $level++;
                $merged [$key] = array_merge_recursive_distinct($array1 [$key], $value);
                $level--;
            }
        }
        unset($merged["mergeWithParent"]);
        return $merged;
    }


    /**
     * @param array $array array to sort
     * @param mixed $nThIndex by which index of multidimensional array at second level
     * @param boolean $ascending
     * @return array
     */
    public static function sortMultiDimArrayByNthElement($array, $nThIndex, $ascending = true)
    {
        usort(
            $array,
            function ($a, $b) use ($nThIndex) {
                if ($a[$nThIndex] == $b[$nThIndex]) {
                    return 0;
                }
                return ($a[$nThIndex] < $b[$nThIndex]) ? -1 : 1;
            }
        );
        if (false === $ascending) {
            // do descending
            return array_reverse($array);
        }
        return $array;
    }

}




