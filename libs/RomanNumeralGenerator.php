<?php

/**
 * Interface RomanNumeralGenerator
 *
 * interface for classes which can generate roman numberals
 *
 * @author John Cleary
 */
interface RomanNumeralGenerator
{
    /**
     * Generate a roman numeral from an integer
     *
     * @param $number
     * @return string
     */
    public function generate($number);
}