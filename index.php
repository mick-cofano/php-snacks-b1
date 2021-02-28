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

     <h1>PHP SNACKS 2</h1>

     <!-- PHP Snack 2:
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. mail contenga un punto e una chiocciola
    3. age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <?php

    // variabili GET che permettono, tramite relativo url, di compilare i campi (localhost/*/index.php/?name=michele&mail=mickcofano@gmail.com&age=28) (nel mio caso)
    $name = $_GET ['name'];
    $mail = $_GET ['mail'];
    $age = $_GET ['age'];

    // trasformazione dell'età in numero intero
    $intAge = (int)$age;

    // metodo if che permette di far si che siano soddisfatte le richieste
    if ( strlen($name) > 3
        && strpos($mail, '.') !== false
        && strpos($mail, '@') !== false
        && is_int($intAge)
    ) {
      echo 'Accesso riuscito'; // se vengono soddisfatte le richieste, allora
    } else {
      echo 'Accesso negato'; // altrimenti, se non vengono soddisfatte..
    }


     ?>

     <!-- end snacks -->


  </body>
</html>
