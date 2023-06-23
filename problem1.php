<?php
// Your code here!
function calculateProfit($burgers, $price) {
  return $burgers * $price;
}

// Function to find the maximum profit
function findMaxProfit($breads, $vegPatties, $nonVegPatties, $tikkiPatties, $priceVegBurger, $priceNonVegBurger, $priceTikkiBurger) {
  $maxProfit = 0;

  // Iterate over all possible combinations of burgers
  for ($vegBurgers = 0; $vegBurgers <= min($breads / 2, $vegPatties); $vegBurgers++) {
    for ($nonVegBurgers = 0; $nonVegBurgers <= min($breads / 2, $nonVegPatties); $nonVegBurgers++) {
      for ($tikkiBurgers = 0; $tikkiBurgers <= min($breads / 2, $tikkiPatties); $tikkiBurgers++) {
        $profit = calculateProfit($vegBurgers, $priceVegBurger) + calculateProfit($nonVegBurgers, $priceNonVegBurger) + calculateProfit($tikkiBurgers, $priceTikkiBurger);

        if ($profit > $maxProfit) {
          $maxProfit = $profit;
        }
      }
    }
  }

  return $maxProfit;
}
/* 

Burgerking sells three items: 
VegBurger which needs 2 breads & 1 veg pattice
NonVegBurger which needs 2 breads & 1 non-veg pattice
TikkiBurger which needs 2 breads & 1 tikki pattice

Given bread quantity, veg pattice quantity, non-veg pattice quantity, tikki pattice quantity & price of all 3 items

Print the total maximum possible profit by making all possible items based on bread availability 

Also, test for all inputs, we would change all the values while testing, the quantity values as well as price

And program has to be optimal with respect to time & space complexity

*/

$breads = 15;
$vegPattice = 3;
$nonVegPattice = 2;
$TikkiPattice = 1;
$priceVegBurger = 100;
$priceNonVegBurger = 125;
$priceTikkiBurger = 112;

// $maxProfit = 0;

$maxProfit = findMaxProfit($breads, $vegPattice, $nonVegPattice, $TikkiPattice, $priceVegBurger, $priceNonVegBurger, $priceTikkiBurger);

echo $maxProfit;

?>