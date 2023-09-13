<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignments College 01 Periode 01</title>
</head>

<body>
  <?php 
    $person = array(   "firstName" => "Pedro",
      "secondName" => "Miguel",
      "lastName" => "Eduardo Cardoso",);

    $hobbies = array("sports" => "Fitness",
      "gaming" => "Counter-Strike: Global Offensive",);

    $pets = array("pets" => "2 dogs",
      "petsName" => "Daisy and Snoopy",);

    $favorites = array("favoriteFood" => "Wraps",
      "favoriteMusicGenre" => "Rap",
      "favoriteSeries" => "One Piece",
      "favoriteVideoGame" => "Counter-Strike: Global Offensive");


    
    echo "<h1>My name is $person[firstName] $person[secondName] $person[lastName] </h1>";
    echo "<h2>My hobbies are $hobbies[sports] and $hobbies[gaming] </h2>";
    echo "<h3>I have $pets[pets] named $pets[petsName] </h3>";
    echo "<h4>My favorite food is $favorites[favoriteFood] </h4>";
    echo "<h5>My favorite music genre is $favorites[favoriteMusicGenre] </h5>";
    echo "<h6>My favorite series is $favorites[favoriteSeries] </h6>";
    echo "<h7>My favorite video game is $favorites[favoriteVideoGame] </h7>";
    


  ?>
</body>


</html>