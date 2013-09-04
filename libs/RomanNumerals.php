<?php

require_once "RomanNumeralGenerator.php";


class RomanNumerals implements RomanNumeralGenerator
{
    public function generate($number)
    {
        assert(is_int($number));

        $translate = array(
            4000 => 'M',
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            3 => 'III',
            2 => 'II',
            1 => 'I',
        );

        $remainder = $number;

        $answer = '';

        while ($remainder > 0) {

            foreach($translate as $dec => $roman) {
                if ($remainder >= $dec) {
                    $answer .= $roman;
                    $remainder -= $dec;
                    break;
                }
            }
        }

        return $answer;
    }

}