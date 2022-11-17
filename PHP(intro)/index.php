<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Pholien PHP(intro)</title>
</head>
<body>
    <?php
    //etape0
    echo "<p>Hello World</p>";
    //etape1
    for($x = 1; $x <= 10; $x++){    
        echo "<p>Le nombre vaut " .$x. '</p>';
    }
    //etape2
    echo "ETAPE 2";
    for($x = 1; $x <= 10; $x++){    
       if ($x == 3){
            $x + 1;
        }
        else{
        echo "<p>Le nombre vaut " .$x. '</p>';
    }
    }
    //etape 3
    echo "ETAPE 3";
    for($x = 1; $x <= 10; $x++){
        if ($x < 4 || $x > 7 ){
            echo "<p>Le nombre vaut " .$x. '</p>';
        } 
    }
    //etape 4
    echo "ETAPE 4";
    $a = -5;
    $b = 10;
    echo "<p>La valeur absolue de $a vaut " .abs($a). '</p>';
    echo "<p>La valeur absolue de $b vaut " .abs($b). '</p>';
    ?>
</body>
</html>