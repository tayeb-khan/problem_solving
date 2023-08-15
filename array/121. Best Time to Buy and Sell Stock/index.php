<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maxProfit = 0;

        if (count($prices) <= 1) {
            return $maxProfit;
        }

        $buying_price = $prices[0];
        $maxProfit = 0;

        $left_prices = array_slice($prices, 1);

        for($i = 0; $i < count($left_prices); $i++) {
            $price = $left_prices[$i];

            $profit = $price - $buying_price;

            if($profit > $maxProfit) {
                $maxProfit = $profit;
            } elseif($buying_price > $price){
                $buying_price = $price;
            }
        }

        if ($maxProfit > 0) {
            return $maxProfit;
        } else {
            return 0;
        }
    }
}