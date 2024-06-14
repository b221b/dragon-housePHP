<?php
include_once 'db.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Ошибка соединения: " . mysqli_connect_error());
}

$id = $_POST['id'];
$query = "DELETE FROM Messages WHERE ID = '$id'";
if (mysqli_query($conn, $query)) {
    echo "Сообщение удалено";
    header('Location: profile.php');
} else {
    echo "Ошибка удаления сообщения: " . mysqli_error($conn);
}

mysqli_close($conn);
