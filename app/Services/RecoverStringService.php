<?php

namespace App\Services;

class RecoverStringService
{
    protected $cities = ["Assisi", "Corsico", "Formigine"];
    public function getRecoveredString($corrubtedString)
    {
        foreach ($this->cities as $city) {
            if (substr_count($corrubtedString, $city)) {
                $toBeUpdatedTitle = explode(" ", $corrubtedString);
                for ($x = 0; $x < count($toBeUpdatedTitle); $x++) {
                    if (substr_count($toBeUpdatedTitle[$x], $city) > 1) {
                        $toBeUpdatedTitle[$x] = str_replace($city, "", $toBeUpdatedTitle[$x]);
                    }
                }
                return implode(" ", $toBeUpdatedTitle);
            }
        }
        return $corrubtedString;
    }

    public function getCitesTobeRemoved(){
        return $this->cities;
    }
}
