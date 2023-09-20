<?php
date_default_timezone_set(timezoneId: 'Europe/Amsterdam');

/**
 * Schrijf een functie waarbij de kleur van de pagina
 * bepaald wordt op basis van tijd
*/
function changeColor()
{
  if (date('H') < 9) {


    echo "<style>
                body {
                    background-color: blue;
                }</style>";
  } else {
    echo "<style>
                body {
                    background-color: pink;
                }</style>";
  };
  echo "<div>Hello ADSD</div>";
}
/**
 * Schrijf een functie waarbij de waarde van een variable getoond wordt, hoeveel het
 * er zijn en welk type het is.
 */

changeColor();
$teams = ["coat", "psr", "keep"];
$PLAYERS = ["stephan", "arie", "jan"];


function characterCounterType($value)
{
  echo $value . "<br>";
  echo strlen($value) . "<br>";
  echo gettype($value) . "<br>";
};

$person = false;

characterCounterType($person);
/**
 * Schrijf een functie waarbij een array random een andere waarde toont vanuit de array
 */

/**
 * Verplaats alles naar een function directory, en require de function file.
 */

/**
 * Haal de presentatie van een variabele binnen
 */
