<!DOCTYPE html>
<html>
<head>
    <title>Nombres d'Armstrong</title>
</head>
<body>

<h2>Nombres d'Armstrong inférieurs à 1000 :</h2>

<ul>
    <?php
    // Fonction pour calculer la somme des cubes des chiffres d'un nombre
    function sommeCubesChiffres($nombre) {
        $somme = 0;
        while ($nombre != 0) {
            
            $chiffre = $nombre % 10;
            $nombre = $nombre/10;
            $somme += pow($chiffre, 3); // Ajoute le cube de chaque chiffre à la somme
        }
    return $somme;
}

    // Parcourir tous les nombres inférieurs à 1000
    for ($i = 1; $i < 1000; $i++) {
        // Vérifier si le nombre est un nombre d'Armstrong
        if ($i === sommeCubesChiffres($i)) {
            echo "<li>$i</li>"; // Afficher le nombre dans une liste à puce
        }
    }
    ?>
</ul>

</body>
</html>
