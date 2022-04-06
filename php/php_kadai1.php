<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    (1)
    <?php
      $x = "Hello";
      $y = "hello";
      if (strcasecmp($x, $y) == 0) {
      echo 'xとyは大文字小文字関係なく等しい<br>';
          }
    ?>
    
    (2)
    <?php
    $x = 'こんにちは、'.'こんばんは。<br>';
    echo $x;
    ?>

    (3)
    <?php
        $x = 1;
        echo $x."個<br>";
    ?>

    (4)<br>
    <?php
        define("kz", "hello");
        echo kz . "\n<br>";
    ?>
    <?php
        const xyz = "world";
        echo xyz."\n<br>";
    ?>

    (5)<br>
    <?php
         $x = __LINE__;
         echo "$x<br>\n";

         $y = __FILE__;
         echo "$y\n<br>"
     ?>
     
     (6)<br>
     <?php
        $x = 300;
        echo 300 / 365;
        echo "<br>";
    ?>

    (7)<br>
    <?php
         $z = 1;
         echo "はじめは $z でした。<br>";
         $z++;
         echo "1増えて $z になりました。<br>";   
    ?>

    (8)<br>
    <?php
        $z = 1;
        echo "はじめは $z でした。<br>";
        $z--;
        echo "1減って $z になりました。<br>";
     ?>

     (9)<br>
     <?php
         $t = 1; $z = 1;
         
         echo "前置だと";
         echo (++$t);
         echo "になります。<br>";

         echo "後置だと";
         echo ($z++);
         echo "になります。<br>";
    ?>
     
     (10)
     <?php
        $x = 3; $y = 2;
        echo $x + $y;
        echo "<br>";
    ?> 

    (11)
    <?php
          $x = (string) 1234;
          var_dump($x);
          echo "<br>";
    ?>
    
    (12)
    <?php
         $locations = 3; 
         print $locations + 2;
         print "<br>";
    ?>
    
</body>
</html>