<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="icon" type="image/png" href="images/icons/favicon.jpg"/>
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Please fill in all of your details below</h1>
    </header>
    
    <form class="form" method="post" action="register.php">
          <?php include('errors.php'); ?>

        <div class="form__group">
            <input type="text" placeholder="Full Name" class="form__input" name="fullname"/>
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" name="username" />
        </div>

        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" name="email"/>
        </div>

        <div class="form__group">
            <input type="text" placeholder="Delivery Address" class="form__input" name="address"/>
        </div>

        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" name="password_1"/>
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Confirm Password" class="form__input" name="password_2"/>
        </div>
        
        <button class="btn" type="submit" name="reg_user">Register</button>
        <p>
      Already a member? <a href="login1.php">Sign in</a>
    </p>
    </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
