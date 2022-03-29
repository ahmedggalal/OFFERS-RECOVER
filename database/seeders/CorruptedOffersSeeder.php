<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

class CorruptedOffersSeeder extends Seeder
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
                "title" => "AssisiOAssisifAssisifAssisirAssisiiAssisi AssisisAssisieAssisirAssisivAssisiiAssisizAssisiiAssisi AssisidAssisiiAssisi AssisitAssisirAssisiaAssisisAssisilAssisioAssisicAssisioAssisi AssisiaAssisi AssisiCAssisieAssisirAssisiiAssisigAssisinAssisioAssisilAssisiaAssisi AssisicAssisioAssisinAssisi AssisiEAssisirAssisinAssisieAssisisAssisitAssisioAssisi",
                "description" => "FormigineGFormigineoFormigineoFormigined FormiginejFormigineoFormiginebFormigine"
            ]);
            Offer::create([
                "title" => "This title is good enough. Corsico.Still is good, Corsico.",
                "description" => "FormigineGFormigineoFormigineoFormigined FormiginejFormigineoFormigineb."
            ]);
            Offer::create([
                "title" => "FormigineGFormigineoFormigineoFormigined FormiginejFormigineoFormiginebFormigine.",
                "description" => "FormigineGFormigineoFormigineoFormigined FormiginejFormigineoFormiginebFormigine"
            ]);
    }
}
