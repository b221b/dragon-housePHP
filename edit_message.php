<style>
    /* Стили для формы редактирования сообщения */
    .message-form {
        font-size: 18px;
        margin-bottom: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 60%;
        margin-left: 20px;
    }

    .message-zagolovok {
        font-size: 20px;
        margin-bottom: 20px;
        width: 60%;
        margin-left: 20px;
        font-weight: bold;
        font-style: italic;
        /* background-color: #4CAF50; */
        color: black;
        padding: 10px;
        border: 1px solid black;
        border-radius: 15px 0 15px 0;
    }

    .message-data textarea {
        width: 100%;
        height: 200px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: none;
    }

    .message-data input[type=submit] {
        width: 200px;
        height: 50px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
    }

    .message-data input[type=submit]:hover {
        background-color: #3e8e41;
    }

    .submit-button {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    .submit-button:hover {
        background-color: #3e8e41;
    }
</style>

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

echo "<div class='message-form'>";
echo "<div class='message-zagolovok'>Редактирование сообщения</div>";
echo "<form action='update_message.php' method='post'>";
echo "<input type='hidden' name='id' value='" . $id . "'>";
echo "<div class='message-data'>";
echo "<textarea name='message'>" . $message_data['Message'] . "</textarea>";
echo "</div>";
echo "<input type='submit' value='Сохранить изменения' class='submit-button'>";
echo "</form>";
echo "</div>";

mysqli_close($conn);
?>