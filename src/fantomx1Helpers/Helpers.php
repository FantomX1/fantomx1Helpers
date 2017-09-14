<?php

namespace fantomx1Helpers;



class Helpers 
{


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




