<?php

  session_start();

  if(isset($_SESSION['username'])){

    $_SESSION['msg'] = "You must log in first to view this page";
    header("location: login.php");
  }

if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
error_reporting(0);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="UTF-8">
     <title>Home</title>
       <link href="homepage.css" rel="stylesheet" type="text/css"  >
   </head>
   <body>



<?php

  if(isset($_SESSION['success'])) : ?>

<div>
    <h3>
<?php
  echo $_SESSION['success'];
  unset($_SESSION['success']);
 ?>
    </h3>
</div>

<?php endif ?>


<?php if(!isset($_SESSION['username'])) : ?>

  <h3> <strong> <?php  echo 'Welcome ' . $_SESSION['username']; ?> </strong></h3>



<button><a href="index.php?logout='1'"> Logout</a> </button>


<header>
  <nav>
    <ul>
      <li><a href="order.html" > Order </a></li>
      <li><a href="points.html"> Your Points </a></li>
      <li><a href="reviews.html"> Leave a Review </a></li>
    </ul>
  </nav>
</header>

<img src="https://images.pexels.com/photos/842519/pexels-photo-842519.jpeg?cs=srgb&dl=pexels-brett-jordan-842519.jpg&fm=jpg"
 alt="wallpaper" width=100% height=1000px />

<!--
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
    $(document).ready(function() {
      $(h3).text("Changed");
    });

</script>
-->

<?php endif ?>

   </body>
 </html>
