<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">



   <section class="flex">
   <!-- <nav class="navbar">
         <a href="dashboard.php">home</a><br><br>
         <a href="categories.php">categories</a><br><br>
         <a href="products.php">products</a><br><br>
         <a href="placed_orders.php">orders</a><br><br>
         <a href="admin_accounts.php">admins</a><br><br>
         <a href="users_accounts.php">users</a><br><br>
         <a href="messages.php">messages</a>
         <a href="update_profile.php">update profile</a>
         <a href="admin_logout.php">logout</a>

      </nav> -->
   <aside class="sidebar">
      <a href="dashboard.php" class="logo">
         <img src="../images/logo4.png" alt="Logo">
      </a><br><br><br>
      <nav class="navbar">
         <a href="dashboard.php">home</a><br><br>
         <a href="categories.php">categories</a><br><br>
         <a href="products.php">products</a><br><br>
         <a href="placed_orders.php">orders</a><br><br>
         <a href="admin_accounts.php">admins</a><br><br>
         <a href="users_accounts.php">users</a><br><br>
         <a href="messages.php">messages</a>
       

      </nav>
   </aside>

   <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div id="user-btn" class="fas fa-user"></div>
   </div>

   <div class="profile">
      <?php
         $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
         $select_profile->execute([$admin_id]);
         $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
      <p><?= $fetch_profile['name']; ?></p>
      <a href="update_profile.php" class="btn">update profile</a>
      <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
   </div>

</section>




<!-- <aside class="sidebar">
      <a href="dashboard.php" class="logo">
         <img src="../images/logo4.png" alt="Logo">
      </a><br><br><br>
      <nav class="navbar">
         <a href="dashboard.php">home</a><br><br>
         <a href="categories.php">categories</a><br><br>
         <a href="products.php">products</a><br><br>
         <a href="placed_orders.php">orders</a><br><br>
         <a href="admin_accounts.php">admins</a><br><br>
         <a href="users_accounts.php">users</a><br><br>
         <a href="messages.php">messages</a>
         <a href="update_profile.php">update profile</a>
         <a href="admin_logout.php">logout</a>

      </nav>
   </aside> -->


   
</header>











