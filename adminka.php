<?php
include_once 'db.php';

// Инициализируем сессию
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Дом Дракона</title>
  <link rel="icon" href="images/dragon.png" sizes="190x190">

  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
  <!--header section start -->
  <div class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <div class="logo"><a href="index.html"><img src="images/logo4.png"></a></div> -->
        <!-- <div class="logo"><a href="index.html">123</div> -->
        <div class="logo" style="cursor: pointer;" onclick="location.href='Index.php';">Дом Дракона</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">О нас</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">Галлерея</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Сервисы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Наши контакты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">

              <?php include_once 'session.php'; ?>

            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!--header section end -->

  <!-- ADMINKA -->

  <?php

  // Получение списка таблиц в базе данных
  $tables = mysqli_query($conn, "SHOW TABLES");

  // Цикл по таблицам
  while ($table = mysqli_fetch_array($tables)) {
    $tableName = $table[0];
    echo "<h2>Таблица: $tableName</h2>";
    echo "<table border='1'>";

    // Получение списка полей в таблице
    $fields = mysqli_query($conn, "SHOW COLUMNS FROM $tableName");
    echo "<tr>";
    while ($field = mysqli_fetch_array($fields)) {
      echo "<th>$field[0]</th>";
    }
    echo "<th>Действия - <a href='add.php?table=$tableName'>Добавить</a></th>";
    echo "</tr>";

    // Выборка данных из таблицы
    $result = mysqli_query($conn, "SELECT * FROM $tableName");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      foreach ($row as $cell) {
        echo "<td>$cell</td>";
      }
      echo "<td>"; // добавляем ячейку для кнопок
      echo "<a href='delete.php?table=$tableName&id={$row['ID']}'>Удалить</a> ";
      echo " | "; // кнопка удалить
      echo "<a href='edit.php?table=$tableName&id={$row['ID']}'>Изменить</a> ";
      echo "</td>";
      echo "</tr>";
    }

    echo "</table>";
  }

  // Закрытие соединения
  mysqli_close($conn);
  ?>

  <!-- ADMINKA END -->

  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <h3 class="useful_text">О нас</h3>
          <p class="footer_text">Мы рады
            представить вам наши уникальные сорта китайского чая, которые были тщательно подобраны нашими
            специалистами. Наша компания была основана любителями чая, которые стремились познакомить
            российских ценителей с настоящим вкусом и ароматом китайского чая. Мы сотрудничаем с лучшими
            чайными фермами Китая, которые выращивают и обрабатывают наши сорта в соответствии с традиционными
            методами.</p>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h3 class="useful_text">Меню</h3>
          <div class="footer_menu">
            <ul>
              <li><a href="index.html">Главная</a></li>
              <li><a href="about.html">О нас</a></li>
              <li><a href="gallery.html">Галерея</a></li>
              <li><a href="services.html">Сервисы</a></li>
              <li><a href="contact.html">Наши контакты</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h3 class="useful_text">Полезные ссылки</h3>
          <div class="footer_menu">
            <ul>
              <li><a href="https://vk.com/sinisterspirit">Автор</a></li>
              <li><a href="https://vk.com/id449396104">Соавтор</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h1 class="useful_text">Наши контакты</h1>
          <div class="location_text">
            <ul>
              <li>
                <a href="#">
                  <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Адрес :
                    ДГТУ</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Номер :
                    +011234567890</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Почта :
                    demo@gmail.com</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">2024 All Rights Reserved. Design by <a href="https://vk.com/sinisterspirit">Miroslav
          Titarenko</a></p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>