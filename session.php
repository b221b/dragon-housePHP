<?php
// Инициализируем сессию
session_start();

// Проверяем, существует ли сессия
if (isset($_SESSION['user'])) {
    // Получаем данные пользователя из сессионной переменной
    $user = $_SESSION['user'];

    // Выводим приветствие для пользователя
    echo "<span class='nav-link'>Привет, " . $user['Login'] . "!</span>";
} else {
    // Если сессии нет, перенаправляем пользователя на страницу авторизации
    header('Location: Login.php');
}
?>

<form action="Logout.php" method="post" class="center">
    <input type="submit" value="Выйти" class="learnmore_bt">

    <style кнопка выйти>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</form>