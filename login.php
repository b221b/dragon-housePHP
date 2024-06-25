<?php
include_once 'db.php';

// Инициализируем сессию
session_start();

// Получаем данные из формы авторизации
$login = $_POST['login'];
$password = $_POST['password'];

// Создаем запрос на авторизацию
$query = "SELECT * FROM Users WHERE Login = '$login' AND Password = '$password'";

// Выполняем запрос
$result = mysqli_query($conn, $query);

// Проверяем результат
if (mysqli_num_rows($result) > 0) {
    // Сохраняем данные пользователя в сессионных переменных
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $user;

?>
    <html>

    <head>
        <style>
            body {
                margin: 0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #f0f0f0;
            }

            .loader {
                width: 50%;
                /* адаптивный размер */
                max-width: 200px;
                /* максимальный размер */
                height: auto;
                margin: 0 auto;
            }
        </style>
    </head>

    <body>
        <img src="images/loadleave-leave.gif" class="loader" alt="Loading...">
        <meta http-equiv="refresh" content="<?php echo rand(2, 5); ?>; url=Index.php">
    </body>

    </html>
<?php
} else {
?>
    <html>

    <head>
        <meta http-equiv="refresh" content="0; url=logreg.php">
    </head>

    <body>
        <!-- Ошибка авторизации: неверный логин или пароль -->
    </body>

    </html>
<?php
}

// Закрываем соединение
mysqli_close($conn);
?>