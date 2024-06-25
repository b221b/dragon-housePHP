<?php
include_once 'db.php';

// Получаем данные из формы регистрации
$login = $_POST['login'];
$mail = $_POST['mail'];
$avatar = $_FILES['avatar']['name'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];

// Check if the username already exists in the database
$query = "SELECT * FROM Users WHERE Login = '$login'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Username already exists, display error message
?>
    <html>

    <head>
        <style>
            body {
                margin: 0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #f0f0f0;
            }

            .loader {
                width: 50%;
                /* адаптивный размер */
                max-width: 200px;
                /* максимальный размер */
                height: auto;
                margin: 0 auto;
            }
        </style>
    </head>

    <body>
        <img src="images/loadleave-leave.gif" class="loader" alt="Ошибка регистрации">
        <?php echo "Пользователь с именем $login уже существует"; ?>
        <meta http-equiv="refresh" content="<?php echo rand(4, 5); ?>; url=Index.php">
    </body>

    </html>
    <?php
} else {
    // Create a query to insert the data into the database
    $query = "INSERT INTO Users (Login, Mail, Avatar, Birthday, Password) VALUES ('$login', '$mail', '$avatar', '$birthday', '$password')";

    // Execute the query
    if (mysqli_query($conn, $query)) {
    ?>
        <html>

        <head>
            <style>
                body {
                    margin: 0;
                    height: 100vh;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #f0f0f0;
                }

                .loader {
                    width: 50%;
                    /* адаптивный размер */
                    max-width: 200px;
                    /* максимальный размер */
                    height: auto;
                    margin: 0 auto;
                }
            </style>
        </head>

        <body>
            <img src="images/loadleave-leave.gif" class="loader" alt="Вы успешно зарегистрировались!">
            <meta http-equiv="refresh" content="<?php echo rand(2, 5); ?>; url=Index.php">
        </body>

        </html>
    <?php
    } else {
    ?>
        <html>

        <head>
            <style>
                body {
                    margin: 0;
                    height: 100vh;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #f0f0f0;
                }

                .loader {
                    width: 50%;
                    /* адаптивный размер */
                    max-width: 200px;
                    /* максимальный размер */
                    height: auto;
                    margin: 0 auto;
                }
            </style>
        </head>

        <body>
            <img src="images/ОшибкаРегистрации.jpg" class="loader" alt="Ошибка регистрации">
            <?php echo "Ошибка регистрации: " . mysqli_error($conn); ?>
        </body>

        </html>
<?php
    }
}

// Закрываем соединение
mysqli_close($conn);
?>