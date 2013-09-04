<?php

require_once "RomanNumeralGenerator.php";


class RomanNumerals implements RomanNumeralGenerator
{
    public function generate($number)
    {
        assert(is_int($number));

        $units = $number % 10;
        $tens = ($number - $units) / 10;

        $translate = array(
            0 => '',
            1 => 'X',
            2 => 'XX',
            3 => 'XXX',
            4 => 'XL',
            5 => 'L',
            6 => 'LX',
            7 => 'LXX',
            8 => 'LXXX',
            9 => 'XC'
        );

        $roman = $this->getTens($tens * 10) . $this->getUnder10Component($units);

        return $roman;
    }


    private function getUnder10Component($number)
    {
        $translate = array(
            0 => '',
            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
        );

        return $translate[$number];
    }

    private function getTens($number)
    {
        $translate = array(
            0 => '',
            10 => 'X',
            20 => 'XX',
            30 => 'XXX',
            40 => 'XL',
            50 => 'L',
            60 => 'LX',
            70 => 'LXX',
            80 => 'LXXX',
            90 => 'XC'
        );

        return $translate[$number];

    }



}