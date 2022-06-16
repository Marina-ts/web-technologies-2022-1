<?php
$h1 = "Заголовок первого уровня";
$title = "Заголовок";
$year = date("Y");
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= $title ?></title>
    </head>
    <body>
    <h1><?= $h1 ?></h1>
    <h1>Текущий год: <?= $year ?></h1>
    </body>
    </html>

<?php
date_default_timezone_set('Asia/Yekaterinburg');

$h = date("H");
$m = date("i");

if ($h == 1 || $h == 21) {
    $hours = ' час';}
elseif ($h >= 5 && $h <= 20){
    $hours = ' часов';}
else {
    $hours = ' часа';}

if (($m < 20) && ($m > 10)) {
    $minutes = ' минут';}
elseif ((($m % 10) >= 2) && (($m % 10) <= 4)) {
    $minutes = ' минуты';}
elseif (($m % 10) === 1) {
    $minutes = ' минута';}
else {
    $minutes = ' минут';}

echo "Текущее время: $h $hours $m $minutes";
?>