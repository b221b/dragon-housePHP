<?php
// Инициализируем сессию
session_start();

// Удаляем сессионные переменные
unset($_SESSION['user']);

// Уничтожаем сессию
session_destroy();

// Перенаправляем пользователя на страницу авторизации
header('Location: Login.php');
?>