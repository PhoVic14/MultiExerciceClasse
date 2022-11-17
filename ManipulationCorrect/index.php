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
    ?>
    <h1>Etape 1</h1>
    <?php for($x = 1; $x <= 10; $x++) : ?>    
        <p>Le nombre vaut <?= $x ?> </p>
    <?php endfor ?>
    
    <h1>Etape 2</h1>
    <?php for($x = 1; $x <= 10; $x++) : ?>    
       <?php if ($x == 3) : ?>
            <p>Le nombre vaut <?= $x ?> </p>
        <?php endif ?>
    <?php endfor ?>
    
    <h1>Etape 3</h1>
    <?php for($x = 1; $x <= 10; $x++) : ?>
        <?php if ($x < 4 || $x > 7 ) : ?>
            <p>Le nombre vaut <?= $x ?> </p>
        <?php endif ?>
    <?php endfor ?>
    
    <h1>Etape 4</h1>
    <?php 
    $a = -5;
    $b = 10;
    ?>
    <p>La valeur absolue de <?= $a ?> vaut  <?=abs($a) ?> </p>
    <p>La valeur absolue de <?= $b ?> vaut  <?=abs($b) ?> </p>
</body>
</html>