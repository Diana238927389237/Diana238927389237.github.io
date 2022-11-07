<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fiesta Food</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <style>
    html,
    body,
    header,
    .carousel{
      height: 60vh;
    }
    @media (max-width: 740px){
     html,
    body,
    header,
    .carousel{
      height: 100vh;
    }
    @media (min-width: 800px) and (max-width: 850px;){
     html,
    body,
    header,
    .carousel{
      height: 100vh;
    }
  }
}
  </style>
</head>
<body>

  <!-- Start your project here-->
  <nav class=" navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
     <div class="container">
       <a href="#" class="navbar-brand waves-effect">
         <strong class="green-text">Fiesta Food</strong>
       </a>
       <button class="navbar-toggler" type="button"
       data-toggle="collapse" data-target="#navbarContent"
       aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarContent"></div>
       <ul class="navbar-nav mr-auto">
         <li class="nav-item">
           <a href="index.html" class="nav-link waves-effect">Главная</a>
         </li>

         <li class="nav-item active">
           <a href="Cabinet.php" class="nav-link waves-effect">Аккаунт</a>
         </li>
       </ul>

       <ul class="navbar-nav nav-flex-icons">
         
         <li class="nav-item">
           <a href="#" class="nav-link waves-effect">
            <i class="fab fa-facebook"></i>
          </a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link waves-effect">
            <i class="fab fa-twitter"></i>
          </a>
         </li>
       </ul>
     </div>
  </nav>

  <main class="mt-5">
<div class="container">
<div class="mask d-flex justify-content-center align-items-center">

<div class="container py-5 my-5">
<!--Grid row-->
<div class="row d-flex align-items-center justify-content-center">
<!--Grid column-->
<div class="col-md-3 col-xl-10">

<p class="h2 mt-5">Личный кабинет</p>
<hr>

<?php
session_start();
$name = $_SESSION['logged_user1'];
$lastname = $_SESSION['logged_user2'];
$email = $_SESSION['logged_user3'];
echo "<p> Ваше имя: $name</p>";
echo "<p> Ваша фамилия: $lastname</p>";
echo "<p> Ваша почта: $email</p>";
?>
   <a href="exit.php" class="btn btn-danger btn-rounded">Выйти</a>
</div>
</div>
</div>
</div>




</div>
</main>

  <footer class="page-footer font-small stylish-color-dark pt-3 fixed-bottom">
   <ul class="list-unstyled list-inline text-center py-2">
     <li class="list-inline-item">
       <a href="reg.html" class="btn btn-danger btn-rounded">Зарегистрироватся</a>
     </li>
     <li class="list-inline-item">
       <a href="auth.html" class="btn btn-danger btn-rounded">Войти</a>
     </li>
   </ul>



   <ul class="list-unstyled list-inline text-center">
     <li class="list-inline-item">
       <a class="btn-floating btn-fb mx-1">
         <i class="fab fa-instagram"> </i>
       </a>
     </li>
     <li class="list-inline-item">
       <a class="btn-floating btn-tw mx-1">
         <i class="fab fa-vk"> </i>
       </a>
     </li>
     <li class="list-inline-item">
       <a class="btn-floating btn-gplus mx-1">
         <i class="fab fa-youtube"> </i>
       </a>
     </li>
   </ul>
 </footer>
</body>
</html>
