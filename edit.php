<?php
include_once 'db.php';

// Получение ID записи, которую нужно изменить
$id = $_GET['id'];
$tableName = $_GET['table'];

// Получение данных из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_data = array();
    foreach ($_POST as $key => $value) {
        $new_data[$key] = $value;
    }

    // Обновление данных в БД
    $query = "UPDATE `$tableName` SET ";
    foreach ($new_data as $field => $value) {
        $query .= "`$field` = '$value', ";
    }
    $query = rtrim($query, ", ") . " WHERE ID = $id";
    if (mysqli_query($conn, $query)) {
        echo "Данные изменены успешно!";
        header('Location: adminka.php');
    } else {
        echo "Ошибка изменения данных: " . mysqli_error($conn);
    }
}

// Получение данных из БД для отображения в форме
$query = "SELECT * FROM `$tableName` WHERE ID = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Форма для изменения данных
echo "<form method='post'>";
foreach ($row as $field => $value) {
    echo "<label>$field:</label><br>";
    echo "<input type='text' name='$field' value='$value'><br>";
}
echo "<input type='submit' value='Сохранить'>";
echo "</form>";

// Закрытие соединения
mysqli_close($conn);
