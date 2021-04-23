<?php
  require_once '../db.php';
  session_start();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sub_tittle = $db->real_escape_string($_POST['sub_tittle']);
    $tittle = $db->real_escape_string($_POST['tittle']);
    $paragraph = $db->real_escape_string($_POST['paragraph']);
    $id= $_SESSION['id'];



    $insert ="INSERT INTO about_part (sub_tittle, tittle, paragraph) VALUES('$sub_tittle', '$tittle' ,'$paragraph')";
    $q= mysqli_query($db, $insert);
    // $last_insert_id = mysqli_insert_id($db);

      if ($q) {
        header('location:about.php');
      }



   $image_name = ($_FILES['about_img']['name']);
   $explode = explode('.', $image_name);
   $ext= end($explode);
   $allow_format =['jpg', 'png', 'JPEG'];


    if (in_array($ext, $allow_format)) {
        if ($_FILES['about_img']['size'] < 50000000) {
          $new_ext = $last_insert_id. '.'.$ext;

          $new_location = 'upload/about_image/'. $new_ext;
          move_uploaded_file($_FILES['about_img']['tmp_name'],$new_location); 
          
          $logo_update ="UPDATE about_part SET about_img = '$new_ext' WHERE id = $id ";
          mysqli_query($db, $logo_update);
          header('location:about.php');
        } 
          else {
            echo 'no';
          }
     }




  }

?>