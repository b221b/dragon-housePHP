<?php
include_once 'db.php';

// Validate the table name
$tableName = $_GET['table'];
$allowedTables = array('category', 'Messages', 'tovar', 'Users'); // list of allowed tables
if (!in_array($tableName, $allowedTables)) {
    die('Invalid table name');
}

// Создаем форму для добавления данных
echo "<h2>Добавить данных в таблицу $tableName</h2>";
echo "<form action='add.php' method='post'>";
echo "<table border='1'>";

// Получаем список полей для таблицы
$fields = mysqli_query($conn, "SHOW COLUMNS FROM `$tableName`"); // escape the table name
if ($fields) {
    while ($field = mysqli_fetch_array($fields)) {
        echo "<tr>";
        echo "<th>". htmlspecialchars($field[0]). "</th>";
        echo "<td><input type='text' name='". htmlspecialchars($field[0]). "'></td>";
        echo "</tr>";
    }
} else {
    echo "Error: ". mysqli_error($conn);
}

echo "</table>";
echo "<input type='submit' value='Добавить'>";
echo "</form>";

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы
    $data = array();
    foreach ($_POST as $key => $value) {
        $data[$key] = $conn->real_escape_string($value); // escape the values
    }

    // Добавляем данные в таблицу
    $fields = implode(', ', array_keys($data));
    $values = "'". implode("', '", $data). "'";
    $query = "INSERT INTO `$tableName` ($fields) VALUES ($values)"; // escape the table name
    mysqli_query($conn, $query);
    echo "Данные добавлены успешно!";
}

// Закрытие соединения
mysqli_close($conn);