<?php
//$argv zorgt er voor dat je dierect in je terminal kan typen en dit dierect opslaat in een array.
$array = $argv[1];
//roud zorgt er voor dat je decimalen can toe voegen in dit geval 2 maar je kan er ook 1 to infinety van maken.
$input = round($array, 2);
//dit is een array met Key => Value.
$valueMoney = array(
50,
20,
10,
5,
2,
1,
0.50,
0.20,
0.10,
0.05
);
$money = round($input / 0.05) * 0.05;
//dit is een if statement die zecht dat als $money 0 is hij je door stuurd naar exit(Geen wissel geld); 
if(!$money == 0){
//$valueMoney = $valueMoney2.
foreach($valueMoney as $valueMoney2){
//met deze round command rond je money af op twee decimalen
    $money = round($money, 2);
// $floorCheck is de variable waar het andwoord wordt opgeslagen floor($money is het afronden naar beneden / $valueMoney2 is de rekensom.
    $floorCheck = floor($money / $valueMoney2);
//deze if statement kijkt of $floorCheck de waarde 0 of hoger heeft heeft ie 0 dan verschijnt ie niet in je echo.
    if(!$floorCheck == 0){
       // var_dump($floorCheck);
//gwn een echo $floorCheck = aantal $valueMoney2 = het biljet.
    echo "$floorCheck x $valueMoney2".PHP_EOL;
//gwn bedrag berekening. 
    $money = $money - ($floorCheck * $valueMoney2);
    }
}
//gwn exit.
    exit;
}
//gwn een else statement.
else {
//gwn nog een exit XD.
    exit ("Geen wissel geld.");
}