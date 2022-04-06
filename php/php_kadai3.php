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
       $i = rand(1,6);
       if ($i == 1) {
        echo "伊達政宗";
       } else if ($i == 2) {
        echo "真田幸村";
       } else if ($i == 3) {
        echo "徳川家康";
       } else if ($i == 4) {
        echo "長曾我部元親";
       } else if ($i == 5) {
        echo "前田慶次";
       } else {
        echo "上杉謙信";
       }
       echo "<br>";
    ?>

    (2)<br>
      <?php
       $i = rand(1,6);

       $z = ($i == 1)? "伊達政宗" : "真田幸村";

       echo  $z;
       echo "<br>";
       
     ?>

    (3)<br>
    <?php
         $animal = rand(1,4);
         switch ($animal) {
            case 1:
                echo "ライオン";
                break;
            case 2:
                echo "トリ";
                break;
            case 3:
                echo "サメ";
                break;
            case 4:
                echo "ウシ";
                break;
         }
         echo "<br>";
    ?>

    (4)<br>
    <?php
         $animal = rand(1,4);
         switch ($animal) {
            case 1:
                echo "ライオン";
                
            case 2:
                echo "トリ";
                break;
            case 3:
                echo "サメ";
                break;
            case 4:
                echo "ウシ";
                break;
         }
         echo "<br>";
    ?>

    (5)<br>
    <?php
         $animal = rand(1,6);
         switch ($animal) {
            case 1:
                echo "ライオン";
                break;
            case 2:
                echo "トリ";
                break;
            case 3:
                echo "サメ";
                break;
            case 4:
                echo "ウシ";
                break;
            default:
                echo "table users not found path to donfing";
         }
         echo "<br>";
    ?>

    (6)<br>
    <?php
         $animal = rand(1,4);
         switch ($animal) :
            case 1:
                echo "ライオン";
                break;
            case 2:
                echo "トリ";
                break;
            case 3:
                echo "サメ";
                break;
            case 4:
                echo "ウシ";
                break;
            endswitch;
            echo "<br>";
    ?>

    (7)<br>
    <?php
         $i = 0;
         while ($i < 10) {
             echo "$i 回目のループです";
             echo "<br>";
             $i++;
         }
        
    ?>

    (8)<br>
    <?php
            $i = 0;
            do {
                echo "$i 回目のループです";
                echo "<br>";
                $i++;
            } while($i < 10);     
     ?>

     (9)<br>
     <?php
           for ($counter = -3; $counter < 10; $counter++) {

               if($counter == 0){
                  break;
               }
               echo " 100 / $counter = ";
               echo (100 / $counter);
               echo "<br>";
           }
      ?>

      (10)<br>
      <?php
         for ($counter = -3; $counter < 10; $counter++) {

           if($counter == 0){
               continue;
        }
           echo " 100 / $counter = ";
           echo (100 / $counter);
           echo "<br>";
        }
      ?>
    

</body>
</html>