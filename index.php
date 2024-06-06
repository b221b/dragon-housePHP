<?php
include_once 'db.php';
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
        <div class="logo">Дом Дракона</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Главная</a>
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
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!--header section end -->
  <!-- banner section start -->
  <div class="banner_section layout_padding">
    <div class="container">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="row">
              <div class="col-sm-12">
                <div class="banner_taital">
                  <h1 class="outstanding_text">Дом Дракона</h1>
                  <h1 class="coffee_text">Чайная</h1>
                  <p class="there_text">Расширь свой чайный опыт с нашей коллекцией изысканных китайских
                    сортов. Присоединяйся к нам сегодня!</p>
                  <div class="learnmore_bt"><a href="#">Подробнее</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-12">
                <div class="banner_taital">
                  <h1 class="outstanding_text">Дом Дракона </h1>
                  <h1 class="coffee_text">Чайная</h1>
                  <p class="there_text">Перенесись в далекий Восток с нашим ассортиментом чая. Качество,
                    которое вы заслуживаете.</p>
                  <div class="learnmore_bt"><a href="#">Подробнее</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-12">
                <div class="banner_taital">
                  <h1 class="outstanding_text">Дом Дракона </h1>
                  <h1 class="coffee_text">Чайная</h1>
                  <p class="there_text">Стань частью чайной культуры Китая. Исследуй наш выбор чайных сортов
                    сегодня.</p>
                  <div class="learnmore_bt"><a href="#">Подробнее</a></div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- banner section end -->
  <!-- about section start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about_taital_main">
            <div class="about_taital">О нас</div>
            <p class="about_text">Добро пожаловать на наш сайт, посвященный китайской чайной культуре. Мы рады
              представить вам наши уникальные сорта китайского чая, которые были тщательно подобраны нашими
              специалистами.
            </p>
            <p class="about_text">Наша компания была основана любителями чая, которые стремились познакомить
              российских ценителей с настоящим вкусом и ароматом китайского чая. Мы сотрудничаем с лучшими
              чайными фермами Китая, которые выращивают и обрабатывают наши сорта в соответствии с традиционными
              методами.
            </p>
            <div class="read_bt"><a href="#">Подробнее</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about_img"><img src="images/дракон.jpeg"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->
  <!-- gallery section start -->
  <div class="gallery_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="gallery_taital">Наши чаи</h1>
          <p class="gallery_text">Наш ассортимент включает в себя широкий спектр сортов, от знаменитого улуна до
            редких и дорогих сортов пуэра. Мы также предлагаем различные аксессуары для чайной церемонии, такие
            как чайники, чашки и блюдца.
          </p>
        </div>
      </div>

      <div class="">

        <div class="gallery_section_2">
          <div class="row">
            <div class="col-md-4">
              <div class="container_main">
                <img src="images/габба.jpg" alt="Avatar" class="image">Габба
                <div class="overlay">
                  <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="container_main">
                <img src="images/пуэр.jpg" alt="Avatar" class="image">Шу пуэр
                <div class="overlay">
                  <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="container_main">
                <img src="images/улун.jpg" alt="Avatar" class="image">Молочный улун
                <div class="overlay">
                  <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="gallery_section_2">
          <div class="row">
            <div class="col-md-4">
              <div class="container_main">
                <img src="images/красный.jpeg" alt="Avatar" class="image">Красный дянь хун
                <div class="overlay">
                  <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
      <div class="seemore_bt"><a href="#">Подробнее</a></div>
    </div>
  </div>

  <!-- gallery section end -->
  <!-- services section start -->
  <div class="services_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="services_taital">Сервисы</h1>
          <p class="services_text">Чай для души! Получите лучшие сорта чая с доставкой по всей стране!</p>
        </div>
      </div>
      <div class="services_section_2">
        <div class="row">
          <div class="col-lg-4 col-sm-12 col-md-4">
            <div class="box_main active">
              <div class="house_icon">
                <img src="images/icon1.png" class="image_1">
                <img src="images/icon1.png" class="image_2">
              </div>
              <h3 class="decorate_text">Пить чай - это искусство!</h3>
              <p class="tation_text">Закажите чайную продукцию на нашем сайте и насладитесь лучшими сортами! </p>
              <div class="readmore_bt"><a href="#">Подробнее</a></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-4">
            <div class="box_main">
              <div class="house_icon">
                <img src="images/icon2.png" class="image_1">
                <img src="images/icon2.png" class="image_2">
              </div>
              <h3 class="decorate_text">Доставка чая прямо к вам домой! </h3>
              <p class="tation_text">Закажите онлайн и получите лучшие сорта чая в кратчайшие сроки!</p>
              <div class="readmore_bt"><a href="#">Подробнее</a></div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-4">
            <div class="box_main">
              <div class="house_icon">
                <img src="images/icon3.png" class="image_1">
                <img src="images/icon3.png" class="image_2">
              </div>
              <h3 class="decorate_text">Чай - это не только напиток, это эмоция!</h3>
              <p class="tation_text">Закажите чайную продукцию на нашем сайте и насладитесь моментом!</p>
              <div class="readmore_bt"><a href="#">Подробнее</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- services section end -->
  <!-- testimonial section start -->

  <!-- <div class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="client_taital">Отзывы</h1>
          <p class="client_text">Отзывы наших любимых клиентов</p>
        </div>
      </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="client_section_2">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="testimonial_section_2">
                    <h4 class="client_name_text">Мирослав Дзандарович<span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                    <p class="customer_text">О боже о боже, это самий лучший чй которий я пиль в сваей жизнь!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="client_section_2">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="testimonial_section_2">
                    <h4 class="client_name_text">Дмитрицше Титаренко<span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                    <p class="customer_text">Можно делать вечно 3 вещи: смотреть как течет вода, смотреть как
                      горит огонь, и пить лемончеллу</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="client_section_2">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="testimonial_section_2">
                    <h4 class="client_name_text">Аноним <span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                    <p class="customer_text">чай внатуре пушка</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- testimonial section end -->

  <!-- PHP test -->

  <div class="client_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="client_taital">Отзывы</h1>
          <p class="client_text">Отзывы наших любимых клиентов</p>
        </div>
      </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <?php
        $already_shown = array(); // массив уже отображенных отзывов
        for ($i = 0; $i < 3; $i++) {
          do {
            $sql = "SELECT * FROM Messages ORDER BY RAND() LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
          } while (in_array($row['ID'], $already_shown));
          $already_shown[] = $row['ID']; // добавляем отзыв в массив уже отображенных
        ?>
          <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
            <div class="client_section_2">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="testimonial_section_2">
                      <h4 class="client_name_text"><?= htmlspecialchars($row['Name']) ?><span class="quick_icon"><img src="images/quick-icon.png"></span></h4>
                      <p class="customer_text"><?= htmlspecialchars($row['Message']) ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <!-- PHP test end -->

  <!-- testimonial section end -->
  <!-- contact section start -->
  <div class="contact_section layout_padding">
    <div class="container">
      <h1 class="contact_text">Связаться с нами</h1>
    </div>
  </div>
  
  <div class="contact_section_2 layout_padding">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-6 padding_0">
          <div class="mail_section">
            <div class="email_text">
              <form action="send_message.php" method="post">
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Имя" name="name" required>
                </div>
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Почта" name="Email" required>
                </div>
                <div class="form-group">
                  <textarea class="massage-bt" placeholder="Сообщение" rows="5" id="comment" name="Massage" required></textarea>
                </div>
                <div class="send_btn">
                  <div type="text" class="main_bt"><input type="submit" value="Отправить"></div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-6 padding_0">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3831.10021723342!2d39.712859661850594!3d47.23620567845806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3bbd25efc8dab%3A0xe71795934da757ba!2z0JTQvtC90YHQutC-0Lkg0LPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INGC0LXRhdC90LjRh9C10YHQutC40Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgg!5e0!3m2!1sru!2sru!4v1717487879917!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact section end -->
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