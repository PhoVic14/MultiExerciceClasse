<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Pholien</title>
</head>
<body>
    <?php 

        function factorielle($resultatDepart)
        {
            $resultatFact = 1;
            for($i = 1; $i < $nombreDepart; $i++){
                $resultatFact = $resultatFact*$i;
            }
            return $resultatFact;
        }
    ?>
        <p>La facotrielle de 7 vaut <?= Factorielle(7) ?> </p>
</body>
</html>

    