

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pricing</title>

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
    <link rel="stylesheet" href="./assets/css/pricing.css">
</head>
<body>
<div class="container">
<?php @include 'header.php';?>


<!-- pricing section -->
<section class="pricing">
    <h1 class="heading">our pricing</h1>
    <div class="box-container">
        <div class="box">
            <h3>basic plan</h3>
        <div class="price">$250/-</div>
        <div class="list">
        <p><i class="fas fa-check"></i>phtotography</p>
        <p><i class="fas fa-check"></i>bride makeup</p>
        <p><i class="fas fa-check"></i>wedding ceremony</p>
        <p><i class="fas fa-check"></i>meals & drinks</p>
        <p><i class="fas fa-check"></i>gust invitations</p>
        </div>
        <a href="contact.php" class="btn">choose plan</a>
        </div>

        <div class="box">
            <h3>standard plan</h3>
        <div class="price">$650/-</div>
        <div class="list">
        <p><i class="fas fa-check"></i>phtotography</p>
        <p><i class="fas fa-check"></i>bride makeup</p>
        <p><i class="fas fa-check"></i>wedding ceremony</p>
        <p><i class="fas fa-check"></i>meals & drinks</p>
        <p><i class="fas fa-check"></i>gust invitations</p>
        </div>
        <a href="contact.php" class="btn">choose plan</a>
        </div>

        <div class="box">
            <h3>ultimate plan</h3>
        <div class="price">$1250/-</div>
        <div class="list">
        <p><i class="fas fa-check"></i>phtotography</p>
        <p><i class="fas fa-check"></i>bride makeup</p>
        <p><i class="fas fa-check"></i>wedding ceremony</p>
        <p><i class="fas fa-check"></i>meals & drinks</p>
        <p><i class="fas fa-check"></i>gust invitations</p>
        </div>
        <a href="contact.php" class="btn">choose plan</a>
        </div>
    </div>
</section>

<!-- reviews section -->
<section class="reviews">
    <h1 class="heading">happy clients</h1>

    <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="./assets/img/images/pic-1.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quidem cum possimus unde dolorem nulla fugiat, laborum aliquid qui ad.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="./assets/img/images/pic-2.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quidem cum possimus unde dolorem nulla fugiat, laborum aliquid qui ad.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="./assets/img/images/pic-3.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quidem cum possimus unde dolorem nulla fugiat, laborum aliquid qui ad.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="./assets/img/images/pic-4.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quidem cum possimus unde dolorem nulla fugiat, laborum aliquid qui ad.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="./assets/img/images/pic-5.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quidem cum possimus unde dolorem nulla fugiat, laborum aliquid qui ad.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <img src="./assets/img/images/pic-6.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quidem cum possimus unde dolorem nulla fugiat, laborum aliquid qui ad.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
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