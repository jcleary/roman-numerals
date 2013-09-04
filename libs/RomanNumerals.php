<?php
require_once "RomanNumeralGenerator.php";


/**
 * Class RomanNumerals
 *
 * Can generate roman numbers for integers
 *
 * @author John Cleary
 */
class RomanNumerals implements RomanNumeralGenerator
{
    /**
     * Generate a roman numeral from an integer
     *
     * @param $number
     * @return string
     */
    public function generate($number)
    {
        assert(is_int($number) && $number >= 0 && $number <= 3999);

        // array of decimal to roman number starting with largest first
        $decimalToRoman = array(
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

        // generating a roman numeral can be done by concatenating the numerals until they
        // add up to the number we want. We have to start with the largest possible number (M = 1000)
        // otherwise we would get a string if "I"s !
        while ($remainder > 0) {
            foreach($decimalToRoman as $dec => $roman) {
                if ($remainder >= $dec) {
                    $answer .= $roman;
                    $remainder -= $dec;
                    // have to break here as once we find a matching roman number we have to start at the top again
                    break;
                }
            }
        }

        return $answer;
    }

}