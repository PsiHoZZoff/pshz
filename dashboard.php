<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Медиа</title>
</head>
<body>
    <div class="container">
        <h1>Добро пожаловать в медиа-базу!</h1>
        <a href="logout.php" class="button">Выйти</a>
        <h2>Ваши медиа файлы:</h2>
        <video width="600" controls>
            <source src="media/some_media_file.mp4" type="video/mp4">
            Ваш браузер не поддерживает видео.
        </video>
    </div>
</body>
</html>
