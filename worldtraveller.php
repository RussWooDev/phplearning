<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

$total_start = $riel + $kyat + $krones + $lek;

echo $total_start;

//rate from 1 to 1 USD
$riel_exchange = 0.00025;
$kyat_exchange = 0.00057;
$krones_exchange = 0.12;
$lek_exchange = 0.0094;

echo "\nRiel exchange rate to USD is " . $riel_exchange;
echo "\nKyat exchange rate to USD is " . $kyat_exchange;
echo "\nKrones exchange rate to USD is " .$krones_exchange;
echo "\nLek exchange rate to USD is " .$lek_exchange;

//total conversion charges
$charges = 1 * 4;
echo "Total conversion fees is " . $charges;

echo "\n" ;

$total_spent_usd = ($riel * $riel_exchange) + ($kyat * $kyat_exchange) + ($krones * $krones_exchange) + ($lek * $lek_exchange) - $charges;
echo "\nTotal spent in usd is $" . $total_spent_usd;

?>
