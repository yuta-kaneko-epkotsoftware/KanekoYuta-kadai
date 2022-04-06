<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    関数課題1<br>
    <?php
        function addition($x, $y) {
            $z = $x + $y;
            return $z;
        }
        $sum = addition(5, 2);
        echo $sum;
        $x = $sum;
        echo "<br>";


        function subtraction($x, $y) {
            $z = $x - $y;
            return $z;
        }
        $sum = subtraction(5, 2);
        echo $sum;
        $x = $sum;
        echo "<br>";

        function multiplication($x, $y) {
            $z = $x * $y;
            return $z;
        }
        $sum = multiplication(5,2);
        echo $sum;
        $x = $sum;
        echo "<br>";

        function division($x, $y) {
            $z = $x / $y;
            return $z;
        }
        $sum = division(6,3);
        echo $sum;
        $x = $sum;
        echo "<br>";

        function surplus($x, $y) {
            $z = $x % $y;
            return $z;
        }
        $sum = surplus(7,2);
        echo $sum;
        $x = $sum;
        echo "<br>";
    ?>

    関数課題2<br>
    <?php
        function sample(&$a, &$b) {
            $a = 1; $b = 2;
         }
         $a = 2; $b = 3;
         sample($a, $b);
         echo $a;
         echo "<br>";
         echo $b;
         
    ?>
</body>
</html>