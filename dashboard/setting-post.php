<?php
  require_once '../db.php';
  session_start();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $copyright = $db->real_escape_string($_POST['copyright']);
    $tagline = $_POST['tagline'];
    $about = $db->real_escape_string($_POST['about']);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $office_address = $_POST['office_address'];



    $insert ="INSERT INTO settings (copyright, tagline, about, email, phone, office_address) VALUES('$copyright', '$tagline' ,'$about', '$email', '$phone', '$office_address')";
    $q= mysqli_query($db, $insert);

      if ($q) {
        header('location:settings.php');
      }

      else {
        echo 'errors';
      }

  }

?>