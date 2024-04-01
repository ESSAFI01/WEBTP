<!DOCTYPE html>
<html lang="en">
<head>
    <title>EX4</title>
</head>
<body>
    <?php
        $Nombre1=rand(100,999);
        echo"Le 1er nombre ".$Nombre1." <br>";
        $nbrtirage=0;
        $Nombre2=rand(100,999);

        while($Nombre2!=$Nombre1){
            $Nombre2=rand(100,999);
            $nbrtirage+=1;
        }
        echo "Nombre de tirages nécessaires pour que Nombre2 soit égal à Nombre1: " .$nbrtirage;
       

    ?>
    
</body>
</html>