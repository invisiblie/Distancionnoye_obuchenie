<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Пример веб-страницы</title>
</head>

<body>
    <?php
    //3.1
    $num = 123;
    echo '3.1', '<br>', $num, '<br>';

    //5.1
    $str = 'hello';
    echo '<br>', '5.1', '<br>', $str, '<br>';

    //5.3
    $a = 'hello';
    $b = 'world';
    echo '<br>', '5.3', '<br>', $a, ' ', $b, '<br>';

    //5.5
    echo '<br>','5.5', '<br>', mb_strlen('абвгд'), '<br>';

    //7.1
    $isAdult = true;
    echo '<br>', '7.1', '<br>';
    var_dump($isAdult);
    echo '<br>';

    //9.1
    echo '<br>', '9.1', '<br>', 60 * 60 * 24, '<br>';

    //9.3
    echo '<br>', '9.3', '<br>', 60 * 60 * 24 * 365, '<br>';

    //9.5
    echo '<br>', '9.5', '<br>', 60 * 24 * 365, '<br>';

    //9.7
    echo '<br>', '9.7', '<br>', 1024 * 1024 * 1024, '<br>';

    //9.9
    echo '<br>', '9.9', '<br>', 1024 * 1024 * 1024 * 1024 * 1024, '<br>';

    //9.11
    $r = 10;
    $s = 3.14 * (pow($r, 2));
    echo '<br>', '9.11', '<br>', $s, '<br>';

    //9.13
    $a1 = 10;
    $b1 = 5;
    $s1 = $a1 * $b1;
    echo '<br>', '9.13', '<br>', $s1, '<br>';

    //9.15
    $tc = 20;
    $tf = $tc * 9 / 5 + 32;
    echo '<br>', '9.15', '<br>', $tf, '<br>';

    //11.1
    $test = '12345';
    echo '<br>', '11.1', '<br>';
    var_dump((int) $test);
    echo '<br>';


    //11.3
    $test1 = (int) '12.345';
    echo '<br>', '11.3', '<br>';
    var_dump($test1);
    echo '<br>';

    //11.5
    $test2 = (string) 12.345;
    echo '<br>', '11.5', '<br>';
    var_dump($test2);
    echo '<br>';

    //13.3
    $num1 = 47;
    $num1 += 7;
    $num1 -= 18;
    $num1 *= 10;
    $num1 /= 15;
    echo '<br>', '13.3', '<br>', $num1, '<br>';

    //15.1
    $arr = ['a', 'b', 'c'];
    echo '<br>', '15.1', '<br>', $arr, '<br>';
    var_dump($arr);
    echo '<br>';

    //15.3
    $brr = ['a', 'b', 'c', 'd'];
    echo '<br>', '15.3', '<br>', $brr[0], '+', $brr[1], '+', $brr[2], '+', $brr[3], '<br>';

    //15.5
    $mas = [2, 5, 3, 9];
    $mas1 = $mas[0] * $mas[1];
    $mas2 = $mas[2] * $mas[3];
    $result = $mas1 + $mas2;
    echo '<br>', '15.5', '<br>', $result, '<br>';

    //17.1
    $brr1 = [3 => 'a', 4 => 'b', 1 => 'c', 2 => 'd'];
    echo '<br>', '17.1', '<br>', $brr1[3], '<br>';

    //19.1
    $crr = ['a' => 1, 'b' => 2, 'c' => 3];
    $crr[1] = '!';
    $crr[2] = '?';
    $crr[3] = '@';
    echo '<br>', '19.1', '<br>';
    var_dump($crr);
    echo '<br>';

    //21.1
    $drr = [1, 2, 3, 4, 5];
    $key1 = 1;
    $key2 = 2;
    echo '<br>', '21.1', '<br>', $drr[$key1] + $drr[$key2], '<br>';

    ?>
</body>

</html>