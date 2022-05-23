<?php
$Econ_Array= array(0.45, 0.40, 0.31, 0.50);

$Last_ODO = 10000;
$Current_ODO = 10200;

$Last_LIT = 60;
$New_LIT = 60;

$Last_COST = 85 ;
$New_COST = 90;

$ODO_DIFF = abs($Last_ODO - $Current_ODO);
$LIT_DIFF = abs($Last_LIT - $New_LIT);
$COS_DIFF = abs($Last_COST - $New_COST);

$Last_CPL = $Last_LIT/$Last_COST;
$Fuel_Econ = $Last_COST/$ODO_DIFF;

array_push($Econ_Array, $Fuel_Econ);

$Econ_Avg = array_sum($Econ_Array) / count($Econ_Array);

echo "You Travelled " . $ODO_DIFF . " KM\n";
echo "Current Fuel Econ: " . round($ODO_DIFF/$Last_LIT, 2) . " KPL @ " . round($Last_CPL, 2) . "/L\n";
echo "Fuel Price Econ: $" . round($Fuel_Econ, 2) . "/KM\n";
echo "All Time Price Econ Avg: $" . $Econ_Avg . "/KM\n";
