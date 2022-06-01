<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Заварювання чаю</h1>
    <form action="index.php" method="POST">
        <input type="number" value="1" name="numberOfCups"><label for="">  кількість чашок</label>
        <p><input type="radio" value="200" name="o" id="ml1" checked><label for="ml1"> 200 мл</label></p>
        <p><input type="radio" value="300" name="o" id="ml2"><label for="ml2"> 300 мл</label></p>
        <p><input type="checkbox" name="sugar" id="sugar" value="1" checked disabled><label for="sugar"> цукор 1 л./100 мл</label></p>
        <p><input type="hidden" name="sugar" value="1"></p>
        <p><input type="submit" value="Зробити чай"></p>
    </form>
    <?php
        if($_POST){
            echo("<p>==================START==================</p>");
            echo(var_dump($_POST));

            $allWater = 100;
            $allSugar = 20;
            $allCups200 = 28;
            $allCups300 = 20;
            $allTea = 58;

            $numberOfCups = $_POST["numberOfCups"];
            $o = $_POST["o"];
            $sugar = $_POST["sugar"];

            $sugarInAllCups = 0;
            $waterInCups = 0;
            $timeOfWait = 0;
            $cups = 0;
            $numberOfCups2 = 0;

            echo("<p>Чайник закипів</p>");
            for($i = 1; $i <= $numberOfCups; $i++){
                
                echo("<p>налито $o мл води</p>");
                echo("<p>кружка повна</p>");
                $o2 = $o/100;
                echo("<p>опускаємо чайний пакетик</p>");
                echo("<p>чекаємо 2 хвилини</p>");
                echo("<p>виймаємо чайний пакетик</p>");
                echo("<p>кидаємо $o2 ложки цукру</p>");
                echo("<p>розмішуємо</p>");
                echo("<p>$i чашка чаю готова</p>");
                $numberOfCups2 += 1;
                
                if($numberOfCups2 > 0 && $numberOfCups2 < $numberOfCups){
                    echo("<p>беремо наступну кружку</p>");
                }   
                
                $sugarInAllCups = $sugarInAllCups+($o/100);
                $waterInCups += $o;
                $cups += 1;
                $timeOfWait += 2;
            }

            echo("<p>============</p>");
            echo("<p>Зроблено $cups чашок чаю ($o мл)</p>");
            echo("<p>All sugar: $sugarInAllCups л.</p>");
            echo("<p>All water: $waterInCups мл</p>");
            echo("All time: $timeOfWait хв");
            echo("<p>===================END===================</p>");

        }
    ?>
</body>
</html>
