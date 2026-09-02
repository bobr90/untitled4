<?php
// Включаем отображение ошибок, чтобы сразу видеть, если что-то пошло не так
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Устанавливаем часовой пояс
date_default_timezone_set('Europe/Moscow');

// Получаем текущий час
$currentHour = (int)date('G');

// Определяем приветствие в зависимости от времени суток
if ($currentHour >= 5 && $currentHour < 12) {
    $greeting = "Доброе утро";
} elseif ($currentHour >= 12 && $currentHour < 18) {
    $greeting = "Добрый день";
} elseif ($currentHour >= 18 && $currentHour < 23) {
    $greeting = "Добрый вечер";
} else {
    $greeting = "Доброй ночи";
}

// Выводим красивую HTML-страницу
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мой первый PHP-скрипт</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 { color: #2c3e50; }
        p { color: #7f8c8d; font-size: 1.1em; }
        .time { font-weight: bold; color: #2980b9; }
    </style>
</head>
<body>

<div class="card">
    <h1><?php echo $greeting; ?>, разработчb! 👋</h1>
    <p>Ваш PHP-интерпретатор на Mac успешно работает.</p>
    <p>Текущее время на компьютере: <span class="time"><?php echo date('H:i:s'); ?></span></p>
</div>

</body>
</html>
