

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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
    <link rel="stylesheet" href="./assets/css/about.css">
</head>
<body>
<div class="container">
<?php @include 'header.php';?>

<!-- about section -->
<section class="about">
    <img src="./assets/img/images/about-img.png" alt="">
    <h3>about us</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam voluptatum placeat magni doloribus iure. Quisquam deleniti eius rerum aspernatur eaque modi optio magnam ratione sed. Sint, alias voluptatem. Voluptatibus, quas!</p>
    <a href="contact.php" class="btn">contact us</a>
</section>

<!-- team section -->
<section class="team">
    <h1 class="heading">our team</h1>
    <div class="box-container">
        <div class="box">
            <img src="./assets/img/images/team-1.jpg" alt="">
            <h3>john deo</h3>
            <p>wedding planner</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/images/team-2.jpg" alt="">
            <h3>john deo</h3>
            <p>wedding planner</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
        
        <div class="box">
            <img src="./assets/img/images/team-3.jpg" alt="">
            <h3>john deo</h3>
            <p>wedding planner</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/images/team-4.jpg" alt="">
            <h3>john deo</h3>
            <p>wedding planner</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
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