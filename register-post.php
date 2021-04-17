<?php
require_once('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user_cheak = "SELECT COUNT(*) as total FROM users WHERE email ='$email'";
    $q = mysqli_query($db, $user_cheak);
    $after_assoc = mysqli_fetch_assoc($q);
    if ($after_assoc['total'] > 0) {
        header('location:register.php');
    } else {
        $insert = "INSERT INTO users (name, email, password) VALUES('$name', '$email','$password')";
        $query = mysqli_query($db, $insert);

        if ($query) {
            header('location:login.php');
        } else {
            echo 'Errors';
        }
    }
} else {
    header('location:register.php');
}
