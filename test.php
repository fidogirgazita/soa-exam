<?php
require_once ('coinapi.inc.php');

// define constants for testing
$api_key = ""; // insert here you api key

$asset_id_base = 'BTC';
$asset_id_quote = 'USD';
$symbol_id = 'BITSTAMP_SPOT_BTC_USD';
$period_id = '1HRS';
$time_start = (new DateTime())->modify('-7 days');
$time_end = (new DateTime())->modify('-5 days');
$limit = 200;

// allocate class
$capi = new CoinAPI($api_key);

/// get current exchange rate
print_r(json_encode($capi->GetExchangeRate($asset_id_base, $asset_id_quote)));
?>