<?php include('connection.php') ?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="images/icons/favicon.jpg"/>
  
</head>

<body>

  <div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Please login to proceed</h1>
    </header>
    
    <form class="form" method="post" action="connection.php">
          <?php include('errors.php'); ?>

        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" name="username"/>
        </div>

        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" name="password"/>
        </div>
        
        <button class="btn" type="submit" name="login_user">Login</button>
        <p>
      Not yet a member? <a href="register1.php">Sign up</a>
    </p>
    </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
