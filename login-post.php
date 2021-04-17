<?php
session_start();
require_once('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT COUNT(*) as total, id, name, email, password, role FROM users WHERE email ='$email'";
    $query = mysqli_query($db, $select);
    $assoc =mysqli_fetch_assoc($query);
    if ($assoc['total'] > 0) {
     $hash =$assoc['password'];
     if (password_verify($password, $hash)) {
     
      if ($assoc['role'] == 1) {
       $_SESSION['id']= $assoc['id'];
       $_SESSION['name']= $assoc['name'];
       $_SESSION['email']= $assoc['email'];
       $_SESSION['role']= $assoc['role'];
       header('location:dashboard/dashboard.php');
      }

     }
    }
    else {
     echo'not match';
    }
   }
?>