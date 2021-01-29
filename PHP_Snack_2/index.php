<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

/*
$user = [ 
    'nome' => $name,
    'email' => $email,
    'age' => $age
];
var_dump($user);
*/

/* Strutture
1. struttura di partenza
if(empty($name) && empty($email) && empty($age)){
    echo 'Error';
}else{
    if(strlen($name) > 3){
        echo 'Accesso riuscito';
    }else{
        echo 'accesso negato';
    }
    if(strpos($email,'@') !== false && strpos($email,'.') !== false){
        echo 'ok ';
    }else{
        echo 'ko ';
    }
    if(is_numeric($age)){
        echo 'ok ';
    }else{
        echo 'ko ' ;
    }
}
2. Struttura da utilizzare 
if(empty($name) && empty($email) && empty($age)){
    echo 'Error';
}else{
    if(strlen($name) > 3 && strpos($email,'@') !== false && strpos($email,'.') !== false && is_numeric($age)){
        echo 'Accesso riuscito';
    }else{
        echo 'accesso negato';
    }
}
*/

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Snack 2</title>
    </head>
    <body>
        <h1>Accesso: <?php 
            if(empty($name) && empty($email) && empty($age)){
                echo 'Error';
            }else{
                if(strlen($name) > 3 && strpos($email,'@') !== false && strpos($email,'.') !== false && is_numeric($age)){
                    echo 'Riuscito';
                }else{
                    echo 'Negato';
                }
            }
        ?></h1>
        <p><?php 
            if(empty($name) && empty($email) && empty($age)){
                echo 'Error';
            }else{
                if(strlen($name) > 3 && strpos($email,'@') !== false && strpos($email,'.') !== false && is_numeric($age)){
                    echo "Nome utente : $name <br>";
                    echo "Email utente : $email <br>";
                    echo "Età utente : $age <br>";
                    #echo 'Accesso riuscito';
                }else{
                    #echo 'Accesso Negato';
                }
            }
        ?></p>
    </body>
</html>