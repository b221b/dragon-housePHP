<?php
include_once 'db.php';

// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['Email'];
$message = $_POST['Massage'];

// Запись данных в базу данных
$sql = "INSERT INTO Messages (ID_User, Name, Mail, Message) VALUES (NULL, '$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "<div style='font-size: 35px;'>Сообщение успешно отправлено!</div>";
  echo "<meta http-equiv='refresh' content='2; url=Index.php'>";
  // header('Location: index.php');
  // exit;
} else {
  echo "Ошибка отправки сообщения: ". mysqli_error($conn);
}

mysqli_close($conn);
?>