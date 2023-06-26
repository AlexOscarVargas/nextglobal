<?php

namespace Test\Unit;

use App\Services\PromoCalculator;
use PHPUnit\Framework\TestCase;

final class PromoCalculatorTest extends TestCase
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

        /** @test */
        public function se_verifica_que_si_tenemos_mas_de_dos_productos_se_realice_descuento(): void
    }
   
        $products = $products =[
            [
               'title' => 'antivus',
               'price' =>   50
            ],
            [
                'title' => 'teclado',
                'price' =>   50  
            ]
            [
                'title' => 'memoria',
                'price' =>   100  
            ]
            ];
            $total = 200.00;

            $service = new PromoCalculator();
            $response = $service->calculate($products, $total);

            $this->assertEquals(100, $response);

         /** @test */
        public function se_verifica_que_con_un_producto_no_se_aplique_descuento(): void
{
    $products = $products =[
        [
            'title' => 'antivus',
         'price' =>   50
            ]
        ];
            $total = 50.00;

             $service = new PromoCalculator();
        $response = $service->calculate($products, $total);

        $this->assertEquals(50, $response);
}