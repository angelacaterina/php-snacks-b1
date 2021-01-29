<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php 
$matches = [
    [
        'homeTeam' =>"De' Longhi Treviso Basket",
        'pointsHT' => '84',
        'visitingTeam' =>'Dolomiti Energia Trentino',
        'pointsVT' => '80',
    ],
    [
        'homeTeam' =>'Openjobmetis Varese',
        'pointsHT' => '94',
        'visitingTeam' =>'Germani Brescia',
        'pointsVT' => '89',
        
    ],
    [
        'homeTeam' =>'UNAHOTELS Reggio Emilia',
        'pointsHT' => '71',
        'visitingTeam' =>'A|X Armani Exchange Milano',
        'pointsVT' => '87',
    ],
    [
        'homeTeam' =>"Allianz Pallacanestro Trieste",
        'pointsHT' => '102',
        'visitingTeam' =>'Vanoli Basket Cremona',
        'pointsVT' => '77',
    ],
    [
        'homeTeam' =>"Carpegna Prosciutto Pesaro",
        'pointsHT' => '85',
        'visitingTeam' =>'Banco di Sardegna Sassari',
        'pointsVT' => '95',
    ],
    [
        'homeTeam' =>"Virtus Segafredo Bologna",
        'pointsHT' => '84',
        'visitingTeam' =>'Acqua S.Bernardo Cantù',
        'pointsVT' => '65',
    ],
    [
        'homeTeam' =>"Umana Reyer Venezia",
        'pointsHT' => '75',
        'visitingTeam' =>'Happy Casa Brindisi',
        'pointsVT' => '67',
    ],
    
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Snack 1</title>
    </head>
    <body>
        <h1>1° Giornata - Andata</h1>
        <p><?php 
            for ($i = 0; $i < count($matches); $i++) {
                echo $matches[$i]['homeTeam'].' - '.$matches[$i]['visitingTeam'].' | '.$matches[$i]['pointsHT'].' - '.$matches[$i]['pointsVT'];
            ?><br><?php
            }
        ?></p>
    </body>
</html>