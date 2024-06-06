<?php
include_once 'db.php';

// Получаем данные из формы авторизации
$login = $_POST['login'];
$password = $_POST['password'];

// Создаем запрос на авторизацию
$query = "SELECT * FROM Users WHERE Login = '$login' AND Password = '$password'";

// Выполняем запрос
$result = mysqli_query($conn, $query);

// Проверяем результат
if (mysqli_num_rows($result) > 0) {
    echo "<body style='background-image: url(images/дракон.jpg);'>";
    echo "Вы успешно авторизовались!";
    echo "<meta http-equiv='refresh' content='2; url=Index.php'>";
    // Здесь можно установить сессию и авторизовать пользователя
} else {
    echo "Ошибка авторизации: неверный логин или пароль";
}

// Закрываем соединение
mysqli_close($conn);
?>
