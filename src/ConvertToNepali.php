<?php

namespace DevScripts\EnglishNepaliNumberConverter;

class ConvertToNepali
{
    /**
     * @var string[]
     */
    private  $englishToNepaliArray = [
        0 => '०',
        1 => '१',
        2 => '२',
        3 => '३',
        4 => '४',
        5 => '५',
        6 => '६',
        7 => '७',
        8 => '८',
        9 => '९',
        '.' => '.',
        ',' => ',',
    ];

    /**
     * @inheritDoc
     */
    public function convert(string $str): string
    {
        $utf = "";

        foreach(str_split($str) as $value) {
            if(isset($this->englishToNepaliArray[$value])) {
                $utf .= $this->englishToNepaliArray[$value];
            }
        }

        return $utf;
    }
}

