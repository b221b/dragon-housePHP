<?php
include_once 'db.php';

// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['Email'];
$message = $_POST['Massage'];

// Запись данных в базу данных
$sql = "INSERT INTO Messages (ID_User, Name, Mail, Message) VALUES (NULL, '$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "Сообщение отправлено успешно!";
} else {
  echo "Ошибка отправки сообщения: ". mysqli_error($conn);
}

mysqli_close($conn);
?>