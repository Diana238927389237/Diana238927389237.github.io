<?php
    $firstname = filter_var(trim($_POST['FirstName']),
    FILTER_SANITIZE_STRING);
    $lastname = filter_var(trim($_POST['LastName']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['Email']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['Password']),
    FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['Phone']),
    FILTER_SANITIZE_STRING);

    if (mb_strlen($firstname) == 0 || mb_strlen($firstname) > 15) {
      echo "Введите имя";
      exit();
    }
    if (mb_strlen($lastname) == 0 || mb_strlen($lastname) > 15) {
      echo "Введите фамилию";
      exit();
    }
    if (mb_strlen($phone) < 11 || mb_strlen($phone) > 11) {
      echo "В номере 11 чисел";
      exit();
    }

    $mysql = new mysqli('localhost','root','','shop');
    $mysql->query("INSERT INTO `users` (`firstname`, `lastname`, `email`, `pass`, `phone`)
    VALUES('$firstname', '$lastname', '$email', '$password', '$phone')");
    $mysql->close();
    header('location:index.html')
 ?>
