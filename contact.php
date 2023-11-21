<?php 
require('./connect.php');

if(isset($_POST['send'])){
  $name = $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $number = $_POST['number'];
  $number = filter_var($number, FILTER_SANITIZE_STRING);
  $plan = $_POST['plan'];
  $plan = filter_var($plan, FILTER_SANITIZE_STRING);
  $address = $_POST['address'];
  $address = filter_var($address, FILTER_SANITIZE_STRING);
  $message = $_POST['message'];
  $message = filter_var($message, FILTER_SANITIZE_STRING);

  $insert_form = $conn->prepare("INSERT INTO  `contact_form` (name, email, number, plan, address, message)
  VALUES(?, ?, ?, ?, ?, ?)");
  $insert_form->execute(array($name, $email, $number, $plan, $address, $message));
  header('Location:contact.php');
  exit();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

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
    <link rel="stylesheet" href="./assets/css/contact.css">
</head>
<body>
<div class="container">
<?php @include 'header.php';?>

<!-- contact section -->
<section class="contact">
  <h1 class="heading">contact us</h1>

  <form action="" method="post">
  <div class="flex">
    <div class="inputBox">
      <span>your name</span>
      <input type="text" placeholder="enter your name" name="name" required>
    </div>

    <div class="inputBox">
      <span>your email</span>
      <input type="email" placeholder="enter your email" name="email" required>
    </div>

    <div class="inputBox">
      <span>your number</span>
      <input type="number" placeholder="enter your number" name="number" required>
    </div>

    <div class="inputBox">
      <span>choose plan</span>
      <select name="plan">
        <option value="basic">basic plan</option>
        <option value="premium">premium plan</option>
        <option value="ultimate">ultimate plan</option>
      </select>
    </div>

    <div class="inputBox">
      <span>your address</span>
      <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
    </div>
    
    <div class="inputBox">
      <span>your message</span>
      <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
    </div>
    
  </div>
  <input type="submit" value="send message" name="send" class="btn">
  </form>
</section>

<?php @include 'footer.php';?>
</div>


    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="./assets/js/app.js"></script>
</body>
</html>