<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 9</title>
</head>
<body>

<?php
function getPhoto() {
    $dir = './photo';
    $file = scandir($dir);
    $count = count($file);
    for ($i = 2; $i < $count; $i++) {
        $path = $dir . DIRECTORY_SEPARATOR . $file[$i];
        echo '<a href="' . $path . '" target="_blank"><img src=' . $path . ' width=200px height=120px style="margin: 10px;"></a>';
    }
}
getPhoto();

function getLog(){
    $log_dir = __DIR__ . DIRECTORY_SEPARATOR . 'logs';
    $file_path = $log_dir . DIRECTORY_SEPARATOR . 'log.txt';
    $log_data = explode(PHP_EOL, file_get_contents($file_path));
    $logNum = file_get_contents($log_dir . DIRECTORY_SEPARATOR . '/logNumber.txt');
    $stringCount = count($log_data) - 1;
   
    if ($stringCount >= 10)
    {
        rename($log_dir . '/log.txt', $log_dir . '/log' . $logNum . '.txt');
        $logNum = $logNum + 1;
        file_put_contents($log_dir . '/logNumber.txt', $logNum);
    }

    date_default_timezone_set('Asia/Yekaterinburg');
    $date= date("r");
    file_put_contents($file_path,$date . PHP_EOL, FILE_APPEND);
}
getLog();
?>