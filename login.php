<?php include('server.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
  <link href="style.css" rel="stylesheet" type="text/css"  >
  </head>
  <body>

<div class="container">
  <div class="header">

    <h2>Log In </h2>
  </div>

  <form action = "index.php" method="post">

    <div>
        <label for="username"> Username : </label>
        <input type="text" name="username" required>
    </div>

    <div>
        <label for="password_1"> Password :</label>
        <input type="password" name="password_1" required>
    </div>


    <button type="submit" name="login_user"> Log In</button>
    <p>Not a user? <a href="registration.php"> <b>Register Here </b> </a></p>

  </form>










</div>




  </body>
</html>
