<style>
    body{
        background-image: url(../images/чайная_девушка2.jpg);
    }
</style>

<?php
include_once 'db.php';

// Получаем данные из формы регистрации
$login = $_POST['login'];
$mail = $_POST['mail'];
$avatar = $_FILES['avatar']['name'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];

// Создаем запрос на добавление данных в таблицу Users
$query = "INSERT INTO Users (Login, Mail, Avatar, Birthday, Password) VALUES ('$login', '$mail', '$avatar', '$birthday', '$password')";

// Выполняем запрос
if (mysqli_query($conn, $query)) {
    echo "<body style='background-image: url(images/мушуЗарегайся.png);'>";
    // echo "Вы успешно зарегистрировались!";
    echo "<meta http-equiv='refresh' content='2; url=Index.php'>";
} else {
    // echo "Ошибка регистрации: ". mysqli_error($conn);
    echo "<body style='background-image: url(images/ОшибкаРегистрации.jpg);'>";
}

// Закрываем соединение
mysqli_close($conn);
?>