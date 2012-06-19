<?php

/**
 * Sample number class
 */
class Number {

    /**
     * Adds ordinals to number values
     *
     * @access public
     * @param int $num
     * @return string
     */
    public function addOrdinal($num) {

        $num = (int) $num;

        if (!in_array(($num % 100), array(11, 12, 13))) {
            switch ($num % 10) {
                case 1: return $num . 'st' ;
                case 2: return $num . 'nd';
                case 3: return $num . 'rd';
            }
        }

        return $num . 'th';

    }

}
