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
   <title>Kitchens</title>

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
   <h3>our Kitchens</h3>
   <p><a href="home.php">home</a> <span> / Kitchens</span></p>
</div>

<!-- menu section starts  -->



<section class="category">

   

   

   <div class="card-container">
   <?php
      $select_categories = $conn->prepare("SELECT * FROM categories ");
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
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>
   
    
    <br>
</div>



</section>
<!-- menu section ends -->
























<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->








<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>