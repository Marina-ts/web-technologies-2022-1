<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 8</title>
</head>
<body>

<h1>Задание 1</h1>
<?php
$a = $_GET['a'];
$b = $_GET['b'];

echo "a = $a;<br> b = $b;<br>";

if ($a >= 0 & $b >= 0)
    echo $a - $b;
else
    if ($a < 0 & $b < 0)
        echo $a * $b;
    else echo $a + $b;
?>



<h1>Задание 2</h1>
<?php
$a = mt_rand(0, 15);

switch ($a) {
    case 0: echo $a++ . ", ";
    case 1: echo $a++ . ", ";
    case 2: echo $a++ . ", ";
    case 3: echo $a++ . ", ";
    case 4: echo $a++ . ", ";
    case 5: echo $a++ . ", ";
    case 6: echo $a++ . ", ";
    case 7: echo $a++ . ", ";
    case 8: echo $a++ . ", ";
    case 9: echo $a++ . ", ";
    case 10: echo $a++ . ", ";
    case 11: echo $a++ . ", ";
    case 12: echo $a++ . ", ";
    case 13: echo $a++ . ", ";
    case 14: echo $a++ . ", ";
    case 15: echo $a++;
}
?>


<h1>Задание 3</h1>
<?php
$arg1 = mt_rand(1, 20);
$arg2 = mt_rand(1, 20);

echo "arg1 = $arg1;<br> arg2 = $arg2;<br>";

$operation = "+";

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+": return $arg1+$arg2; break;
        case "-": return $arg1-$arg2; break;
        case "*": return $arg1*$arg2; break;
        case "/": return $arg1/$arg2; break;
    }
}
echo $arg1, $operation, $arg2, " = ", mathOperation($arg1, $arg2, $operation);
?>


<h1>Задание 4</h1>
<?php
$year = date("Y");
echo "Текущий год: " , $year;
?>


<h1>Задание 5</h1>
<?php
$i = 0;
do {
    if ($i == 0) {
        echo $i . "– это ноль <br>";
        $i++;}
    elseif ($i % 2 != 0) {
        echo $i . "– нечётное число <br>";
        $i++;}
    else {
        echo $i . "– чётное число <br>";
        $i++;}
} while ($i <= 10);
?>


<h1>Задание 6</h1>
<?php
$region = [
    "Московская область:" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область:" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область:" => ["Рязань", "Ряжск", "Шацк", "Касимов", "Михайлов"]
];

foreach ($region as $oblast => $cities) {
    echo $oblast . "<br>";
    for ($i = 0; $i < count($cities); $i++) {
        if ($i == count($cities) - 1) {
            echo $cities[$i] . "." . "<br>";}
        else {
            echo $cities[$i] . ", ";}
    }
}
?>


<h1>Задание 7</h1>
<?php
$alphabet = [
    "а"=>"a",
    "б"=>"b",
    "в"=>"v",
    "г"=>"g",
    "д"=>"d",
    "е"=>"e",
    "ё"=>"e",
    "ж"=>"zh",
    "з"=>"z",
    "и"=>"i",
    "й"=>"i",
    "к"=>"k",
    "л"=>"l",
    "м"=>"m",
    "н"=>"n",
    "о"=>"o",
    "п"=>"p",
    "р"=>"r",
    "с"=>"s",
    "т"=>"t",
    "у"=>"u",
    "ф"=>"f",
    "х"=>"kh",
    "ц"=>"tc",
    "ч"=>"ch",
    "ш"=>"sh",
    "щ"=>"shch",
    "ъ"=>'',
    "ы"=>"y",
    "ь"=>'',
    "э"=>"e",
    "ю"=>"yu",
    "я"=>"ya"
];
echo strtr("проверка задания",$alphabet);
?>


<h1>Задание 8</h1>
<?php
$menu = [
    "Меню 1" => ["Подменю 1" => ["Вложенное подменю 1","Вложенное подменю 2"], "Подменю 2", "Подменю 3" => ["Вложенное подменю 1","Вложенное подменю 2"]],
    "Меню 2" => ["Подменю 1" => ["Вложенное подменю 1","Вложенное подменю 2"]]
];

function renderMenu($arr){
    foreach ($arr as $menu => $submenu) {
        if(is_array($submenu)) {
            echo "<li>" . $menu . "</li>";
            echo "<ul>";
            renderMenu($submenu);
            echo "</ul>";}
        else {
            echo "<li>" . $submenu . "</li>";}
    }
}

renderMenu($menu);
?>
</body>
</html>