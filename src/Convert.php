<?php

namespace DevScripts\EnglishNepaliNumberConverter;

class Convert
{
    /**
     * @param string $string
     *
     * @return string
     */
    public static function toNp(string $string): string
    {
        $convertToNepali =  new ConvertToNepali();

        return $convertToNepali->convert($string);
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public static function toEn(string $string): string
    {
        $convertToEnglish =  new ConvertToEnglish();

        return $convertToEnglish->convert($string);
    }
}
