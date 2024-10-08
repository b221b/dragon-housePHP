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
   <title>Галерея</title>
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
                     <a class="nav-link" href="gallery.php">Чаи</a>
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
   <!-- gallery section start -->
   <div class="gallery_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="gallery_taital">Наши чаи</h1>
               <p class="gallery_text">Наш ассортимент включает в себя широкий спектр сортов, от знаменитого улуна до
                  редких и дорогих сортов пуэра. Мы также предлагаем различные аксессуары для чайной церемонии, такие
                  как чайники, чашки и блюдца.</p>
            </div>
         </div>

         <!-- <div class="">
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="container_main">
                        <img src="images/церемония.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                           <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="container_main">
                        <img src="images/церемония2.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                           <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="container_main">
                        <img src="images/церемония3.jpeg" alt="Avatar" class="image">
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
                        <img src="images/церемония4.jpeg" alt="Avatar" class="image">
                        <div class="overlay">
                           <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="container_main">
                        <img src="images/чабань.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="seemore_bt"><a href="#">Подробнее</a></div> -->

         <div выборка из бд>

            <style>
               .category-block {
                  margin-bottom: 20px;
               }

               .category-info {
                  padding: 20px;
               }

               .category-info h2 {
                  font-size: 24px;
                  margin-top: 0;
                  color: #333;
               }

               .category-info p {
                  font-size: 16px;
                  color: #666;
               }

               .category-info.label {
                  font-weight: bold;
                  color: #337ab7;
               }

               .category-info.value {
                  font-size: 18px;
                  color: #333;
               }

               .products-block {
                  display: flex;
                  flex-wrap: wrap;
                  justify-content: center;
               }

               .product-block {
                  background-color: #fff;
                  border-radius: 10px;
                  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                  padding: 20px;
                  margin: 20px;
                  width: 250px;
                  display: inline-block;
               }

               .product-image {
                  width: 100%;
                  height: 150px;
                  overflow: hidden;
                  border-radius: 10px 10px 0 0;
               }

               .product-image img {
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  border-radius: 10px 10px 0 0;
               }

               .product-info {
                  padding: 20px;
               }

               .product-info h2 {
                  font-size: 18px;
                  margin-top: 0;
                  color: #333;
               }

               .product-info p {
                  font-size: 14px;
                  color: #666;
               }

               .product-info.label {
                  font-weight: bold;
                  color: #337ab7;
               }

               .product-info.value {
                  font-size: 16px;
                  color: #333;
               }

               hr {
                  border-top: 2px solid #ccc;
                  margin: 10px 0;
               }
            </style>

            <?php
            include_once 'db.php';

            // Fetch data from category table
            $sql = "SELECT ID, Name, Opisanie FROM category";
            $result = mysqli_query($conn, $sql);

            // Check if there are any results
            if (mysqli_num_rows($result) > 0) {
               // Display data in a beautiful way
               while ($row = mysqli_fetch_assoc($result)) {
            ?>
                  <div class="category-block">
                     <div class="category-info">
                        <h2><?php echo $row['Name']; ?></h2>
                        <p><span class="label">Описание:</span> <span class="value"><?php echo $row['Opisanie']; ?></span></p>
                     </div>

                     <!-- Display products for each category -->
                     <div class="products-block" data-category-id="<?php echo $row['ID']; ?>">
                        <?php
                        // Fetch products for this category
                        $sql = "SELECT * FROM tovar WHERE CategoryID = " . $row['ID'];
                        $productsResult = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($productsResult) > 0) {
                           while ($productRow = mysqli_fetch_assoc($productsResult)) {
                        ?>
                              <div class="product-block">
                                 <div class="product-image">
                                    <img src="images/пуэр.jpg <?php echo $productRow['Image']; ?>" alt="<?php echo $productRow['Name']; ?>">
                                 </div>
                                 <div class="product-info">
                                    <h2><a href="<?php echo $productRow['Image']; ?>"><?php echo $productRow['Name']; ?></a></h2>
                                    <p><span class="label">Описание:</span> <span class="value"><?php echo $productRow['Opisanie']; ?></span></p>
                                    <hr>
                                    <p><span class="label">Цена:</span> <span class="value"><?php echo $productRow['Price']; ?></span></p>
                                 </div>
                              </div>
                        <?php
                           }
                        } else {
                           echo "<p>Нет в наличии</p>";
                        }
                        ?>
                     </div>

                  </div>

            <?php
               }
            } else {
               echo "No categories found.";
            }

            // Close connection
            mysqli_close($conn);
            ?>

         </div>
      </div>
   </div>
   <!-- gallery section end -->
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