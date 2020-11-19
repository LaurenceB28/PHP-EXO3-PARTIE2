<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3phpP2</title>
</head>

<body>
    

    <p>
        <?php
        $gender = 'homme' OR 'femme';

        if ($gender ='homme') {
            echo 'c\'est un developpeur!';
        } 
        
        else if ($gender ='femme') {
            echo 'c\'est une developpeuse!';
        }


        ?>
    </p>
</body>

</html>