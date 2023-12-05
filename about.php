<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div><br><br>




<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about2.jpg" alt="">
      </div>

      <div class="content">
         <h3>Who we are?</h3>
         <p>Tastbites is a platform that celebrates the stories behind homemade dishes, connecting passionate home cooks with a global audience. Whether you're a seasoned chef or a kitchen enthusiast, Tastbites offers a canvas to exhibit and sell culinary creations. The platform fosters a community that values the authenticity of homemade goodness, inviting users on a delectable journey where every bite is a savored story.</p>
      </div>

   </div><br><br>
<hr>
   <div class="row">

   <div class="image">
   <img src="images/about3.jpg" alt="">
</div>

   <div class="content">
   <h3> Our purpose</h3>
<p>Tastbites is not just an online marketplace; it's a mission to empower home cooks and build connections within a diverse community of food enthusiasts. The platform aims to enrich lives by facilitating the exchange of homemade creations, celebrating unique culinary stories, and making every meal a story worth savoring. Join Tastbites in embracing the spirit of homemade goodness, sparking creativity, and fostering connections through the rich tapestry of flavors contributed by passionate home cooks.</p>










   <!-- <a href="menu.php" class="btn">our menu</a> -->
</div>

</div><br><br>
<hr>

<div class="row">

<div class="image">
   <img src="images/about4.jpg" alt="">
</div>

<div class="content">
   <h3>Our future version</h3>
<p>In envisioning the future version of Tastbites, our goal is to create a more dynamic and immersive platform that goes beyond being a marketplace. We aim to be a global hub for home cooks and food enthusiasts, offering innovative features, culinary education, and a vibrant marketplace that celebrates the diverse world of homemade cuisine. The future Tastbites seeks to enhance the user experience, foster culinary exploration, and provide tools for home cooks to refine and showcase their craft, making every kitchen a gateway to a world of flavors.
</p>
   <!-- <a href="menu.php" class="btn">our menu</a> -->
</div>

</div>
</section><br><br>

<!-- about section ends -->







<!-- steps section starts  -->



<!-- <section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step1.png" alt="">
         <h3>choose order</h3>
      </div>

      <div class="box">
         <img src="images/step2.jpg" alt="">
         <h3>fast delivery</h3>
      </div>

      <div class="box">
         <img src="images/step3.jpg" alt="">
         <h3>enjoy food</h3>
      </div>

   </div>

</section> -->



<!-- steps section ends -->





















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- <script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script> -->

</body>
</html>