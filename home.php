

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- swiper css -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

    <!-- common css -->
    <link rel="stylesheet" href="./assets/css/common.css">

    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<div class="container">
<?php @include 'header.php';?>

<!-- home section -->
<section class="home">
    <div class="swiper  home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(./assets/img/images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <h3>plan your wedding!</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem illo corporis eum, expedita molestiae dolores possimus aliquam minus. Unde, eligendi?</p>
                    <a href="about.php" class="btn">discover more</a>
                </div>        
            </div>

            <div class="swiper-slide slide" style="background: url(./assets/img/images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <h3>plan your wedding!</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem illo corporis eum, expedita molestiae dolores possimus aliquam minus. Unde, eligendi?</p>
                    <a href="about.php" class="btn">discover more</a>
                </div>        
            </div>

            <div class="swiper-slide slide" style="background: url(./assets/img/images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <h3>plan your wedding!</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem illo corporis eum, expedita molestiae dolores possimus aliquam minus. Unde, eligendi?</p>
                    <a href="about.php" class="btn">discover more</a>
                </div>        
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- services section -->
<section class="services">
    <h1 class="heading">our services</h1>

    <div class="swiper service-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide">
            <img src="./assets/img/images/service-1.jpg" alt="">
            <div class="content">
                <h3>photography</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, ea!</p>
                <a href="about.php" class="btn">about us</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <img src="./assets/img/images/service-2.jpg" alt="">
            <div class="content">
                <h3>wedding registory</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, ea!</p>
                <a href="about.php" class="btn">about us</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <img src="./assets/img/images/service-3.jpg" alt="">
            <div class="content">
                <h3>guest list</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, ea!</p>
                <a href="about.php" class="btn">about us</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <img src="./assets/img/images/service-4.jpg" alt="">
            <div class="content">
                <h3>wedding cake</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, ea!</p>
                <a href="about.php" class="btn">about us</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <img src="./assets/img/images/service-5.jpg" alt="">
            <div class="content">
                <h3>wedding ceremony</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, ea!</p>
                <a href="about.php" class="btn">about us</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <img src="./assets/img/images/service-6.jpg" alt="">
            <div class="content">
                <h3>fine dining</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, ea!</p>
                <a href="about.php" class="btn">about us</a>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section>

<?php @include 'footer.php';?>
</div>


    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="./assets/js/app.js"></script>
</body>
</html>