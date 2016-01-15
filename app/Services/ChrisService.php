<?php

namespace App\Services;

class ChrisService
{
    /**
     * Returns example values
     *
     * @return array
     */
    public function getExampleValues()
    {
        $values = array(
            'acclaim' => 'Hallo Laravel Welt',
        );

        return $values;
    }
}
