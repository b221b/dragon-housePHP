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

    echo "<body style='background-image: url(images/ТыЗарегался.png);'>";
    // echo "Вы успешно авторизовались!";
    echo "<meta http-equiv='refresh' content='2; url=Index.php'>";
} else {
    // echo "Ошибка авторизации: неверный логин или пароль";
    echo "<meta http-equiv='refresh' content='2; url=logreg.php'>";
}

// Закрываем соединение
mysqli_close($conn);
?>