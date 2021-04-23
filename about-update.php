<?php
 require_once('session.php');
 require_once('../db.php');

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sub_tittle = $_POST['sub_tittle'];
    $tittle = $_POST['tittle'];
    $paragraph = $_POST['paragraph'];
    $id= $_SESSION['id'];


   $image_name = ($_FILES['about_img']['name']);
   $explode = explode('.', $image_name);
   $ext= end($explode);
   $allow_format =['jpg', 'png', 'JPEG'];


  //  $insert= "INSERT INTO about_part (sub_tittle, tittle, paragraph) VALUES('$sub_tittle','$tittle','$paragraph')";
  //  $insert_q =mysqli_query($db, $insert);


   if (in_array($ext, $allow_format)) {
    if ($_FILES['about_img']['size'] < 50000000000) {
      $new_ext = $id. '.'.$ext;

      $img_cheak= "SELECT * FROM about_part WHERE id= $id";
      $img_query= mysqli_query($db, $img_cheak);
      $img_assoc = mysqli_fetch_assoc($img_query);
      $old_img_location = 'upload/about_image'. $img_assoc['about_img'];
      if (file_exists($old_img_location) != 'default.png') {
        unlink($old_img_location);
      }

      $new_location = 'upload/about_image'. $new_ext;
      move_uploaded_file($_FILES['about_img']['tmp_name'],$new_location);
        
      $update="UPDATE about_part SET sub_tittle='$sub_tittle', tittle='$tittle', paragraph= '$paragraph', about_img= '$new_ext' WHERE id =$id";
      $q= mysqli_query($db, $update);
      if ($q) {
        $_SESSION['tittle']= $assoc['tittle'];
        header('location:about.php');
      }
    }
    else {
      echo 'no';
    }
   }
   else {
     echo 'not allow';
   }

    
 }

?>