<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    (1)<br>
    <?php
        $x = array("月曜日","火曜日","水曜日","木曜日","金曜日");

        foreach ($x as $key) {
            echo $key;
            echo "<br>";
        }
    ?>

    (2)<br>
    <?php
        $x = array ("dog" => "犬", "text" => "教科書", "japan" => "日本");
        
        foreach ($x as $key => $value) {
                echo $key;
                echo "=>";
                echo $value;
                echo "<br>";
        }
    ?>

    (3)<br>
    <?php
          $x = array("月曜日", "犬","日本");

          foreach ($x as $key) {
              echo $key;
              echo "<br>";
          }    
    ?>

    (4)<br>
    <?php
        $x = ["月曜日", "火曜日", "水曜日", "木曜日", "金曜日", ];

        for ($i = 0; $i < count($x); $i++) {
            $count = (string) $i;
            echo $count;
            echo $x[$i];
            echo "<br>";
        } 

        $y = ["dog=>犬", "text=>教科書", "japan=>日本"];

        for ($i = 0; $i < count($y); $i++) {
            $count = (string) $i;
            echo $count;
            echo $y[$i];
            echo "<br>";
        }   
    ?>

    (5)<br>
    <?php
        $me = [
            "名前" => "金子",
            "趣味" => [
                "動物" => [
                    "犬" => [
                        "犬の名前" => "チワワ",
                        "性格" => "明るい",
                        "出生" => "メキシコ",
                    ]
                ],
            ]
        ];

        $x = "趣味";
        $y = "動物";
        $z = "犬";

        $dog = $me[$x][$y][$z];

        foreach($dog as $key => $value){
            echo $key;
            echo "=>";
            echo $value;
            echo "<br>";
        }
    ?>

</body>
</html>