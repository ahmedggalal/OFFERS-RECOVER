<?php

namespace Tests\Feature;

use App\Services\CorruptedOffersService;
use Database\Seeders\CorruptedOffersSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RecoverOffersTableTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->seed(CorruptedOffersSeeder::class);
        $recoverStringService = new CorruptedOffersService();
        $this->assertEquals($recoverStringService->getCorruptedOffers()->count(), 3);
        $recoverStringService->recoverCorruptedStrings();
        $this->assertEquals($recoverStringService->getCorruptedOffers()->count(), 0);
    }
}
