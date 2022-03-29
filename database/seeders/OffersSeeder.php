<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
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
}
