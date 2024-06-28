<?php
include_once 'db.php';

// Получаем данные из формы регистрации
$login = $_POST['login'];
$mail = $_POST['mail'];
$avatar = $_FILES['avatar']['name'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];

// Проверяем, существует ли уже пользователь с таким логином
$query = "SELECT * FROM Users WHERE Login = '$login'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Логин уже существует, выводим сообщение об ошибке
    displayError("Пользователь с именем $login уже существует");
} else {
    // Создаем запрос на вставку данных в БД
    $query = "INSERT INTO Users (Login, Mail, Avatar, Birthday, Password) VALUES ('$login', '$mail', '$avatar', '$birthday', '$password')";

    // Выполняем запрос
    if (mysqli_query($conn, $query)) {
        displaySuccess();
    } else {
        displayError("Ошибка регистрации: " . mysqli_error($conn));
    }
}

// Закрываем соединение
mysqli_close($conn);

// Функции для отображения сообщений
function displayError($message)
{
    echo "<html><head><style>" . getStyles() . "</style></head><body>";
    echo "<img src='images/loadleave-leave.gif' class='loader' alt='Ошибка регистрации'>";
    echo $message;
    echo "<meta http-equiv='refresh' content='" . rand(4, 5) . "; url=Index.php'>";
    echo "</body></html>";
}

function displaySuccess()
{
    echo "<html><head><style>" . getStyles() . "</style></head><body>";
    echo "<img src='images/loadleave-leave.gif' class='loader' alt='Вы успешно зарегистрировались!'>";
    echo "<meta http-equiv='refresh' content='" . rand(2, 5) . "; url=Index.php'>";
    echo "</body></html>";
}

function getStyles()
{
    return "body { margin: 0; height: 100vh; display: flex; justify-content: center; align-items: center; background-color: #f0f0f0; }
            .loader { width: 50%; max-width: 200px; height: auto; margin: 0 auto; }";
}
