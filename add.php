<?php
include_once 'db.php';

// Проверка и очистка имени таблицы из GET-параметра
$tableName = isset($_GET['table']) ? mysqli_real_escape_string($conn, $_GET['table']) : '';

if ($tableName) {
    // Создание формы для добавления данных
    echo "<h2>Добавление данных в таблицу $tableName</h2>";
    echo "<form action='add.php' method='post'>";
    echo "<input type='hidden' name='table' value='$tableName'>";
    echo "<table border='1'>";

    // Получение списка полей в таблице
    $fields = mysqli_query($conn, "SHOW COLUMNS FROM `$tableName`");
    if ($fields) {
        $fieldNames = array();
        while ($field = mysqli_fetch_array($fields)) {
            $fieldName = $field['Field'];
            if ($field['Extra'] == 'auto_increment') {
                continue; // Skip auto-increment fields
            }
            echo "<tr>";
            echo "<th>$fieldName</th>";
            if ($fieldName == 'CategoryID') {
                // Create a dropdown list for CategoryID
                $categories = mysqli_query($conn, "SELECT ID, Name FROM category");
                echo "<td><select name='CategoryID'>";
                while ($category = mysqli_fetch_array($categories)) {
                    echo "<option value='" . $category['ID'] . "'>" . $category['Name'] . "</option>";
                }
                echo "</select></td>";
            } else {
                echo "<td><input type='text' name='$fieldName'></td>";
            }
            echo "</tr>";
            $fieldNames[] = $fieldName;
        }

        echo "<tr>";
        echo "<td colspan='2'><input type='submit' value='Добавить'></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
    } else {
        echo "Ошибка: Невозможно получить информацию о полях таблицы.";
    }
}

// Обработка отправки формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tableName = mysqli_real_escape_string($conn, $_POST['table']);
    $fields = array();
    $values = array();
    foreach ($_POST as $key => $value) {
        if ($key != 'table') {
            $fields[] = $key;
            $values[] = "'" . mysqli_real_escape_string($conn, $value) . "'";
        }
    }

    $fieldsStr = implode(', ', $fields);
    $valuesStr = implode(', ', $values);

    $query = "INSERT INTO `$tableName` ($fieldsStr) VALUES ($valuesStr)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Данные добавлены успешно!";
        header('Location: adminka.php');
    } else {
        echo "Ошибка: Невозможно добавить данные в таблицу.";
    }
}

// Закрытие соединения
mysqli_close($conn);
