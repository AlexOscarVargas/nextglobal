<?php

namespace Test\Unit;

use App\Services\PromoCalculator;
use PHPUnit\Framework\TestCase;

class PromoCalculatorTest extends TestCase
{
    public function testSeVerificaSiTenemosDosProductosSeRealizaDescuento(): void
    {
        // Dado los siguientes valores:
        $products = [
            [
               'title' => 'antivus',
               'price' =>   50
            ],
            [
                'title' => 'teclado',
                'price' =>   50  
            ]
            ];
            $total = 100.00;

            // Cuando calculamos la promoción
            $service = new PromoCalculator();
            $response = $service->calculate($products, $total);

            // Entonces se verifica que...
            $this->assertEquals(50, $response);
        }
}
