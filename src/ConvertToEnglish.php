<?php

namespace DevScripts\EnglishNepaliNumberConverter;

class ConvertToEnglish
{
    /**
     * @var string[]
     */
    private  $nepaliToEnglishArray = [
        '०' => 0,
        '१' => 1,
        '२' => 2,
        '३' => 3,
        '४' => 4,
        '५' => 5,
        '६' => 6,
        '७' => 7,
        '८' => 8,
        '९' => 9,
        "." => ".",
    ];

    /**
     * @inheritDoc
     */
    public function convert(string $str): string
    {
        $number = "";

        foreach(mb_str_split($str) as $value) {
            if(isset($this->nepaliToEnglishArray[$value])) {
                $number .= $this->nepaliToEnglishArray[$value];
            }
        }

        return $number;
    }
}

