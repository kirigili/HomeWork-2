<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        echo '<b>Задание 1</b>' . '<br />';
        echo '<br />';
        $a = null;
        if (empty($a)) {
            echo 'Верно!';
        }else { 
            echo'Неверно!'; 
        } 
        echo '<hr />';

        //

        echo '<b>Задание 2</b>' . '<br />';
        echo '<br />';
        $num = 123;
        $num .= '';
        $num[1] = 0;
        $num = +$num;
        var_dump($num);
        echo '<hr />';
        
        //

        echo '<b>Задание 3</b>' . '<br />';
        echo '<br />';
        $a = 1;
        $b = 6;
        if ($a <= 1 && $b >= 3){
            echo $a + $b;
        }else {
            echo $a - $b;
        }
        echo '<hr />';
        
        //

        echo '<b>Задание 4</b>' . '<br />';
        echo '<br />';
        $str = 'abcde';
        if ($str[0] == 'a')
            echo 'Верно';
        else 
            echo 'Неверно';
        echo '<hr />';
        
        //

        echo '<b>Задание 5</b>' . '<br />';
        echo '<br />';
        $str = '123321';
        if ($str[0] + $str[1] + $str[2] == $str[3] + $str[4] + $str[5])
            echo 'Да';
        else
            echo 'Нет';
        echo '<hr />';
        
        //

        echo '<b>Задание 6</b>' . '<br />';
        echo '<br />';
        $n = 34;
        if  ($n >= 0 && $n < 30)
            echo 'Прошло меньше часа';
        if  ($n >= 30 && $n < 60)
            echo 'Прошел час';
        if  ($n >= 60 && $n < 90)
            echo 'Прошло два часа';
        if  ($n >= 90 && $n < 120)
            echo 'Прошло три часа';
        if  ($n >= 120 && $n < 150)
            echo 'Прошло четыре часа';
        if  ($n >= 150 && $n < 180)
            echo 'Прошло пять часов';
        if  ($n >= 180 && $n < 210)
            echo 'Прошло шесть часов';
        if  ($n >= 210 && $n < 240)
            echo 'Прошло семь часов';
        if  ($n >= 240 && $n < 270)
            echo 'Прошло восемь часов';
        if  ($n >= 270 && $n < 300)
            echo 'Прошло девять часов';
        if  ($n >= 300 && $n < 330)
            echo 'Прошло десять часов';
        if  ($n >= 330 && $n < 360)
            echo 'Прошло одинадцать часов';
        if  ($n == 360)
            echo 'Прошло двенадцать часов';
        if ($n > 360)
        echo 'Прошло очень много времени';
        echo '<hr />';
        
        //

        echo '<b>Задание 7</b>' . '<br />';
        echo '<br />';
        $sum = 0;
        for ($i = 20; $i < 46; $i++){
            if ($i % 5) continue;
                $sum += $i;
        }
        echo 'Сумма чисел равна ' . $sum;
        echo '<hr />';
        
        //

        echo '<b>Задание 8</b>' . '<br />';
        echo '<br />';
        $n = 12345;
        $n .= '';
        $n[1] = 0;
        $n[3] = 0;
        echo $n;
        echo '<hr />';
        
        //

        echo '<b>Задание 9</b>' . '<br />';
        echo '<br />';
        $n = 1000;
        $num = 0;
        while ($n >= 50) {
            $n /=2;
            $num ++;
        }
        echo "Результат деления: {$n}<br>\n";
        echo "Количество итераций: {$num}<br>\n";

        $n = 1000;
        $num = 0;
        for (; $n >= 50;){
            $n /=2;
            $num ++;           
        }
        echo "Результат деления: {$n}<br>\n";
        echo "Количество итераций: {$num}<br>\n";
        echo '<hr />';
        
        //

        echo '<b>Задание 10</b>' . '<br />';
        echo '<br />';
        $n = 6;
        for ($i = 1; $i <= $n; $i++){
            for ($j = 1; $j <= $n +1; $j++){
                echo '*';
            }
            echo '*' . '<br />';
        }
            
        echo '<hr />';


    ?>

</body>
</html>