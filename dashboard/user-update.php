<?php
require_once '../db.php';
session_start();

$id = $_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$update_status = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
if (mysqli_query($db, $update_status)) {
    $_SESSION['update_user'] = 'User updated successfully';
    header("location:users.php?user_id='$id'");
}


// $delete = "DELETE FROM users WHERE id = $id ";
// if (mysqli_query($db, $delete)) {
//     $_SESSION['delete_user'] = 'deleted user successfully';
//     header('location:users.php');
// }
