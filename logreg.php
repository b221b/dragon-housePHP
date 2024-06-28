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
    <title>Регистрация</title>
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
                            <a class="nav-link" href="index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Чаи</a>
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
    <!-- REGISTRATION start -->

    <div logreg>

        <!-- Форма регистрации -->
        <style>
            form {
                width: 500px;
                background-color: #fff;
                padding: 20px;
                border: 1px solid #ccc;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin: 0 auto;
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="date"],
            input[type="file"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }

            #switch-button {
                display: block;
                margin: 20px auto;
                width: 130px;
                text-align: center;
            }
        </style>

        <br><br><br><br><br><br>
        <div id="registration-form">
            <form action="register.php" method="post">
                <h2>Регистрация</h2>
                <label for="login">Логин:</label>
                <input type="text" id="login" name="login" required><br><br>
                <label for="mail">Email:</label>
                <input type="email" id="mail" name="mail" required><br><br>
                
                <!-- <label for="avatar">Аватар:</label>
                <input type="file" id="avatar" name="avatar" accept=".png,.jpg,.jpeg"><br><br> -->
                
                <label for="birthday">Дата рождения:</label>
                <input type="date" id="birthday" name="birthday" required><br><br>
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Зарегистрироваться">
            </form>
        </div>

        <!-- Форма авторизации -->
        <div id="login-form" style="display: none;">
            <form action="login.php" method="post">
                <h2>Авторизация</h2>
                <label for="login">Логин:</label>
                <input type="text" id="login" name="login" required><br><br>
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Войти">
            </form>
        </div>

        <button id="switch-button">Войти</button>

        <script>
            const switchButton = document.getElementById("switch-button");
            const registrationForm = document.getElementById("registration-form");
            const loginForm = document.getElementById("login-form");

            switchButton.addEventListener("click", () => {
                if (registrationForm.style.display === "none") {
                    registrationForm.style.display = "block";
                    loginForm.style.display = "none";
                    switchButton.innerText = "Войти";
                } else {
                    registrationForm.style.display = "none";
                    loginForm.style.display = "block";
                    switchButton.innerText = "Зарегистрироваться";
                }
            });
        </script>

    </div>

    <!-- REGISTRATION end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding margin_top90">
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