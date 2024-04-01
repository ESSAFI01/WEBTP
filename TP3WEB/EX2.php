<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1</title>
</head>
<body>
    <h2>Tirage aleatoire composé de 2 nombres paires et un nombre impaire </h2>
    <br>

    <?php
    function vrai($a){
        while($a!=0){
            $nombre1=$a%10;
            $a=$a/10;
            $nombre2=$a%10;
            $a=$a/10;
            $nombre3=$a%10;
            if ($nombre1 % 2!=0 && $nombre2 % 2==0 && $nombre3 % 2 == 0){
                return true;
            }
            else{
                return false;
            }
        }
}

    $nombre=rand(100,999);
        while(!vrai($nombre)){
            $nombre=rand(100,999);
        }
        echo "Le nombre trouvé : ".$nombre."";

    ?>
    
</body>
</html>