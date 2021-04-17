<?php
  require_once '../db.php';
  session_start();

  $id = $_GET['id'];
  $select = "SELECT * FROM contacts WHERE id = $id ";
  $q= mysqli_query($db, $select);
  $assoc = mysqli_fetch_assoc($q);

   if ($assoc['status'] == 1) {
    $update_status = "UPDATE contacts SET status = 2 WHERE id = $id";
      if (mysqli_query($db, $update_status)) {
          header('location:contacts.php');
      }
   }
   else {
      $update_status = "UPDATE contacts SET status = 1 WHERE id = $id";
      if (mysqli_query($db, $update_status)) {
          header('location:contacts.php');
      }
   }






// 
// if (mysqli_query($db, $delete)) {
//     $_SESSION['delete_user'] = 'deleted user successfully';
//     header('location:users.php');
// }
