<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- FONT AWESOME for icons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>At our thrift store, we're dedicated to offering a unique shopping experience that's not only budget-friendly but also environmentally conscious. Here's why you should choose us:</p>
         <ul>
            <li><p><b>Curated Selection:</b> We handpick each item in our store to ensure quality and variety, offering a curated collection of pre-loved treasures.</p></li>
            <li><p><b>Affordable Prices:</b> Our thrift store offers unbeatable prices on a wide range of items, allowing you to find hidden gems without breaking the bank.</p></li>
            <li><p><b>Community Impact:</b> We're committed to giving back to the community by supporting local charities and initiatives through our sales and donations.</li>
         </ul>
      </div>

   </div>

</section>


<section class="reviews">

   <h1 class="title">Customer Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"I absolutely love shopping at this thrift store! The variety of items available is amazing, and I always find unique pieces for my home and wardrobe."</p>
         <h3>John Smith</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"The prices at this thrift store are unbeatable! However, I've noticed that the organization of items could be improved."</p>
         <h3>Jane Doe</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>"I've been a loyal customer of this thrift store for years, and it never disappoints! The staff is friendly, and the quality of items is excellent."</p>
         <h3>Sarah Johnson</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I appreciate the effort put into curating the selection at this thrift store. However, I'd love to see more diversity in sizes and styles."</p>
         <h3>Emily Rodriguez</h3>
      </div>

      <div class="box">
        <img src="images/pic-5.png" alt="">
         <p>"This thrift store has become my go-to spot for unique gifts! I always find something special for my friends and family, and it's so affordable."</p>
         <h3>Michael Brown</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.jpg" alt="">
         <p>"I've had mixed experiences at this thrift store. While I've found some great deals, there have been times when the items were overpriced."</p>
         <h3>Tanya Martinez</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>