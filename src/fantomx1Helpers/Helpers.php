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

}




