<?php
include_once 'db.php';

// Получение ID записи, которую нужно удалить
$id = $_GET['id'];
$tableName = $_GET['table'];

// Удаление записи из базы данных
$query = "DELETE FROM `$tableName` WHERE ID = $id";
if (mysqli_query($conn, $query)) {
    echo "Запись удалена успешно!";
    header('Location: adminka.php');
} else {
    echo "Ошибка удаления записи: ". mysqli_error($conn);
}

// Закрытие соединения
mysqli_close($conn);
?>