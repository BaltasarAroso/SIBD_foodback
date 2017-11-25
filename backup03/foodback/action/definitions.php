<?php
  include ('../config/init.php');
  include ('../database/users.php');

  $username = $_SESSION['username'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  if($name){
    try {
      changeName($username,$name);
      $_SESSION['success_message'] = 'Name changed with success!';
      echo ($_SESSION['success_message']);
      $_SESSION['name'] = $name;
    } catch (PDOException $e) {
      $_SESSION['error_message'] = 'FAILLL!';
      echo ($_SESSION['error_message']);
      die(header('Location: ../definitions.php'));
    }
  }

  if($email){
    try {
      changeEmail($username,$email);
      $_SESSION['success_message'] = 'Email changed with success!';
      echo ($_SESSION['success_message']);
      $_SESSION['email'] = $email;
    } catch (PDOException $e) {
      $_SESSION['error_message'] = 'FAILLL!';
      echo ($_SESSION['error_message']);
      die(header('Location: ../definitions.php'));
    }
  }
  if($address){
    try {
      changeAddress($username,$address);
      $_SESSION['success_message'] = 'Address changed with success!';
      echo ($_SESSION['success_message']);
      $_SESSION['address'] = $address;
    } catch (PDOException $e) {
      $_SESSION['error_message'] = 'FAILLL!';
      echo ($_SESSION['error_message']);
      die(header('Location: ../definitions.php'));
    }
  }

  header('Location: ../definitions.php');
?>
