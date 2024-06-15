<?php
// Инициализируем сессию
session_start();

// Проверяем, существует ли сессия
if (isset($_SESSION['user'])) {
    // Получаем данные пользователя из сессионной переменной
    $user = $_SESSION['user'];

    // Выводим приветствие для пользователя с ссылкой на страницу профиля
    echo "<span class='nav-link'><a href='profile.php'>Привет, " . $user['Login'] . "!</a></span>";
} else {
    // Если сессии нет, перенаправляем пользователя на страницу авторизации
    // echo "<span class='nav-link'><a href='profile.php'>Привет, anonymous!</a></span>";
    header('Location: Login.php');
}

?>

<form action="Logout.php" method="post" class="center">
    <input type="submit" value="Выйти" class="learnmore_bt">

    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        a {
            color: #f76d37;
        }
    </style>
</form>

<?php
if (isset($_SESSION['user']) && $_SESSION['user']['Role'] == 3) {
    echo '<form action="adminka.php" method="post" class="center"><input type="submit" value="Админка" class="learnmore_bt a"></form>';
}
?>