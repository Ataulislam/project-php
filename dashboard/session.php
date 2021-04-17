<?php
 session_start();
if (!isset($_SESSION['email'])) {
  header('location:../login.php');
}
// else{
//   if ($_SESSION['role'] == 1) {
//     header('location:userdashboard.php');
//   }
//   elseif ($_SESSION['role'] == 2) {
//     header('location:admindashboard.php');
//   }
//   else {
//     header('location:employee.php');
//   }
// }
 
?>