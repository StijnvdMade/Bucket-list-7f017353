<?php
$dingen = array();
$lijst = count($dingen);
$i = 1;
echo ("Hoeveel dingen wil je op je bucket list zetten? \n");
$amount = readline();
if (is_numeric($amount)) {
    echo (var_export($amount) . " activiteiten wil je toevoegen. \n");
} else {
    echo (var_export($amount) . " is geen getal, vul een getal in. \n");
    exit();
}
for($i = 1; $i <= $amount; $i++){   
    echo "Welke activiteit wil je toevoegen? \n";
    $dingen[] = readline();
}
echo "De bucket list: \n";
foreach($dingen as $value){echo $value . PHP_EOL;}  
?>