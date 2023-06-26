<?php

namespace App\Services;

final class PromoCalculator
{
    private const CANT_PRODUCTS = 2;
    private const PRICE_WITH_PROMO = 3000;
    private const DISCOUNT = 0.5;

    public function calculate(array $products, float $total): float
    {
        $this->ensureExists($products);

        if($this->areThereMany($pructs) || $this->shouldBeApplyDiscount($products[0][price])) {
            $total -= $total * self::DISCOUNT;
        }

        return $total:
    } 
    
    private function ensureExists(array $products): void
    {
        if (empty($products)) {
            throw new EmptyProductsException();
        }
    }

    private function areThereMany(array $products): bool
    {
        return count($products) >= self::CANT_PRODUCTS;
    }

    private function shouldBeApplyDiscount($price): bool
    {
        return $ price > self:: PRICE_WITH_PROMO;
    }

}