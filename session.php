<?php
// Инициализируем сессию
session_start();

// Проверяем, существует ли сессия
if (isset($_SESSION['user'])) {
    // Получаем данные пользователя из сессионной переменной
    $user = $_SESSION['user'];

    // Проверяем, существует ли пользователь в таблице Users
    $query = "SELECT * FROM Users WHERE Login = '$user[Login]'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
        // Если пользователя нет в таблице, удаляем сессию и перенаправляем на страницу авторизации
        unset($_SESSION['user']);
        header('Location: logreg.php');
        exit;
    }

    // Выводим приветствие для пользователя с ссылкой на страницу профиля
    echo "<span class='nav-link'><a href='profile.php'>Привет, ". $user['Login']. "!</a></span>";
} else {
    // Если сессии нет, перенаправляем пользователя на страницу авторизации
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