<?php

$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$total_cost1 = $quantity1 * $price1;
$total_cost2 = $quantity2 * $price2;

if ($total_cost1 < $total_cost2) {
  $best_deal = 1;
} else {
  $best_deal = 2;
}

echo "The best deal is deal number $best_deal";

?>