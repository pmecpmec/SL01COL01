<?php

/**
* Array
*/
$games = ["CSGO", "GTA", "COD"];

/**
* Multidimensional Array
*/
$games = [
  ["name" => "CSGO", "price" => 15, "rating" => 10],
  ["name" => "COD", "price" => 15, "rating" => 13],
  ["name" => "GTA", "price" => 5, "rating" => 2],
];

/**
* for-loop
*/
for ($amount = 0; $amount < count($games); $amount++) {
  echo $games[$amount]["name"];
  echo "<br>";
}
/**
* foreach-loop
*/
foreach ($games as $game) {
  echo $game["name"] ." " . $game["price"] ." " . $game["rating"];
  echo "<br>";
}
/**
* Haal de presentatie van een variabele binnen
*/

?>