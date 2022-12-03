<?php

namespace DevScripts\EnglishNepaliNumberConverter\Tests\Unit;

use DevScripts\EnglishNepaliNumberConverter\Convert;
use DevScripts\EnglishNepaliNumberConverter\Tests\UnitTestCase;

class ConvertTest extends UnitTestCase
{
    public function test_nepali_to_english_one_digit()
    {
        $actual =  Convert::toNp(1);
        $expected = "१";
        $this->assertEquals($expected, $actual);
    }

    public function test_nepali_to_english_small_number()
    {
       $actual =  Convert::toNp(123);
       $expected = "१२३";
       $this->assertEquals($expected, $actual);
    }

    public function test_nepali_to_english_small_number_with_decimal()
    {
        $actual =  Convert::toNp(123.33);
        $expected = "१२३.३३";
        $this->assertEquals($expected, $actual);
    }

    public function test_nepali_to_english_big_number_with_decimal()
    {
        $actual =  Convert::toNp(123456789.05);
        $expected = "१२३४५६७८९.०५";
        $this->assertEquals($expected, $actual);
    }

    public function test_nepali_to_english_big_number_with_decimal_and_thousand_count()
    {
        $number = 123456789.05;
        $numberThousandCount = number_format($number, 2);
        $actual =  Convert::toNp($numberThousandCount);
        $expected = "१२३,४५६,७८९.०५";
        $this->assertEquals($expected, $actual);
    }

    public function test_english_to_nepali_one_digit()
    {
        $actual =  Convert::toEn("१");
        $expected = 1;
        $this->assertEquals($expected, $actual);
    }

    public function test_english_to_nepali_small_number()
    {
        $actual =  Convert::toEn("१२३");
        $expected = 123;
        $this->assertEquals($expected, $actual);
    }

    public function test_english_to_nepali_small_number_with_decimal()
    {
        $actual =  Convert::toEn("१२३.३३");
        $expected = 123.33;
        $this->assertEquals($expected, $actual);
    }

    public function test_english_to_nepali_big_number_with_decimal()
    {
        $actual =  Convert::toEn("१२३४५६७८९.०५");
        $expected = 123456789.05;
        $this->assertEquals($expected, $actual);
    }
}
