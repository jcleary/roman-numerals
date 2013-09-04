<?php



/**
 * Class RomanNumeralsTest
 *
 * tests for the RomanNumerals class
 *
 * @author John Cleary
 */
class RomanNumeralsTest extends PHPUnit_Framework_TestCase
{


    public function testCanGenerateOne()
    {
        $roman = new RomanNumerals();
        $this->assertEquals($roman->generate(1), 'I');
    }

    public function testCanGenerateNumbersTwoToFive()
    {
        $roman = new RomanNumerals();
        $this->assertEquals($roman->generate(2), 'II');
        $this->assertEquals($roman->generate(3), 'III');
        $this->assertEquals($roman->generate(4), 'IV');
        $this->assertEquals($roman->generate(5), 'V');
    }

    public function testCanGenerateNumbersSixToTen()
    {
        $roman = new RomanNumerals();
        $this->assertEquals($roman->generate(6), 'VI');
        $this->assertEquals($roman->generate(7), 'VII');
        $this->assertEquals($roman->generate(8), 'VIII');
        $this->assertEquals($roman->generate(9), 'IX');
        $this->assertEquals($roman->generate(10), 'X');
    }

    public function testCanGenerateNumbersElevenToOneHundred()
    {
        $roman = new RomanNumerals();
        $this->assertEquals($roman->generate(11), 'XI');
        $this->assertEquals($roman->generate(15), 'XV');
        $this->assertEquals($roman->generate(19), 'XIX');
        $this->assertEquals($roman->generate(20), 'XX');
        $this->assertEquals($roman->generate(22), 'XXII');
        $this->assertEquals($roman->generate(30), 'XXX');
        $this->assertEquals($roman->generate(40), 'XL');
        $this->assertEquals($roman->generate(44), 'XLIV');
        $this->assertEquals($roman->generate(50), 'L');
        $this->assertEquals($roman->generate(54), 'LIV');
        $this->assertEquals($roman->generate(77), 'LXXVII');
        $this->assertEquals($roman->generate(90), 'XC');
    }

    public function testCanGenerateNumbersOneHundredToFourThousand()
    {
        $roman = new RomanNumerals();
        $this->assertEquals($roman->generate(100), 'C');
        $this->assertEquals($roman->generate(120), 'CXX');
        $this->assertEquals($roman->generate(200), 'CC');
        $this->assertEquals($roman->generate(300), 'CCC');
        $this->assertEquals($roman->generate(400), 'CD');
        $this->assertEquals($roman->generate(500), 'D');
        $this->assertEquals($roman->generate(900), 'CM');
        $this->assertEquals($roman->generate(1000), 'M');
        $this->assertEquals($roman->generate(1240), 'MCCXL');
        $this->assertEquals($roman->generate(3999), 'MMMCMXCIX');
    }



}