<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
    <!--=============== FONTS ===============-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Lora:wght@500;600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="#">
        <input type="text" placeholder="Enter your email" required>
        <input type="password" placeholder="Enter your password" required>
        <a href="#">Forgot password?</a>
        <a href="../home.php"><input type="button" class="button" value="Login"></a>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="#">
        <input type="text" placeholder="Enter your email" required>
        <input type="password" placeholder="Create a password" required>
        <input type="password" placeholder="Confirm your password" required>
        <a href="../home.php"><input type="button" class="button" value="Signup"></a>
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>