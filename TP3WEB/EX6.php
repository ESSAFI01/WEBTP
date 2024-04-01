<?php
    if(isset($_GET['equation'])){
        $a=$_GET ['a'];
        $b=$_GET ['b'];
        $c=$_GET ['c']; 
    }
        function delta($a,$b,$c){
            $d=pow($b,2)-(4 * $a * $c);
            return $d;
        }

    function solution($a,$b,$c){
        $d=delta($a, $b, $c);
        
        if($d>0){
            $x1=(-$b+sqrt($d))/2*$a;
            $x2=(-$b-sqrt($d))/2*$a;
            return 'la 1ere solution : '.$x1.' la 2eme solution : '.$x2;
        }

        elseif($d == 0){
            $x=(-$b)/2*$a;
            return 'la solution unique : '.$x;
        }
        else{
            return 'ya pas de resultat reelle pour cette equation';
        }
    }

$resultat=solution($a,$b,$c);

?>
          
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EX6</title>
</head>
<body>
        <form action="" method="get">
            <!-- coeff de x^2 : a-->
            <div>
                <label for="a"> a </label>
                <input type="number" name="a" value="<?= $a ?>">
            </div>
            <br>

            <!-- coeff de x : b-->
            <div>
                <label for="b"> b </label>
                <input type="number" name="b" value="<?= $b ?>">
            </div>
            <br>

            <!-- coeff : c-->
            <div>
                <label for="c"> c </label>
                <input type="number" name="c" value="<?= $c ?>">
            </div>
            <br>
            <!-- resultat -->
            <label for="resultat"> Résultat </label>
            <p id="resultat"><?= $resultat?></p>

            <div>
                <input type="submit" value="Calculer" name="equation">
            </div>

        </form>
</body>
</html>