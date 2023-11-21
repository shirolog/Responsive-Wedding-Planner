

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- swiper css -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

    <!-- lightgallery css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/css/lightgallery.min.css">

    <!-- common css -->
    <link rel="stylesheet" href="./assets/css/common.css">
    
    <!-- custom css -->
    <link rel="stylesheet" href="./assets/css/portfolio.css">
</head>
<body>
<div class="container">
<?php @include 'header.php';?>

<!-- portfolio section -->
<section class="portfolio">
    <h1 class="heading">our portfolio</h1>
    <div class="portfolio-container">
       <a href="./assets/img/images/port-img-1.jpg" class="box">
        <div class="image">
        <img src="./assets/img/images/port-img-1.jpg" alt="">
        </div>
        <h3>wedding ceremony</h3>
       </a>

       <a href="./assets/img/images/port-img-2.jpg" class="box">
        <div class="image">
        <img src="./assets/img/images/port-img-2.jpg" alt="">
        </div>
        <h3>wedding ceremony</h3>
       </a>

       <a href="./assets/img/images/port-img-3.jpg" class="box">
        <div class="image">
        <img src="./assets/img/images/port-img-3.jpg" alt="">
        </div>
        <h3>wedding ceremony</h3>
       </a>

       <a href="./assets/img/images/port-img-4.jpg" class="box">
        <div class="image">
        <img src="./assets/img/images/port-img-4.jpg" alt="">
        </div>
        <h3>wedding ceremony</h3>
       </a>

       <a href="./assets/img/images/port-img-5.jpg" class="box">
        <div class="image">
        <img src="./assets/img/images/port-img-5.jpg" alt="">
        </div>
        <h3>wedding ceremony</h3>
       </a>

       <a href="./assets/img/images/port-img-6.jpg" class="box">
        <div class="image">
        <img src="./assets/img/images/port-img-6.jpg" alt="">
        </div>
        <h3>wedding ceremony</h3>
       </a>

    </div>
</section>


<?php @include 'footer.php';?>
</div>



    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <!-- lightgallery js -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/js/lightgallery.min.js"></script>

    <!-- custom js -->
    <script src="./assets/js/app.js"></script>

</body>
</html>