<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class CorruptedOffersService
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

    public function getCorruptedOffers(){
        $offers = DB::table('offers');
        foreach ($this->getCitesTobeRemoved() as $index => $city) {
            if ($index == 0) {
                $offers->where('title', 'LIKE', "{$city}%")->orWhere('description', 'LIKE', "{$city}%");
                continue;
            }
            $offers->orWhere('title', 'LIKE', "{$city}%")->orWhere('description', 'LIKE', "{$city}%");
        }
        return $offers;
    }
}
