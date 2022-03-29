<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

class NormalOffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //insert two corrubted and one not corrubted
            Offer::create([
                "title" => "This title is good enough. Corsico.Still is good, Corsico. 2",
                "description" => "This title is good enough. Corsico.Still is good, Corsico. 2"
            ]);
            Offer::create([
                "title" => "This title is good enough. Corsico.Still is good, Corsico. 2 ",
                "description" => "This title is good enough. Corsico.Still is good, Corsico. 2"
            ]);
    }
}
