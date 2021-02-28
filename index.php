<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php snacks</title>
  </head>
  <body>
    <h1>PHP SNACKS 1</h1>
    <!-- PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55 - 60 -->

    <?php

    $games = [ // array con i dati relativi alle squadre
      [
        'Home' => 'Sixers',
        'Away' => 'Cavaliers',
        'Home final score' => '109',
        'Away final score' => '112'
      ],
      [
        'Home' => 'Spurs',
        'Away' => 'Pelicans',
        'Home final score' => '117',
        'Away final score' => '114'
      ],
      [
        'Home' => 'Knicks',
        'Away' => 'Pacers',
        'Home final score' => '110',
        'Away final score' => '107'
      ],
      [
        'Home' => 'Nets',
        'Away' => 'Mavericks',
        'Home final score' => '98',
        'Away final score' => '115'
      ],
    ];

    for ($i=0; $i < count($games) ; $i++) { // ciclo for che permette di far uscire a schermo i nomi delle squadre e i rispettivi risultati
      echo $games[$i]['Home']. ' - ' .$games[$i]['Away'] . ' || ';
      echo $games[$i]['Home final score']. ' - ' .$games[$i]['Away final score'] .'</br>'.'</br>';
    }

     ?>


  </body>
</html>
