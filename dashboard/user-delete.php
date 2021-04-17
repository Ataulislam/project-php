<?php
require_once '../db.php';
session_start();

$id = $_GET['user_id'];
$update_status = "UPDATE users SET status = 2 WHERE id = $id";
if (mysqli_query($db, $update_status)) {
    $_SESSION['delete_user'] = 'deleted user successfully';
    header('location:users.php');
}


// $delete = "DELETE FROM users WHERE id = $id ";
// if (mysqli_query($db, $delete)) {
//     $_SESSION['delete_user'] = 'deleted user successfully';
//     header('location:users.php');
// }
