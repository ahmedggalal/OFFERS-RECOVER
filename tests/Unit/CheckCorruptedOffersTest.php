<?php

namespace Tests\Unit;

use App\Services\CorruptedOffersService;
use Database\Seeders\CorruptedOffersSeeder;
use Database\Seeders\NormalOffersSeeder;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckCorruptedOffersTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_corrupted_offers_returned()
    {
        $this->seed(CorruptedOffersSeeder::class);
        $recoverStringService = new CorruptedOffersService();
        $this->assertEquals($recoverStringService->getCorruptedOffers()->count() , 3);
    }

        /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_normal_offers_returned()
    {
        $this->seed(NormalOffersSeeder::class);
        $recoverStringService = new CorruptedOffersService();
        $this->assertNotEquals($recoverStringService->getCorruptedOffers()->count() , 3);
    }
}
