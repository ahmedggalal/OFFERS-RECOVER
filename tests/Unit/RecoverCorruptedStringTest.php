<?php

namespace Tests\Unit;

use App\Services\RecoverStringService;
use PHPUnit\Framework\TestCase;

class RecoverCorruptedStringTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_recover_corrupted_string()
    {
        $recoverStringService = new RecoverStringService();
        $corrubtedString = 'CorsicoSCorsicoeCorsico CorsicotCorsicoiCorsico CorsicooCorsicocCorsicocCorsicouCorsicopCorsicoiCorsico CorsicodCorsicoiCorsico CorsicosCorsicoeCorsicorCorsicovCorsicoiCorsicozCorsicoiCorsico CorsicodCorsicoiCorsico CorsicotCorsicorCorsicoaCorsicosCorsicolCorsicooCorsicocCorsicooCorsico CorsicoaCorsico CorsicoCCorsicoeCorsicorCorsicoiCorsicogCorsiconCorsicooCorsicolCorsicoaCorsico CorsicopCorsicorCorsicooCorsicovCorsicoaCorsico CorsicoECorsicorCorsiconCorsicoeCorsicosCorsicotCorsicooCorsico';
        $expectedString = 'Se ti occupi di servizi di trasloco a Cerignola prova Ernesto';
        $this->assertEquals($recoverStringService->getRecoveredString($corrubtedString),$expectedString);
    }
}
