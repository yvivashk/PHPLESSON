<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 11</title>
</head>
<body>
<h1>ООП на языке PHP, классы и объекты</h1>

    <?php
        // подключаем файл с классом Point
        require 'point.php';

        // создаём объект
        $point_1 = new Point; // в переменную point_1 помещаем объект класса Point
        $point_1->x = 13; // присваиваем переменной х которая находится в классе Point значение 13
        $point_1->y = 15; // присваиваем переменной y которая находится в классе Point значение 15

        // Выводим значения переменных на экран
        echo $point_1->x;
    ?>
</body>
</html>
