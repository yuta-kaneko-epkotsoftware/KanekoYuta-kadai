<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    (1)<br>
    <?php
         if(TRUE) {
             $x = 2 + 4 - 5; $y = 4 - 5 + 2;
             echo $x; 
             echo "<br/>";
             echo $y;
             echo "<br/>";
         }
         if(TRUE) {
             $z = 4 * 5 / 2; $k = 5 / 2 * 4;
             echo $z;
             echo "<br/>";
             echo $k;
             echo "<br/>";
         }

    ?>

    (2)<br>
    <?php
        if(TRUE && FALSE);
          $x = 2 * 3 + 4 + 1;
          $y = 2 * (3 + 4 + 1);
          echo $x;
          echo "<br/>";
          echo $y;
          echo "<br/>";        
     ?>

     (3)<br>
     <?php
         echo "①最初に、変数にAdminという文字列を代入する。";
         echo "<br/>";
         echo "②最初に、変数にAdmin以外の文字列を代入する。";
         echo "<br/>";
     ?>

     (4)<br>
     <?php
         $animal = ["dog","lion","wolf"];
         for ($i = 0; $i < count($animal); $i++) {
             echo $animal[$i];
             echo "<br>";
         }
    ?>

    (5)<br>
    <?php
         $animal = ["dog","lion","wolf"];
         sort($animal);
         foreach ($animal as $key => $val) {
             echo "animal[" . $key . "] = " . $val . "\n";
             echo "<br>";
         }  
    ?>

    (6)<br>
    <?php

      $array = [ ["apple","red"], ["melon","green"], ["peach","pink"] ];

       foreach($array as $vals) {
        echo "$vals[0]";
        echo "($vals[1])";
        echo '<br>';
       }
     ?>

    <?php
 
      $array = [ ["apple","red"], ["melon","green"], ["peach","pink"] ];
      $array = 0;
 
      while ($array < 3) {
       echo "apple(red)";
       echo "<br>";
       echo "melon(green)";
       echo "<br>";
       echo "peach(pink)";
       echo "<br>";
       $array++;
      }
    ?>
</body>
</html>