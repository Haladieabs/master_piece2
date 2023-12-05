<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php include 'components/user_header.php'; ?>




<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide1-22222.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="menu.php" class="btn">see menus</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/burger.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="menu.php" class="btn">see menus</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/1202218121252410473.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="menu.php" class="btn">see menus</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- end swiper -->



<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/abou.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
<p>Tastbites is a specialized online platform designed exclusively for the buying and selling of homemade food. The website serves as a dedicated marketplace, providing a convenient space for home cooks to showcase and sell their culinary creations. With a sole focus on homemade delights, Tastbites is committed to creating a seamless experience for both sellers and buyers in the realm of homemade gastronomy.</p>
         <a href="about.php" class="btn">Read more</a>
      </div>

   </div>

</section>

<section class="category">

   <h1 class="title">OUR KITCHENS</h1>

   <div class="card-container">

   <?php
      $select_categories = $conn->prepare("SELECT * FROM categories limit 4 ");
      $select_categories->execute();
      if($select_categories->rowCount() > 0){
         while($fetch_categories = $select_categories->fetch(PDO::FETCH_ASSOC)){
            $category_id = $fetch_categories['id'];
            $category_name = $fetch_categories['name'];
            $category_image = $fetch_categories['image'];
   ?>
      <div class="card">
         <img src="uploaded_img/<?= $category_image; ?>" alt="">
         <a href="category.php?category=<?= $category_name; ?>" class="btn">Shop Now</a>
      </div>

      <?php
         }
      }
   
      
   else{
      echo '<p class="empty">no Kitchens added yet!</p>';
   }
   ?>
   </div>

 
<div style="display: flex; justify-content: center; align-items: center">
  <a href="menu.php" class="btn" style="/* Your button styles here */">View All</a>
</div> 


</section><br><br>






<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>Delicious MANSAF</h3>
               <a href="contact.php" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="project images/mansaf.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>Chezzy Hamburger</h3>
               <a href="about.php" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src="project images/burger-1.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>order online</span>
               <h3>CheeseCAKE</h3>
               <a href="menu.html" class="btn">see menus</a>
            </div>
            <div class="image">
               <img src=" project images/dessert-6.png" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
<!-- <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cookies2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="menu.php" class="btn">see menus</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/burger.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="menu.php" class="btn">see menus</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/1202218121252410473.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="menu.php" class="btn">see menus</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->















<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>