<?php
include_once 'db.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Ошибка соединения: " . mysqli_connect_error());
}

$id = $_POST['id'];
$message = $_POST['message'];
$query = "UPDATE messages SET Message = '$message' WHERE ID = '$id'";
if (mysqli_query($conn, $query)) {
    echo "Сообщение обновлено";
    header('Location: profile.php');
} else {
    echo "Ошибка обновления сообщения: " . mysqli_error($conn);
}

mysqli_close($conn);
