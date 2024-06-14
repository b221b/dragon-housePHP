<?php
include_once 'db.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Ошибка соединения: " . mysqli_connect_error());
}

$id = $_POST['id'];
$query = "SELECT Message FROM messages WHERE ID = '$id'";
$result = mysqli_query($conn, $query);
$message_data = mysqli_fetch_assoc($result);

echo "<form action='update_message.php' method='post'>";
echo "<input type='hidden' name='id' value='" . $id . "'>";
echo "<textarea name='message'>" . $message_data['Message'] . "</textarea>";
echo "<input type='submit' value='Сохранить изменения'>";
echo "</form>";

mysqli_close($conn);
